<?php

use Illuminate\Database\Seeder;
use App\User;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('profiles')->insert([
            'user_id' => 1,
            'first_name' => 'ryan',
            'last_name' => 'fizen',
            'biography' => 'Ryan is a Senior Software Developer with 10 years of experience.',
            'country' => 'United States',
            'province' => 'Tennessee',
            'city' => 'Bristol',
            'years_experience' => 11,
            'image_path' => 'Ryan2.png',
            'image_text' => 'Ryan'
        ]);

             DB::table('profiles')->insert([
            'user_id' => 2,
            'first_name' => 'Paul',
            'last_name' => 'Garcia',
            'biography' => '',
            'country' => 'United States',
            'province' => 'San Fransico',
            'city' => '',
            'years_experience' => 2,
            'image_path' => '',
            'image_text' => 'Paul'
        ]);

             DB::table('profiles')->insert([
            'user_id' => 3,
            'first_name' => 'Anna',
            'last_name' => 'Ryder',
            'biography' => 'Fearless leader',
            'country' => '',
            'province' => '',
            'city' => '',
            'years_experience' => 5,
            'image_path' => 'rtyrolia.png',
            'image_text' => 'Anna'
        ]);


           DB::table('profiles')->insert([
            'user_id' => 4,
            'first_name' => 'Amrit',
            'last_name' => '',
            'biography' => 'Team Lead Dude',
            'country' => '',
            'province' => '',
            'city' => '',
            'years_experience' => 1,
            'image_path' => 'amrit.png',
            'image_text' => 'Amrit'
        ]);

        DB::table('profiles')->insert([
            'user_id' => 5,
            'first_name' => 'Ankit',
            'last_name' => '',
            'biography' => 'Developer Dude',
            'country' => '',
            'province' => '',
            'city' => '',
            'years_experience' => 1,
            'image_path' => 'Ankit.png',
            'image_text' => 'Ankit'
        ]);

        DB::table('profiles')->insert([
            'user_id' => 6,
            'first_name' => 'Petra',
            'last_name' => '',
            'biography' => 'Developer Person',
            'country' => '',
            'province' => '',
            'city' => '',
            'years_experience' => 1,
            'image_path' => 'petra.png',
            'image_text' => 'Petra'
        ]);
    }
}
