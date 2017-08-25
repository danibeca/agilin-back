<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualityAttributeDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quality_attribute_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quality_attribute_id')->unsigned();
            $table->integer('impact_id')->unsigned();
            $table->integer('effort')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->integer('account_id');
            $table->timestamps();

            $table->foreign('quality_attribute_id')->references('id')->on('quality_attributes');
            $table->foreign('impact_id')->references('id')->on('issue_impacts');
            $table->foreign('account_id')->references('id')->on('account');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quality_attribute_datas');
    }
}
