<?php

class CpuTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('cpu')->delete();

        	$cpu = new Cpu();
                $cpu->make = 'AMD';
                $cpu->model = 'Sempron';
                $cpu->number_of_cores = '1';
                $cpu->speed = '3000+';
                $cpu->price = 5;
                $cpu->save();

                $cpu = new Cpu();
                $cpu->make = 'AMD';
                $cpu->model = 'Athlon 64';
                $cpu->number_of_cores = '1';
                $cpu->speed = '3500+';
                $cpu->price = 5;
                $cpu->save();

                $cpu = new Cpu();
                $cpu->make = 'AMD';
                $cpu->model = 'Athlon 64 x2';
                $cpu->number_of_cores = '2';
                $cpu->speed = '3800+';
                $cpu->price = 10;
                $cpu->save();

                $cpu = new Cpu();
                $cpu->make = 'Intel';
                $cpu->model = 'Pentium 4';
                $cpu->number_of_cores = '1';
                $cpu->speed = '2.8 Ghz';
                $cpu->price = 2;
                $cpu->save();

                $cpu = new Cpu();
                $cpu->make = 'Intel';
                $cpu->model = 'Core2Duo';
                $cpu->number_of_cores = '2';
                $cpu->speed = '2.6 Ghz';
                $cpu->price = 10;
                $cpu->save();

                $cpu = new Cpu();
                $cpu->make = 'Intel';
                $cpu->model = 'i3';
                $cpu->number_of_cores = '4';
                $cpu->speed = '2.8 Ghz';
                $cpu->price = 15;
                $cpu->save();
               
	}
}