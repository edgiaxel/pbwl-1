<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'pegawai';
    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'email',
        'no_hp',
        'tanggal_lahir',
        'alamat',
        'gaji',
        'profile_picture',
    ];
}