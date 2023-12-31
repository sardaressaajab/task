<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['name','email','dob','notes','courses'];

    protected $casts = [
        'courses' => 'array'
        ];
}
