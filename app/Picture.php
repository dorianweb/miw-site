<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
     function block(){
         return $this->belongsToMany(Block::class);
     }
}
