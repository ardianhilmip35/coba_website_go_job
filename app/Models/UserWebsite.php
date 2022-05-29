<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWebsite extends Model
{
    use HasFactory;
    protected $table = "pelamar";
    
    protected $fillable = [
        'id',
        'nama_pelamar',
        'telp_pelamar',
        'alamat_pelamar',
        'cv_pelamar',
        'email',
        'password',
    ];

    protected $primaryKey = "id";

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
