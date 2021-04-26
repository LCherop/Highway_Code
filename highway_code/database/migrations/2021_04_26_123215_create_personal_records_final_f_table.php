<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalRecordsFinalFTable extends Migration
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
            CREATE ALGORITHM = UNDEFINED VIEW `personalRecords` AS SELECT 
                offences.description,
                offences.offenseFine,
                committed_offenses_final.driverId,
                committed_offenses_final.status 
            FROM offences 
            INNER JOIN committed_offenses_final 
            WHERE offences.offenseId=committed_offenses_final.offenseId

            SQL;
    }

    private function dropView(): string
    {
        return <<<SQL

            DROP VIEW IF EXISTS `personal_Records`;
            SQL;
    }
   
}
