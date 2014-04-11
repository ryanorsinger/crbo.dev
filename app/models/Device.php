<?php

class Device extends Eloquent {

	protected $table = 'devices';

	public function cpus()
	{
		return $this->hasMany('Cpu');
	}

	public function hdds()
	{
		return $this->hasMany('Hdd');
	}
	
	public function manufacturers()
	{
		return $this->hasMany('Manufacturer');
	}

	public function rams()
	{
		return $this->hasMany('Ram');
	}

	public function users()
	{
		return $this->hasMany('User');
	}


}



