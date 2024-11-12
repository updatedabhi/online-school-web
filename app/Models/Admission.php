<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'class', 'dob', 'adhar', 'father', 'mother', 'address', 'phone', 'email'
    ];
}
