<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Traitment;

class Services extends Component
{
    public $services;

    public function mount()
    {
        $this->services = Traitment::all()->toArray();
    }

    public function render()
    {
        return view('livewire.services');
    }
}
