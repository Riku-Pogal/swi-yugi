<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trans extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_1',
        'tgl_2',    
        'nama_customer',
        'nama_toko',
        'harga',
    ];
}
