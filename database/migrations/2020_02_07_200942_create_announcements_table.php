<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 200);
            $table->string('numero', 10);
            $table->timestamp('fecha');
            $table->enum('estado', ['en proceso', 'cancelado', 'finalizado', 'desierto'])->default('en proceso');

            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')->references('id')
                ->on('announcement_groups')
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
        Schema::dropIfExists('announcements');
    }
}
