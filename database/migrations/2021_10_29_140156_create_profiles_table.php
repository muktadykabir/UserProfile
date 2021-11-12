<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('number');
            $table->date('dateofbirth');
            $table->string('address1');
            $table->string('address2');
            $table->string('state');
            $table->string('country');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('utype')->default('USR')->comment('ADM for Admin User ');
            $table->timestamps();
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
