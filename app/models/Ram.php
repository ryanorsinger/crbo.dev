<?php

class Ram extends Eloquent {

	protected $table = 'ram';
	
	public function devices(){

		return $this->belongsToMany('Device');
	}
}