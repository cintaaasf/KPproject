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
        Schema::create('surats', function (Blueprint $table) {
        $table->id();
        $table->string('nomor_surat');
        $table->enum('jenis', ['masuk', 'keluar']);
        $table->string('pengirim');
        $table->string('penerima');
        $table->text('isi');
        $table->enum('status', ['draft', 'disposisi', 'validasi'])->default('draft');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
