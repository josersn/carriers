<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = [
        'name', 'lastName', 'birth_date', 'gender'
    ];
}
