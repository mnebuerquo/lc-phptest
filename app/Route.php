<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
	public function stops(){
		return $this->hasMany('App\Stop');
	}
}
