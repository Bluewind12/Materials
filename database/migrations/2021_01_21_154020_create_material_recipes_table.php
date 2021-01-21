<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_recipes', function (Blueprint $table) {
            $table->bigIncrements('id')->comment("レシピID");

            $table->unsignedBigInteger('target_material_id')->comment("目標素材ID");
            $table->unsignedBigInteger('material_id_1')->comment("必要素材ID_1");
            $table->integer("material_count_1")->comment("必要個数_1");
            $table->unsignedBigInteger('material_id_2')->nullable()->comment("目標素材ID_2");
            $table->integer("material_count_2")->nullable()->comment("必要個数_2");
            $table->unsignedBigInteger('material_id_3')->nullable()->comment("目標素材ID_3");
            $table->integer("material_count_3")->nullable()->comment("必要個数_3");

            $table->timestamps();

            $table->foreign('target_material_id')->references('id')->on('materials');
            $table->foreign('material_id_1')->references('id')->on('materials');
            $table->foreign('material_id_2')->references('id')->on('materials');
            $table->foreign('material_id_3')->references('id')->on('materials');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_recipes');
    }
}
