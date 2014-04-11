<?php

class Manufacturer extends Eloquent {

	protected $table = 'manufacturers';
	
	public function devices()
	{
		return $this->belongsToMany('Device');
	}
}