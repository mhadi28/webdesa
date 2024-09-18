<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class grafik extends Model
{
    protected $table = 'grafik';

    protected $fillable = ['id', 'bulan', 'tahun', 'sum_stunting'];
}
