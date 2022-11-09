<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KainMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'jenis',
        'berat',
        'harga',
        'satuan',
        'hargas',

    ];
}
