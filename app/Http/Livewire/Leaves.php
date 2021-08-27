<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\View;
use App\Models\Leave;

class Leaves extends Component
{
    public Leave $leave;
    public $leave_types;
    public $showSuccesNotification  = false;
    protected $rules = [
        'leave.name' => 'required',
        'leave.days' => 'required|int|max:2'
    ];

    public function __construct(){
        View::share('newlinktitle', 'Add leave type');
        View::share('newlink', 'create-leave');
    }

    public function render()
    {
        $this->leave_types = Leave::all();
        return view('livewire.leaves');
    }

    public function mount() { 
        $this->leave = new Leave;
     }

    public function edit($id) {
        $flight = Leave::find($id);
        $this->validate();

        $flight->save();
        $this->showSuccesNotification = true;
    }


    public function delete($id) {
        $flight = Leave::find($id);
        $this->validate();

        $flight->delete();
        $this->showSuccesNotification = true;
    }

}
