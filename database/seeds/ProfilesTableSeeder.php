<?php

use Illuminate\Database\Seeder;

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
    }
}
