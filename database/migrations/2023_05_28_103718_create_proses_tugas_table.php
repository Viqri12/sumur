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
        Schema::create('proses_tugas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tugas_id');
            $table->longText('awalan')->nullable();
            $table->longText('kedalaman')->nullable();
            $table->longText('penembokan')->nullable();
            $table->longText('pengacian')->nullable();
            $table->longText('keramik')->nullable();
            $table->longText('cat')->nullable();
            $table->longText('mesin')->nullable();
            $table->foreign('tugas_id')->references('id')->on('tugas')->onDelete('cascade');
            $table->longText('simulasi')->nullable();
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
        Schema::dropIfExists('proses_tugas');
    }
};
