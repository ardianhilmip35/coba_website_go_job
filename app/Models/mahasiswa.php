<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'id',
        'pelamar_id',
        'universitas',
        'jurusan',
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
