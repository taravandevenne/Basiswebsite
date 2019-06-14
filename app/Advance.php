<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    protected $fillable = [
        'name', 'range', 'amount'
    ];

    public function tattoo(){
        return $this->hasMany('App\Tattoo');
    }
}
