<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jual extends Model
{
    use HasFactory;
    protected $fillable = [

        'grandtotal',
        'sumtotal',
        'quantity',
    ];



}
