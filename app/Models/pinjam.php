<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    use HasFactory;

    protected $table = 'pinjam';
    protected $primarykey = 'pinjam_id';
    protected $keyType = 'int';

    protected $fillable = [
        'pinjam_id',
        'buku_id',
        'anggota_id',
        'tgl_pinjam',
        'tgl_jatuh_tempo'
    ];
}
