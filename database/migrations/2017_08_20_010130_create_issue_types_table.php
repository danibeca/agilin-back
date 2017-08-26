<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->double('weight');
            $table->timestamps();
        });

        DB::table('issue_types')->insert(
            array(
                array(
                    'name' => 'BUG',
                    'weight' => 3
                ),
                array(
                    'name' => 'VULNERABILITY',
                    'weight' => 2
                ),
                array(
                    'name' => 'CODE_SMELL',
                    'weight' => 1
                )
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
        Schema::dropIfExists('issue_types');
    }
}
