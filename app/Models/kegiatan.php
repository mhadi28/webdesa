<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = ['judul', 'penulis', 'isi', 'gambar'];
}
