<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueImpactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_impacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->double('weight');
            $table->timestamps();
        });

        DB::table('issue_impacts')->insert(
            array(
                array(
                    'name' => 'BLOCKER',
                    'weight' => 1
                ),
                array(
                    'name' => 'CRITICAL',
                    'weight' => 2
                ),
                array(
                    'name' => 'MAJOR',
                    'weight' => 3
                ),
                array(
                    'name' => 'MINOR',
                    'weight' => 4
                ),
                array(
                    'name' => 'INFO',
                    'weight' => 1
                ),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issue_impacts');
    }
}
