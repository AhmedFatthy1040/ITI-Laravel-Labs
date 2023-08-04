<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'IDno',
        'track_id',
        'age',
    ];

    // Add any other relationships, methods, or properties relevant to the Student model here.
}
