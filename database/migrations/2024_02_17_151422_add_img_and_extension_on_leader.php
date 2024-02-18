<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgAndExtensionOnLeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaders_profiles', function (Blueprint $table) {
            $table->string("img")->after('org_id');
            $table->string('extension')->after("img");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaders_profiles', function (Blueprint $table) {
            $table->dropColumn("img");
            $table->dropColumn('extension');
        });
    }
}
