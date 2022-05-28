<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\UserMobile as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserMobile extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "pelamar";
    protected $fillable = [
        'id',
        'nama_pelamar',
        'telp_pelamar',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'foto',
        'alamat_pelamar',
        'cv_pelamar',
        'email',
        'password',
    ];
    protected $primaryKey = "id";

    public function pekerja()
    {
        return $this->hasOne(pekerja::class);
    }

    public function mahasiswa()
    {
        return $this->hasOne(mahasiswa::class);
    }

    public function lamarkerja()
    {
        return $this->hasMany(lamarkerja::class);
    }
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
