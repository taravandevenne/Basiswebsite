<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tattoo extends Model
{
    protected $fillable = [
        'name', 'artist_id', 'price', 'advance_id', 'photo_id'
    ];

    public function artist(){
        return $this->belongsTo('App\Artist');
    }

    public function advance(){
        return $this->belongsTo('App\Advance');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
