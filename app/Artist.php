<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name','avatar_id', 'style', 'started', 'info', 'tattoos'
    ];

    public function tattoo(){
        return $this->hasMany('App\Tattoo');
    }

    public function avatar(){
        return $this->belongsTo('App\Avatar');
    }
}
