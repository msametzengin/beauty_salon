<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Guava\Calendar\ValueObjects\CalendarEvent;
use Guava\Calendar\Contracts\Eventable;


class Appointment extends Model implements Eventable
{
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'traitment_id',
        'status',
        'procedure_type',
        'date'
    ];

    protected $casts = [
      'date' => 'datetime',
    ];



    public function doctor(): BelongsTo
    {
      return $this->belongsTo(Doctor::class);
    }

    public function patient(): BelongsTo
    {
      return $this->belongsTo(Patient::class);
    }

    public function traitment(): BelongsTo
    {
      return $this->belongsTo(Traitment::class);
    }

    public function toCalendarEvent(): array|CalendarEvent
    {

      $color = match ($this->status) {
          'waiting' => '#facc15', // sarı (yaklaşık Tailwind yellow-400)
          'accepted' => '#22c55e', // yeşil (yaklaşık Tailwind green-500)
          'denied' => '#ef4444',   // kırmızı (yaklaşık Tailwind red-500)
          default => '#d1d5db',    // gri
      };

      return CalendarEvent::make($this)
        ->title($this->traitment->name)
        ->start($this->date)
        ->end($this->date->addMinutes(30))
        ->extendedProps([
          'key'=> $this->id,
          'status'=> $this->status
          ])  
        ->backgroundColor($color)
        ->durationEditable(false);
    }    
    
}
