<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	    DB::table('Customers')->insert([
	    	[
	    		'name'=>'walk_in',
	    		'email'=>'test@test.com',
	    		'phone'=>'123456',
	    		'pin_code'=>'123',
	    		'level'=>'0',
			    'comment'=>'walk in customer',
		    ]
	    ]);
    }
}
