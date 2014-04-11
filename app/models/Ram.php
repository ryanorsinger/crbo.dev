<?php

class Ram extends Eloquent {

	protected $table = 'rams';
	
	public function devices(){

		return $this->belongsToMany('Device');
	}
}