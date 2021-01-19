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
            $table->integer('stage_id')->comment("ステージID");
            $table->integer('material_id')->comment("素材ID");
            $table->integer('get_count')->comment("入手個数");
            $table->timestamps();
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
