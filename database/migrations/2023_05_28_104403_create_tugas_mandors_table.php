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
        Schema::create('tugas_mandor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tugas_id');
            $table->unsignedBigInteger('mandor_id');
            $table->integer('status');
            $table->string('keterangan')->nullable();
            $table->foreign('tugas_id')->references('id')->on('tugas')->onDelete('cascade');
            $table->foreign('mandor_id')->references('id')->on('mandor')->onDelete('cascade');
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
        Schema::dropIfExists('tugas_mandors');
    }
};
