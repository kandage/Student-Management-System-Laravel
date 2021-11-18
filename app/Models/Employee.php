<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName',
        'email',
        'mobile',
        'city',
        'gender',
        'departmentId',
        'hireDate',
        'isPerment'
    ];
}
