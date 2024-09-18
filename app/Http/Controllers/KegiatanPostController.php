<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class KegiatanPostController extends Controller
{
    public function show($id)
    {
        // Mengambil artikel berdasarkan ID
        $kegiatan = Cache::remember("kegiatan-$id", 60, function () use ($id) {
            return kegiatan::find($id);
        });

        // Mengambil semua kegiatan (jika diperlukan)
        $kegiatans = Cache::remember("kegiatans-$id", 60, function () use ($id) {
            return kegiatan::where('id', '<', $id)->orWhere('id', '>', $id)->limit(3)->get();
        });

        // Mengirim data ke view
        return view('kegiatan-post', compact('kegiatan', 'kegiatans'));
    }
}
