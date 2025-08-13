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
        Schema::create('templates', function (Blueprint $table) {
    $table->id();
    $table->string('nama_surat');
    // $table->enum('type', ['undangan', 'keterangan', 'permohonan', 'lainnya']);
    // $table->longText('content');
     $table->string('file_path')->nullable();
    $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
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
