<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcement_links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 200);
            $table->string('url');
            $table->timestamp('fecha');

            $table->unsignedBigInteger('announcement_id');
            $table->foreign('announcement_id')->references('id')
                ->on('announcements')->onDelete('CASCADE');
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
        Schema::dropIfExists('announcement_links');
    }
}
