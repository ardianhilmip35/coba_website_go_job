<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pekerja extends Model
{
    use HasFactory;

    protected $table = 'tb_pekerja';
    protected $fillable = ['nama_pekerja', 'nama_startup', 'alamat_pekerja', 'posisi_sebelumnya', 'riwayat_kerja', 'lokasi_kerja', 'spesialis', 'telp_pekerja', 'foto_pekerja', 'ekspetasi_gaji'];
    protected $primaryKey = 'id_pekerja';
    public $incrementing = false;
}
