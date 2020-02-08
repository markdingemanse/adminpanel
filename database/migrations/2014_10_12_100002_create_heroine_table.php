<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('link_to_picture')->nullable();
            $table->string('discription')->nullable();
            $table->string('attack_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heroines');
    }
}
