<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueTagQualityAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_tag_quality_attribute', function (Blueprint $table) {
            $table->integer('quality_attribute_id')->unsigned();
            $table->integer('issue_tag_id')->unsigned();

            $table->foreign('quality_attribute_id')->references('id')->on('quality_attributes')->onDelete('cascade');
            $table->foreign('issue_tag_id')->references('id')->on('issue_tags')->onDelete('cascade');

            $table->primary(['quality_attribute_id', 'issue_tag_id'],'issue_tag_attribute_id_primary');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issue_tag_quality_attribute');
    }
}
