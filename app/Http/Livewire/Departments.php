<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\View;

class Departments extends Component
{
    public function __construct(){
        View::share('newlinktitle', 'Create department');
        View::share('newlink', 'create-department');
    }

    public function render()
    {
        return view('livewire.departments');
    }
}
