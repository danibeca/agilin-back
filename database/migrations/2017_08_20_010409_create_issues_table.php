<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rule',50);
            $table->double('effort');
            $table->string('effortText',15);
            $table->boolean('last')->default(true);
            $table->integer('application_id');
            $table->integer('impact_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->timestamps();

            $table->foreign('application_id')->references('id')->on('application');
            $table->foreign('impact_id')->references('id')->on('issue_impacts');
            $table->foreign('type_id')->references('id')->on('issue_types');

            $table->index(['application_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
