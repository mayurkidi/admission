<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Applicationdetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'course',
        'specialization',
        'applicationstatus',
        'graduationtype'
    ];

    
}
