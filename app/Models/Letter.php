<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;

    // Table name (opsional kalau nama tabel sudah sesuai konvensi Laravel)
    protected $table = 'letters';

    // Kolom yang bisa diisi mass assignment
    protected $fillable = [
        'user_id',
        'template_id',
        'nomor_surat',
        'nama_penerima',
        'nama_pemberi',
        'tanggal_surat',
        'pdf_file_path',
    ];

    /**
     * Relasi ke model User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke model Template
     */
    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
