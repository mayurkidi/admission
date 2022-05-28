<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Academicdetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'leavingcertificate',
        'aadharcard',
        'marksheet10',
        'marksheetd2d',
        'marksheet12',
        'marksheetgraduation',
    ];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
