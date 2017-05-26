<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("skills")->insert([
            "skill_name" => "PHP",
            "skill_description" => "PHP is an older web language that is widely used."
        ]);

         DB::table("skills")->insert([
            "skill_name" => "Javascript",
            "skill_description" => "Javascript is THE language of the web."
        ]);
    }
}
