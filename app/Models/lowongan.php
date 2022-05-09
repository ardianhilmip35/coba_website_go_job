<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lowongan extends Model
{
    use HasFactory;

    protected $table = 'tb_lowongan';
    protected $fillable = ['namalowongan', 'jenispekerjaan', 'tingkatjabatan', 'gajipekerjaan', 'spesialis', 'pengalaman', 'deskripsipekerjaan', 'namastartup', 'deskripsistartup', 'pendidikan', 'alamatstartup', 'logo', 'gedung'];
    protected $primaryKey = 'id_lowongan';
    public $incrementing = false;
}
