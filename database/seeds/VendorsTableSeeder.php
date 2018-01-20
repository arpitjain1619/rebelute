<?php

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('vendors')->insert([
    		[
    			'name' => str_random(10),
    			'email' => str_random(10).'@gmail.com',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
    		],
    		[
    			'name' => str_random(10),
    			'email' => str_random(10).'@gmail.com',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
    		],
    		[
    			'name' => str_random(10),
    			'email' => str_random(10).'@gmail.com',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
    		],
    		[
    			'name' => str_random(10),
    			'email' => str_random(10).'@gmail.com',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
    		],
    		[
    			'name' => str_random(10),
    			'email' => str_random(10).'@gmail.com',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
    		]
    	]
    );
    }
}
