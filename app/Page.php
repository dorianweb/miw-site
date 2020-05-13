<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function  texts(){
        return $this->hasMany(Text::class);
    }
    public function  pictures(){
        return $this->hasMany(Picture::class);
    }
}
