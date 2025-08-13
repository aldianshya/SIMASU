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
        Schema::create('letters', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
    $table->foreignId('template_id')->constrained('templates')->onDelete('cascade');
    $table->string('nomor_surat');
    $table->string('nama_penerima');
    $table->string('nama_pemberi');
    // $table->longText('NIP')->nullable(); // bisa kosong
    // $table->string('signed_by');
    $table->date('tanggal_surat');
    $table->string('pdf_file_path')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
