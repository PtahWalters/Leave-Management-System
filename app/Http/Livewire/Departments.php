<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\View;
use App\Models\Department;

class Departments extends Component
{
    public Department $department;
    public $departments;
    public $showSuccesNotification  = false;
    protected $rules = [
        'department.name' => 'required',
        'department.hod' => 'required',
        'department.assistant-hod' => 'required'
    ];

    public function __construct(){
        View::share('newlinktitle', 'Create department');
        View::share('newlink', 'create-department');
    }

    public function render()
    {
        $this->departments = Department::all();
        return view('livewire.departments');
    }

    public function mount() { 
        $this->leave = new Department;
     }
}
