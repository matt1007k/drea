<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 250);
            $table->text('descripcion', 300);
            $table->string('anio', 4);
            $table->string('archivo');
            $table->timestamp('fecha');
            $table->boolean('publicado')->default(false);

            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')
                ->references('id')->on('tipo_documentos')
                ->onDelete('cascade');
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
        Schema::dropIfExists('documentos');
    }
}
