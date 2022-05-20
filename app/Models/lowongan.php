<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\Contracts\HasApiTokens;

class lowongan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'namastartup',
        'deskripsistartup',
        'pendidikan',
        'alamatstartup',
        'logo',
        'gedung'
    ];

    protected $primaryKey = 'id';

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

}
