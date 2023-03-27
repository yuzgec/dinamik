<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferTheme extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'offer_themes';

    public function getUser(){
        return $this->hasOne('App\Models\User', 'id','user_id');
    }
}
