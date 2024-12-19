<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('anggota', function (Blueprint $table) {
        $table->id('IDAnggota'); // Primary Key
        $table->string('Nama_Anggota');
        $table->text('Alamat');
        $table->string('Jurusan');
        $table->string('IDDaftar')->unique();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};