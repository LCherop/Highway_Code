<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalRecordsAlas extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement($this->dropView());
    }

    private function createView(): string
    {
        return <<<SQL
            CREATE ALGORITHM = UNDEFINED VIEW `personalRecordsalas` AS SELECT 
                offences.description,
                offences.offenseFine,
                committed_offenses_finalsy.driverId,
                committed_offenses_finalsy.status 
            FROM offences 
            INNER JOIN committed_offenses_finalsy 
            WHERE offences.offenseId=committed_offenses_finalsy.offenseId

            SQL;
    }

    private function dropView(): string
    {
        return <<<SQL

            DROP VIEW IF EXISTS `personal_Records`;
            SQL;
    }
   
}
