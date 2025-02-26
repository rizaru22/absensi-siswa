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
        Schema::create('matapelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_matapelajaran',100);
            $table->string('kode_matapelajaran',10)->index();
            $table->enum('tingkat',['X','XI','XII']);
            $table->unsignedBigInteger('tahunajaran_id');
            $table->foreign('tahunajaran_id')->references('id')->on('tahunajarans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matapelajarans');
    }
};
