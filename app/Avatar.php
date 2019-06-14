<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $uploads='/avatars/';
    protected $fillable = [
        'file',
    ];

    public function getFileAttribute($avatar){
        return $this->uploads . $avatar;
    }
}
