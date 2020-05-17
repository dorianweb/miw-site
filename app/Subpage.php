<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subpage extends Model
{
    function  blocks(){
        return $this->hasMany(Block::class);
    }
    function page(){
        return $this->belongsTo(Page::class);
    }
}
