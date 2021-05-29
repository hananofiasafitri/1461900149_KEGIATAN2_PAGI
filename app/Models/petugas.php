<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';
    protected $primarykey = 'petugas_id';
    protected $keyType = 'int';

    protected $fillable = [
        'petugas_id',
        'petugas_nama',
        'username',
        'password'
    ];
}
