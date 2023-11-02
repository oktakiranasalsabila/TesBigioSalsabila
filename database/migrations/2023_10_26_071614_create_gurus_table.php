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
            $table->id();
            $table->char('nip',18);
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('tem_lahir');
            $table->date('tgl');
            $table->string('jabatan'); // Pastikan kolom jabatan ada di sini
            $table->string('jenkel');
            $table->char('tlpn',10);
            $table->string('alamat');
            $table->timestamps();
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
