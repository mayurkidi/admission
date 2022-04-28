<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'amount',
        'paymentstatus',
        'paymentproof',
    ];

     public function users(){
        return $this->hasMany(User::class,'id');
    }
}
