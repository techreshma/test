<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   public $table = "events";

    public function workshop()
    {
        return $this->hasMany('App\Models\Workshop','event_id');
    }
}
