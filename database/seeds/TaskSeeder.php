<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	    DB::table('Tasks')->insert([
		    [
			    'customer_id'=>1,
			    'issue'=>'screen broken',
			    'desc'=>'asdasdasdasd',
			    'product_id'=>1,

			    'comment'=>'asdasdasdadsasdasdasd',
		    ]
	    ]);
    }
}
