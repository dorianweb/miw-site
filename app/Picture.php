<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
     function page(){
         return $this->belongsTo(Page::class);
     }
}
