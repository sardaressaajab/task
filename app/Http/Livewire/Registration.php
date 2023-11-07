<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
 

public $email;
 public $name;
    
 public $password;
 
 public function submit(){
    $this->validate([
        'name'=> 'required',
        'email' => 'required|email',   
        'password'=> 'required|min:3|max:10',
    ]);
}
 public function render()    {
            return view('livewire.registration');
        }
        
    
}
