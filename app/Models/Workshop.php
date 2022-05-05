<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{

    public $table = "workshops";
    
    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
   
}
