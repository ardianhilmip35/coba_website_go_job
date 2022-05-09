<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lamaran extends Model
{
    use HasFactory;

    protected $table = 'tb_lamarkerja';
    protected $fillable = ['id_lowongan', 'id_pelamar', 'deskripsi_lamaran', 'portofolio_pelamar'];
    protected $primaryKey = 'id_lamarkerja';
    public $incrementing = false;
}
