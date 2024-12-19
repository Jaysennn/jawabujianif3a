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
    Schema::create('detail_pinjam', function (Blueprint $table) {
        $table->id('NoPinjam'); // Primary Key
        $table->foreignId('IDAnggota')->constrained('anggota')->onDelete('cascade');
        $table->foreignId('IDBuku')->constrained('buku')->onDelete('cascade');
        $table->date('Tgl_Pinjam');
        $table->date('Tgl_Kembali');
        $table->decimal('Denda', 8, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pinjam');
    }
};
