<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'tb_mahsiswa';
    protected $fillable = ['nama_mhsiswa', 'jur_mhsiswa', 'prodi_mhsiswa', 'thn_lulus', 'spesialis', 'foto_mhsiswa', 'alamat_mhsiswa', 'telp_mhsiswa', 'ekspetasi_gaji'];
    protected $primaryKey = 'id_mhsiswa';
    public $incrementing = false;
}
