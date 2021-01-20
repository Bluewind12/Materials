<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_counts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('game_id')->comment("ゲームID")->unique();
            $table->unsignedBigInteger('material_id')->comment("素材ID");
            $table->integer('get_count')->comment("入手個数");
            $table->timestamps();

            $table->foreign('game_id')->references('id')->on('game_names');
            $table->foreign('material_id')->references('id')->on('material_names');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_counts');
    }
}
