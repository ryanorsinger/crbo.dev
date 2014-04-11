<?php

class Hdd extends Eloquent {

	protected $table = 'hdd';
	
	public function devices()
	{

		return $this->belongsToMany('Device');
	}
}