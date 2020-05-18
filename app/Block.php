<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    function texts()
    {
        return $this->belongsToMany(Text::class);
    }

    function pictures()
    {
        return $this->belongsToMany(Picture::class);
    }

    function subpages()
    {
        return $this->belongsToMany(Subpage::class);
    }
}
