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
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kepala_id');
            $table->integer('no_sumur')->nullable();
            $table->string('nama_donatur')->nullable();
            $table->integer('proses')->nullable();
            $table->integer('status')->nullable();
            $table->text('alamat')->nullable();
            $table->foreign('kepala_id')->references('id')->on('kepala')->onDelete('cascade');
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
        Schema::dropIfExists('tugas_models');
    }
};
