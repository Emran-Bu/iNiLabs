<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        'id', 'employee_name', 'employee_designation', 'salary',
    ];
}
