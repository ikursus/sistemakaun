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
    	// Contoh user 1
        DB::table('users')->insert([
        	'username' => 'admin',
        	'no_staf' => 'ABC001',
            'nama_staff' => 'Ahmad Albab',
            'email' => 'ahmadalbab@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        // Contoh user 2
        DB::table('users')->insert([
        	'username' => 'user',
        	'no_staf' => 'ABC002',
            'nama_staff' => 'Aser 2',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
        ]);

        // Contoh user 3
        DB::table('users')->insert([
        	'username' => 'demo',
        	'no_staf' => 'ABC003',
            'nama_staff' => 'Demo User',
            'email' => 'demo@gmail.com',
            'password' => bcrypt('demo'),
        ]);
    }
}
