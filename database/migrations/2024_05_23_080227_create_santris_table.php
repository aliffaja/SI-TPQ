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
        Schema::create('santris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_santri');
            $table->unsignedBigInteger('id_pengguna');
            $table->unsignedBigInteger('id_walisantri');
            $table->string('no_hp');
            $table->string('email');
            $table->string('kelas');
            $table->foreign('id_pengguna')->references('id')->on('penggunas');
            $table->foreign('id_walisantri')->references('id')->on('wali_santris');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santris');
    }
};
