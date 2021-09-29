<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $attributes = [
        'Status' => false,
    ];

    public function Pengunjung()
    {
        return $this->belongsTo(Pengunjung::class);
    }
}
