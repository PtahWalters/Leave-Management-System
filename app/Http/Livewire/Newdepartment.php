<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Department;

class Newdepartment extends Component
{
    public Department $department;
    public $showSuccesNotification  = false;
    protected $rules = [
        'department.name' => 'required',
        'department.hod' => 'required',
        'department.assistant-hod' => 'required'
    ];

    public function mount() { 
       // $this->department = auth()->department();
    }

    public function save() {
        $this->validate();
        $this->department->save();
        $this->showSuccesNotification = true;
    }

    public function render()
    {
        return view('livewire.new-department');
    }
}
