<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\register;

class Registration extends Component
{
    public $name;
    public $email;
    public $password;
    public $dob;
    public $notes;
    public $courses = [];

    public function submit()
    {
        $validateData=$this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3|max:10',
            'dob'=> 'required',
            'notes'=>'required',
            ]);
            $student= new register;
            $create=register::create($validateData);
            $userid=$create->id;
            $student->courses = implode(',',$this->courses);
            $student->save();
            session()->flash('success','Successfully Registered');
            session()->flash('alert-class', 'alert-danger'); 
        }
    public function updated($feild){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3|max:10',
        
        ]);
    }

    public function render()
    {
        return view('livewire.registration');
    }
}

