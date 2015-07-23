<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    //
	public function route(){
		return $this->belongsTo('App\Route');
	}
}
