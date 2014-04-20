<?php

class RamsTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('rams')->delete();

                $ram = new Ram();
                $ram->type = 'None';
                $ram->speed = NULL;
                $ram->size = NULL;                
                $ram->price = 0;
                $ram->save();

                $ram = new Ram();
                $ram->type = 'DDR1';
                $ram->speed = 'PC3200';
                $ram->size = '512mb';                
                $ram->price = 1;
                $ram->save();

        	$ram = new Ram();
                $ram->type = 'DDR1';
                $ram->speed = 'PC3200';
                $ram->size = '512mb';                
                $ram->price = 1;
                $ram->save();

                $ram = new Ram();
                $ram->type = 'DDR1';
                $ram->speed = 'PC2700';
                $ram->size = '512mb';                
                $ram->price = 1;
                $ram->save();

                $ram = new Ram();
                $ram->type = 'DDR1';
                $ram->speed = 'PC3200';
                $ram->size = '1gb';                
                $ram->price = 3;
                $ram->save();

                $ram = new Ram();
                $ram->type = 'DDR2';
                $ram->speed = 'PC2 5300';
                $ram->size = '1gb';                
                $ram->price = 3;
                $ram->save();

                $ram = new Ram();
                $ram->type = 'DDR2';
                $ram->speed = 'PC2 5300';
                $ram->size = '2gb';                
                $ram->price = 6;
                $ram->save();

                $ram = new Ram();
                $ram->type = 'DDR2';
                $ram->speed = 'PC2 5300';
                $ram->size = '512mb';                
                $ram->price = 1;
                $ram->save();
               
	}
}