<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Cache;
// use App\Models\grafik;

// class GrafikPostController extends Controller
// {
//     public function show($id)
//     {
//         $singleInfografis = Cache::remember("infografis-$id", 60, function () use ($id) {
//             return grafik::find($id);
//         });

//         $tahun = $singleInfografis->tahun;

//         $allInfografis = Cache::remember("infografis-all-$tahun", 60, function () use ($tahun) {
//             return grafik::where('tahun', $tahun)
//                 ->orderBy('bulan', 'asc')
//                 ->get();
//         });

//         return view('infografis-post', compact('singleInfografis', 'allInfografis'));
//     }
// }
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\grafik;

class GrafikPostController extends Controller
{
    public function show($tahun)
    {
        $allInfografis = Cache::remember("infografis-all-$tahun", 60, function () use ($tahun) {
            return grafik::where('tahun', $tahun)
                ->orderBy('bulan', 'asc')
                ->get();
        });

        if ($allInfografis->isEmpty()) {
            return abort(404, 'Data tidak ditemukan untuk tahun ini');
        }

        $singleInfografis = $allInfografis->first(); // Ambil data pertama untuk informasi tahun

        return view('infografis-post', compact('singleInfografis', 'allInfografis', 'tahun'));
    }
}
