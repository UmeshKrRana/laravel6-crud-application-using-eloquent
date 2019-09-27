<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Mass Assignment
    protected $fillable = [
            'first_name',
            'last_name',
            'full_name',
            'dob',
            'email',
            'phone',
            'gender',
            'address',
            'zipcode'
    ];
}
