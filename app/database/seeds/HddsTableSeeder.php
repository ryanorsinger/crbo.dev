<?php

class HddsTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('hdds')->delete();

                $hdd = new Hdd();
                $hdd->form_factor = 'None';
                $hdd->interface = '';
                $hdd->capacity = '';                
                $hdd->price = 0;
                $hdd->save();

        	$hdd = new Hdd();
                $hdd->form_factor = '3.5';
                $hdd->interface = 'IDE';
                $hdd->capacity = '160GB';                
                $hdd->price = 2;
                $hdd->save();

                $hdd = new Hdd();
                $hdd->form_factor = '3.5';
                $hdd->interface = 'SATA';
                $hdd->capacity = '250GB';                
                $hdd->price = 8;
                $hdd->save();

                $hdd = new Hdd();
                $hdd->form_factor = '3.5';
                $hdd->interface = 'IDE';
                $hdd->capacity = '80GB';                
                $hdd->price = 5;
                $hdd->save();

                $hdd = new Hdd();
                $hdd->form_factor = '2.5';
                $hdd->interface = 'IDE';
                $hdd->capacity = '20GB';                
                $hdd->price = 3;
                $hdd->save();

                $hdd = new Hdd();
                $hdd->form_factor = '2.5';
                $hdd->interface = 'IDE';
                $hdd->capacity = '80GB';                
                $hdd->price = 8;
                $hdd->save();

                $hdd = new Hdd();
                $hdd->form_factor = '2.5';
                $hdd->interface = 'SATA';
                $hdd->capacity = '160GB';                
                $hdd->price = 10;
                $hdd->save();


               
	}
}