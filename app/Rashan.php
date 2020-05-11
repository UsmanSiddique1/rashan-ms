<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RashanItem;

class Rashan extends Model
{
    
    public function rashanitems(){

    	return $this->hasMany('App\RashanItem');
    }
}
