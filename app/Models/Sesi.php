<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sesi extends Model
{
    protected $fillable = [
        'nama_sesi',
        'waktu',
        'deskripsi',
    ];
}
