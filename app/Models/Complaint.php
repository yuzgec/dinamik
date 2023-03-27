<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'complaints';

    public function getUser(){
        return $this->hasOne('App\Models\User', 'id','user_id');
    }
}
