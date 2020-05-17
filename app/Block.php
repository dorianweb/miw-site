<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    function texts()
    {
        return $this->hasMany(Text::class);
    }

    function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
