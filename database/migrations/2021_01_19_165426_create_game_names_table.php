<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_names', function (Blueprint $table) {
            $table->bigIncrements('id')->comment("ID");
            $table->string('name')->comment("ゲーム名");
            $table->string('comment')->nullable()->comment("概要");
            $table->integer('refresh_time_second')->comment("体力回復(s)");
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
        Schema::dropIfExists('game_names');
    }
}
