<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Lists extends Component
{
    public $studentsData = [];
    public function render()
    {
        $this->studentsData=Student::all();
        dd($this->studentsData);
        return view('livewire.lists');
    }
   
}
