<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Leave;

class Newleave extends Component
{
    public Leave $leave;
    public $showSuccesNotification  = false;

    protected $rules = [
        'leave.name' => 'required',
        'leave.days' => 'required|int|max:2'
    ];

    public function mount() { 
       $this->leave = new Leave;
    }

    public function save() {
        $this->validate();
        $this->leave->save();
        $this->showSuccesNotification = true;
    }

    public function render()
    {
        return view('livewire.new-leave');
    }
}
