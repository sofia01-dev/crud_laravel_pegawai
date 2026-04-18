<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'nama',
        'umur',
        'jenis_kelamin',
        'alamat',
        'nomor_telepon',
        'email',
        'jabatan',
        'gaji',
    ];
}
