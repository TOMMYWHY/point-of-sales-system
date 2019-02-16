<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	    DB::table('products')->insert([
	    	[
	    		'name'=>'iphone6 screen white',
			    'trait'=>'white',
			    'desc'=>'iphone 6 screen lcd white',
			    'category_id'=>1,
			    'price'=>'69',
			    'discount'=>'5',
			    'stock'=>'20',
			    'brand_id'=>1,

		    ],
		    [
			    'name'=>'iphone6 screen black',
			    'trait'=>'black',
			    'desc'=>'iphone 6 screen lcd black',
			    'category_id'=>1,
			    'price'=>'69',
			    'discount'=>'5',
			    'stock'=>'20',
			    'brand_id'=>1,
		    ],
		    [
			    'name'=>'iphone7 screen black',
			    'trait'=>'black',
			    'desc'=>'iphone 7 screen lcd black',
			    'category_id'=>1,
			    'price'=>'139',
			    'discount'=>'10',
			    'stock'=>'10',
			    'brand_id'=>1,
		    ]
	    ]);
    }
}
