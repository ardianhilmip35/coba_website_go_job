<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lamarkerja extends Model
{
    use HasFactory;

    protected $table = 'lamarkerja';

    protected $fillable = [
        'id',
        'lowongan_id',
        'pelamar_id',
        'deskripsi_lamaran',
        'portofolio_pelamar',
        'created_at'
    ];

    protected $primaryKey = 'id';

    public function lowongan()
    {
        return $this->belongsTo(lowongan::class);
    }

    public function pelamar()
    {
        return $this->belongsTo(UserMobile::class);
    }
}
