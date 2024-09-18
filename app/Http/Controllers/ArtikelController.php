<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArtikelController extends Controller
{
    public function index(Request $request): View
    {
        $artikels = Cache::get('artikel');

        if (!$artikels) {
            $artikels = DB::table('artikel')->get();
            Cache::put('artikel', $artikels, 60);
        }

        return view('artikel', [
            'artikels' => $artikels,
        ]);
    }
}

