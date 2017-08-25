<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueIssuetagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_issue_tag', function (Blueprint $table) {
            $table->integer('issue_id')->unsigned();
            $table->integer('issue_tag_id')->unsigned();

            $table->foreign('issue_id')->references('id')->on('issues')->onDelete('cascade');
            $table->foreign('issue_tag_id')->references('id')->on('issue_tags')->onDelete('cascade');

            $table->primary(['issue_id', 'issue_tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issue_issue_tag');
    }
}
