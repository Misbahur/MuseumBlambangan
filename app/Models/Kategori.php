<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    // public function pengunjungs()
    // {
    //     return $this->belongsTo(pengunjung::class);
    // }

    public function pengunjungs()
    {
        return $this->hasMany(pengunjung::class);
    }
}
