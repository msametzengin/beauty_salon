<?php

namespace App\Filament\Doctor\Widgets;

use Filament\Widgets\Widget;
use \Guava\Calendar\Widgets\CalendarWidget;
use App\Models\Appointment;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Filament\Actions\Action;
use Filament\Actions\ViewAction;
use Filament\Actions\CreateAction;
use App\Filament\Doctor\Resources\AppointmentResource;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Fieldset;
use Illuminate\Support\HtmlString;

class Calendar extends CalendarWidget
{

    
    
    protected bool $eventClickEnabled = true;

    protected $listeners = ['refreshCalendar' => '$refresh'];


    public function getHeading(): string
    {
        return "Randevular";
    }

    public function getEvents(array $fetchInfo = []): Collection | array
    {
        $appoitments = Appointment::where('doctor_id', Auth::id())->get();
        return $appoitments ?? [];

        // return Appointment::where('doctor_id', Auth::id())->get()->map(function ($appointment) {
        // return [
        //     'title' => $appointment->traitment->name,
        //     'start' => $appointment->date,
        //     'end' => $appointment->date,
        //     'extendedProps' => [
        //         'key' => $appointment->id,
        //         'status' => $appointment->status,
        //     ],
        // ];
    // });
    }

    public function getOptions(): array
    {
        return [
            'allDaySlot' => false,
            'slotMinTime' => '08:00:00',
            'slotMaxTime' => '20:00:00',
            'buttonText' => [
                'close' => __('Kapat'),
                'dayGridMonth' => __('Ay'),
                'listWeek' => __('Liste'),
                'resourceTimeGridDay' => __('Gün'),
                'timeGridWeek' => __('Hafta'),
                'today' => __('Bugün'),
            ],
            'editable' => true
            // 'eventBackgroundColor' => ''
            // 'headerToolbar' => [
            //     'start' => 'prev,next today',
            //     'center' => 'title',
            //     'end' => 'dayGridMonth,timeGridWeek,resourceTimeGridDay,listWeek',
            // ],
            // 'scrollTime' => '09:00:00',
            // 'views' => [
            //     'timeGridWeek' => ['pointer' => true],
            //     'resourceTimeGridWeek' => ['pointer' => true],
            // ],
            // 'dayMaxEvents' => true,
            // //            'nowIndicator' => true,
            // 'moreLinkContent' => __('Tümünü Gör'),
            // //            'selectable' => true
        ];
    }

    public function getEventClickContextMenuActions(): array
    {
        return [
            $this->viewAction(),
            $this->setWaitingAction(),
            $this->setAcceptedAction(),
            $this->setDeniedAction(),
        ];
    }

    public function viewAction(): Action
    {
        return ViewAction::make()
            ->label('Görüntüle')
            ->modalHeading('Randevu')
            ->modal(true)
            ->record( fn ($arguments) => Appointment::find($arguments['event']['extendedProps']['key'] ?? null))
            ->infolist([
                    Section::make('Hasta Bilgileri')
                            ->icon('heroicon-o-users')
                            ->statePath('patient')
                            ->columns(3)
                            ->schema([
                                TextEntry::make('name')->label('Adı'),
                                TextEntry::make('surname')->label('Soyadı'),
                                TextEntry::make('phone')->label('Telefon'),

                        ]),

                        Section::make('Randevu Bilgileri')
                            ->icon('heroicon-o-calendar')
                            ->columns(3)
                            ->schema([
                                TextEntry::make('date')->label('Tarihi')->dateTime(),
                                TextEntry::make('traitment.name')->label('İşlem'),
                                IconEntry::make('status')->label('Durumu')
                                    ->color(fn (string $state): string => match ($state){
                                        'waiting' => 'warning',
                                        'denied' => 'danger',
                                        'accepted' => 'success',
                                    })
                                    ->icon(fn (string $state): string => match ($state){
                                        'waiting' => 'heroicon-o-clock',
                                        'denied' => 'heroicon-o-x-circle',
                                        'accepted' => 'heroicon-o-check-circle',
                                    })

                            ]),
                ]);
    }

    protected function setWaitingAction(): Action
    {
        return Action::make('set_waiting')
            ->label('⏳ Beklemeye Al')
            ->record( fn ($arguments) => Appointment::find($arguments['event']['extendedProps']['key'] ?? null))
            ->color('warning')
            ->requiresConfirmation()
            ->model(Appointment::class)
            ->hidden(fn ($record) => $record?->status == 'waiting')
            ->action(fn ($record) => $record?->update(['status'=> 'waiting']));
    }

    protected function setAcceptedAction(): Action
    {
        return Action::make('set_accepted')
            ->label('✅ Kabul Et')
            ->record( fn ($arguments) => Appointment::find($arguments['event']['extendedProps']['key'] ?? null))
            ->color('success')
            ->requiresConfirmation()
            ->model(Appointment::class)
            ->hidden(fn ($record) => $record?->status == 'accepted')
            ->action(fn ($record) => $record?->update(['status'=> 'accepted']));
    }

    protected function setDeniedAction(): Action
    {
        return Action::make('set_denied')
            ->label('❌ Reddet')
            ->record( fn ($arguments) => Appointment::find($arguments['event']['extendedProps']['key'] ?? null))
            ->color('danger')
            ->model(Appointment::class)
            ->requiresConfirmation()
            ->hidden(fn ($record) => $record?->status == 'denied')
            ->action(function ($record) {
                $record->update(['status'=> 'denied']);
                $this->dispatch('$refresh');
            });
    }
    
    public function authorize($ability, $arguments = [])
    {
        return true;
    }
}
