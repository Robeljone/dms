<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadersProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaders_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('age');
            $table->string('city');
            $table->string('zone');
            $table->string('nationality');
            $table->string('edu_level');
            $table->string('field_of_study');
            $table->string('prev_role');
            $table->string('curr_role');
            $table->string('woreda');
            $table->foreignId('org_id');
            $table->foreignId("cuid");
            $table->foreignId("uuid");
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
        Schema::dropIfExists('leaders_profile');
    }
}
