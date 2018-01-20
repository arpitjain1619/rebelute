<?php


use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		[
    			'name' => str_random(10),
    			'email' => str_random(10).'@gmail.com',
    			'password' => Hash::make('qwerty'),
    			'phone' => '+91 - 0987654321',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
,    		],
    		[
    			'name' => str_random(10),
    			'email' => str_random(10).'@gmail.com',
    			'password' => Hash::make('qwerty'),
    			'phone' => '+91 - 0987654321',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
    		],
    		[
    			'name' => str_random(10),
    			'email' => str_random(10).'@gmail.com',
    			'password' => Hash::make('qwerty'),
    			'phone' => '+91 - 0987654321',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
    		]
    	]
    );
    }
}
