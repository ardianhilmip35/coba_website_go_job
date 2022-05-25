<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMobile extends Model
{
    use HasFactory;
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
        'alamat_pelamar',
        'cv_pelamar',
        'email',
        'password',
    ];
    protected $primaryKey = "id";
}
