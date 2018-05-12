<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('start_ups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_name');
            $table->string('business_location');
            $table->string('business_website');
            $table->string('phone');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('industry');
            $table->string('description');
            $table->string('business_logo');
            $table->string('founder_1');
            $table->string('facebook_1');
            $table->string('twitter_1');
            $table->string('linkedin_1');
            $table->string('founder_2');
            $table->string('facebook_2');
            $table->string('twitter_2');
            $table->string('linkedin_2');
            $table->string('founder_3');
            $table->string('facebook_3');
            $table->string('twitter_3');
            $table->string('linkedin_3');
            $table->string('founder_4');
            $table->string('facebook_4');
            $table->string('twitter_4');
            $table->string('linkedin_4');
            $table->string('status');
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
        Schema::dropIfExists('start_ups');
    }
}
