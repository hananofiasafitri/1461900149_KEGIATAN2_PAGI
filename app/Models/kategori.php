<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primarykey = 'kategori_id';
    protected $keyType = 'int';

    protected $fillable = [
        'kategori_id',
        'kategori_nama'
    ];
}
