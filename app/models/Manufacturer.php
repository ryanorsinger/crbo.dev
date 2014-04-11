<?php

class Manufacturer extends Eloquent {

	protected $table = 'manufacturer';
	
	public function devices()
	{
		return $this->belongsToMany('Device');
	}
}