<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\View;
use App\Models\Organization;

class Organizations extends Component
{
    public Organization $organization;
    public $showSuccesNotification  = false;
    
    protected $rules = [
        'organization.name' => 'max:40|min:3',
        'organization.logo' => 'required',
        'organization.country' => 'required',
        'organization.week' => 'required',
        'organization.yearstart' => 'required',
        'organization.servername' => 'required',
        'organization.serverusername' => 'email:rfc,dns',
        'organization.serverpassword' => 'max:14',
        'organization.serverport' => 'max:3'
    ];

    public function mount() { 
        $this->organization = new Organization();
    }

    public function save() {
        $this->validate();
        $this->user->save();
        $this->showSuccesNotification = true;
    }
    public function render()
    {
        return view('livewire.organization');
    }
}