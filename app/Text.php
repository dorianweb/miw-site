<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    function block(){
        return $this->belongsTo(Block::class);
    }
}
