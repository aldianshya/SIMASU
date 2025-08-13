<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_surat',
        'file_path',
        'created_by',
    ];

    /**
     * Relasi ke user pembuat template.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Relasi ke surat yang memakai template ini.
     */
    public function letters()
    {
        return $this->hasMany(Letter::class, 'template_id');
    }
}
