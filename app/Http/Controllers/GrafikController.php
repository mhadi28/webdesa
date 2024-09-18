<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\grafik;

class GrafikController extends Controller
{
    public function index(Request $request): View
    {
        $grafikPerTahun = Cache::remember('grafik_per_tahun', 60, function () {
            return DB::table('grafik')
                ->select('tahun')
                ->distinct()
                ->orderBy('tahun', 'desc')
                ->get();
        });

        // Tambahkan log untuk debugging
        \Log::info('Grafik Per Tahun: ', ['data' => $grafikPerTahun]);

        return view('infografis', [
            'grafikPerTahun' => $grafikPerTahun,
        ]);
    }
}
