<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pengguna');
            $table->unsignedBigInteger('id_mapel');
            $table->string('nama');
            $table->string('alamat');
            $table->timestamps();

            $table->foreign('id_pengguna')->references('id')->on('penggunas');
            $table->foreign('id_mapel')->references('id')->on('mapels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
