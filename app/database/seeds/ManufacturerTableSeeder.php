<?php

class ManufacturerTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('manufacturer')->delete();

        	$manufacturer = new Manufacturer();
                $manufacturer->company = 'Dell';
                $manufacturer->price = 5;
                $manufacturer->save();

                $manufacturer = new Manufacturer();
                $manufacturer->company = 'HP';
                $manufacturer->price = 5;
                $manufacturer->save();

                $manufacturer = new Manufacturer();
                $manufacturer->company = 'Compaq';
                $manufacturer->price =3;
                $manufacturer->save();

                $manufacturer = new Manufacturer();
                $manufacturer->company = 'Toshiba';
                $manufacturer->price = 0;
                $manufacturer->save();

                $manufacturer = new Manufacturer();
                $manufacturer->company = 'Sony';
                $manufacturer->price = 5;
                $manufacturer->save();

                $manufacturer = new Manufacturer();
                $manufacturer->company = 'Gateway';
                $manufacturer->price = 3;
                $manufacturer->save();

                $manufacturer = new Manufacturer();
                $manufacturer->company = 'e-Machine';
                $manufacturer->price = 5;
                $manufacturer->save();


	}
}