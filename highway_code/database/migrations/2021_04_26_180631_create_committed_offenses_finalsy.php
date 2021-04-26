<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommittedOffensesFinalsy extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committed_offenses_finalsy', function (Blueprint $table) {
            $table->id('co_ID');
            $table->string('driverId');
            $table->string('officerId');
            $table->string('offenseId');
            $table->string('status');
            $table->timestamps();
            
        });

        Schema::table('committed_offenses_finalsy', function (Blueprint $table) {
            $table->foreign('driverId')->references('driver_officerId')->on('users')->onDelete('cascade');
            $table->foreign('officerId')->references('driver_officerId')->on('users')->onDelete('cascade');
            $table->foreign('offenseId')->references('offenseId')->on('offences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('committed_offenses_finalsy');
    }
}

