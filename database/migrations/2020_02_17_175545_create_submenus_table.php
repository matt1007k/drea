<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submenus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 50);
            $table->string('ruta', 20);
            $table->integer('orden')->unique();
            $table->boolean('publicado')->default(false);

            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('id')
                ->on('menus')
                ->onDelete('CASCADE');
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
        Schema::dropIfExists('submenus');
    }
}
