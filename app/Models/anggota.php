<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $primarykey = 'anggota_id';
    protected $keyType = 'int';

    protected $fillable = [
        'anggota_id',
        'anggota_nama',
        'anggota_alamat',
        'anggota_jk',
        'anggota_telp'
    ];
}
