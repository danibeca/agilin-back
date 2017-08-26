<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualityAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quality_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
            $table->timestamps();
        });

        DB::table('quality_attributes')->insert(
            array(
                array(
                    'name' => 'Seguridad'
                ),
                array(
                    'name' => 'Mantenibilidad'
                ),
                array(
                    'name' => 'Portabilidad'
                ),
                array(
                    'name' => 'Facilidad de pruebas'
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
        Schema::dropIfExists('quality_attributes');
    }
}
