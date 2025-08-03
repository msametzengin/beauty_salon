<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Traitment;
use App\Models\User;
use Illuminate\Support\Str;


class TakeApp extends Component
{

    public $name, $surname, $tc_id, $email, $birth_date, $phone;
    public $doctor_id, $traitment_id, $date, $message;

    public $doctors = [];
    public $traitments = [];

    public function mount()
    {
        $this->doctors = User::whereHas('roles', function ($q) {
        $q->where('id', 2); // doktor rolü id'si
        })->select('id', 'name')->get();
        $this->traitments = Traitment::all();
    }

    public $isSubmitted = false;

    public function submit()
    {
       $this->validate([
            'name' => 'required|string|min:2|max:50',             
            'surname' => 'required|string|min:2|max:50',          
            'tc_id' => 'required|string|min:11|max:11|regex:/^[0-9]+$/', 
            'email' => 'required|email',                           
            'birth_date' => 'required|date|before_or_equal:' . \Carbon\Carbon::now()->subYears(18)->format('Y-m-d') . '|after_or_equal:' . \Carbon\Carbon::now()->subYears(100)->format('Y-m-d'),          
            'phone' => 'required|string|min:10|max:10|regex:/^[0-9]+$/',   
            'doctor_id' => 'required',            
            'traitment_id' => 'required',     
            'date' => 'required|date|after_or_equal:today|before_or_equal:' . now()->addYear()->format('Y-m-d'),        
        ]);

        $patient = Patient::where('tc_id', $this->tc_id)->first();

        if (!$patient) {
            $patient = Patient::create([
                'name' => $this->name,
                'surname'=> $this->surname,
                'tc_id' => $this->tc_id,
                'email' => $this->email,
                'birth_date' => $this->birth_date,
                'phone' => $this->phone,
            ]);
        }

        Appointment::create([
            'patient_id' => $patient->id,
            'doctor_id' => $this->doctor_id,
            'traitment_id' => $this->traitment_id,
            'date' => $this->date,
            'status' => 'waiting',
        ]);

        // session()->flash('message', 'Randevunuz başarıyla oluşturuldu.');
        // $this->reset();

         $this->isSubmitted = true;
    }

    public function newAppointment()
    {
        $this->reset([
            'name', 'surname', 'tc_id', 'birth_date', 'email', 'phone',
            'doctor_id', 'traitment_id', 'date', 'isSubmitted'
        ]);
    }

    public function render()
    {
        return view('livewire.take-app');
    }
}
