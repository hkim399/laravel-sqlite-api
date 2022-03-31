<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // for 18
    protected $fillable = [
        'FirstName',
        'LastName',
        'School'
    ];
    
}
