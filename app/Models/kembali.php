<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kembali extends Model
{
    use HasFactory;
    protected $table = 'kembali';
    protected $primarykey = 'kembali_id';
    protected $keyType = 'int';

    protected $fillable = [
        'kembali_id',
        'pinjam_id',
        'tgl_kembali',
        'denda'
    ];
}
