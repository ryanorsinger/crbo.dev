<?php

class Device extends Eloquent {

	protected $table = 'devices';

	public static $rules = array(
	   
	    
	);

	public function cpus()
	{
		return $this->belongsToMany('Cpu');
	}

	public function hdds()
	{
		return $this->belongsToMany('Hdd');
	}
	
	public function manufacturers()
	{
		return $this->belongsToMany('Manufacturer');
	}

	public function rams()
	{
		return $this->belongsToMany('Ram');
	}

	public function users()
	{
		return $this->belongsToMany('User');
	}


}



