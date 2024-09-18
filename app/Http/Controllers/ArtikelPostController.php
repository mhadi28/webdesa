<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ArtikelPostController extends Controller
{
    
    public function show($id)
    {
        // Mengambil artikel berdasarkan ID
        $artikel = Cache::remember("artikel-$id", 60, function () use ($id) {
            return Artikel::find($id);
        });

        // Mengambil semua artikel (jika diperlukan)
        $artikels = Cache::remember("artikels-$id", 60, function () use ($id) {
            return Artikel::where('id', '<', $id)->orWhere('id', '>', $id)->limit(3)->get();
        });

        // Mengirim data ke view
        return view('artikel-post', compact('artikel', 'artikels'));
    }

}

