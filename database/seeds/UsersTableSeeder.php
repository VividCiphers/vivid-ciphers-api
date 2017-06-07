<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
            'email' => 'fizen@gmail.com',
            'password' => bcrypt('random_test_pass1')
        ]);
          DB::table('users')->insert([
            'email' => 'gp22@gmail.com',
            'password' => bcrypt('random_test_pass1')
        ]);
        DB::table('users')->insert([
            'email' => 'rtyrolia@gmail.com',
            'password' => bcrypt('random_test_pass1')
        ]);
        DB::table('users')->insert([
            'email' => 'amrit@gmail.com',
            'password' => bcrypt('random_test_pass1')
        ]);
        DB::table('users')->insert([
            'email' => 'ankit@gmail.com',
            'password' => bcrypt('random_test_pass1')
        ]);
        DB::table('users')->insert([
            'email' => 'petra@gmail.com',
            'password' => bcrypt('random_test_pass1')
        ]);
    }
}
        