<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

    public function sesi()
    {
        return $this->belongsTo(sesi::class);
    }
}

