<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan_d extends Model
{
    use HasFactory;

    protected $fillable = [
        'idh',
        'nama',
        'quantity',
        'harga',
        'total',
        'satuan',
    ];
}
