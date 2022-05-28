<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Contracts\HasApiTokens;

class lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';
    protected $fillable = [
        'id',
        'users_id',
        'namalowongan',
        'jenispekerjaan',
        'tingkatjabatan',
        'gajipekerjaan',
        'spesialis',
        'pengalaman',
        'deskripsipekerjaan',
        'namaperusahaan',
        'deskripsiperusahaan',
        'pendidikan',
        'alamatperusahaan',
        'logo',
        'gedung',
        'created_at'
    ];

    protected $primaryKey = 'id';

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function lamarkerja ()
    {
        return $this->hasMany(lamarkerja::class);
    }

}
