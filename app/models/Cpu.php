<?php

class Cpu extends Eloquent {

	protected $table = 'cpus';
	
	public function devices(){

		return $this->belongsToMany('Device');
	}

}

