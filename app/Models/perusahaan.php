<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    use HasFactory;

    protected $table = 'tb_startup';
    protected $fillable = ['nama_admin', 'nama_startup', 'deskripsi_startup', 'telp_startup', 'alamat_startup', 'logo', 'telepon', 'status'];
    protected $primaryKey = 'id_startup';
    public $incrementing = false;
}

