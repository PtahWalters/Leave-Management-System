<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Newholiday extends Component
{
    //public Holiday $holiday;
    public $showSuccesNotification  = false;
    protected $rules = [
        'holiday.name' => 'required',
        'holiday.date' => 'required'
    ];

    public function mount() { 
       // $this->department = auth()->department();
    }

    public function save() {
        $this->validate();
        $this->holiday->save();
        $this->showSuccesNotification = true;
    }

    public function render()
    {
        return view('livewire.new-holiday');
    }
}
