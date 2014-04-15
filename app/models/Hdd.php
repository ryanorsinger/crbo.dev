<?php

class Hdd extends Eloquent {

	protected $table = 'hdds';
	
	public function devices()
	{

		return $this->belongsToMany('Device', 'device_hdd');
	}
}