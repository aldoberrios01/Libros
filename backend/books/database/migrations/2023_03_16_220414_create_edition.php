<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edition', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('released_at');
            $table->int('id_editorial');
            $table->foreign('id_editorial')->references('id')->on('editorial');
            $table->int('id_book');
            $table->foreign('id_book')->references('id')->on('books');
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
        Schema::dropIfExists('edition');
    }
};
