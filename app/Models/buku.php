<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primarykey = 'buku_id';
    protected $keyType = 'int';

    protected $fillable = [
        'buku_id',
        'buku_judul',
        'kategori_id',
        'buku_deskripsi',
        'buku_jumlah',
        'buku_cover'
    ];
}
