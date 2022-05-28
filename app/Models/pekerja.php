<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pekerja extends Model
{
    use HasFactory;

    protected $table = 'pekerja';

    protected $fillable = [
        'id',
        'pelamar_id',
        'pengalaman',
        'posisi',
        'perusahaan',
        'lulus',
        'spesialis',
        'lokasi',
        'gaji'
    ];

    protected $primaryKey = 'id';

    public function pelamar ()
    {
        return $this->belongsTo(pelamar::class);
    }
    
}

