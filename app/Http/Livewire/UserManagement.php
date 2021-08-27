<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\View;

class UserManagement extends Component
{

    public function __construct(){
        View::share('newlinktitle', 'Create user');
        View::share('newlink', 'dashboard');
    }

    public function render()
    {
        return view('livewire.user-management');
    }
}
