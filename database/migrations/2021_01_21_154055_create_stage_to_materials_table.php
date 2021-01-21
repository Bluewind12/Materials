<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStageToMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_to_materials', function (Blueprint $table) {
            $table->bigIncrements('id')->comment("ドロップID");
            $table->unsignedBigInteger("stage_id")->comment("ステージID");
            $table->unsignedBigInteger("material_id")->comment("素材ID");
            $table->integer("percent")->comment("ドロップ率（％）");

            $table->timestamps();

            $table->foreign('stage_id')->references('id')->on('stages');
            $table->foreign('material_id')->references('id')->on('materials');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage_to_materials');
    }
}
