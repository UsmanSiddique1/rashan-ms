<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rashan;

class RashanItem extends Model
{
    public function rashan(){

    	return $this->belongsTo('App\Rashan');
    }
}
