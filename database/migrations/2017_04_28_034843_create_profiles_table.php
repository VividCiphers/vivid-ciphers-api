<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name', 50);
            $table->string('last_name', 50)->nullable();
            $table->string('biography', 1000)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->integer('years_experience')->unsigned()->nullable();
            $table->string('github_link', 100)->nullable();
            $table->string('image_path', 200)->nullable();
            $table->string('image_text', 200)->nullable();
            $table->timestamps();
            $table->boolean('active')->default(true);

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
