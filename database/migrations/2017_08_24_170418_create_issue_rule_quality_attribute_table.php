<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueRuleQualityAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_rule_quality_attribute', function (Blueprint $table) {
            $table->integer('quality_attribute_id')->unsigned();
            $table->integer('issue_rule_id')->unsigned();

            $table->foreign('quality_attribute_id')->references('id')->on('quality_attributes')->onDelete('cascade');
            $table->foreign('issue_rule_id')->references('id')->on('issue_rules')->onDelete('cascade');

            $table->primary(['quality_attribute_id', 'issue_rule_id'], 'issue_rule_attribute_id_primary');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issue_rule_quality_attribute');
    }
}
