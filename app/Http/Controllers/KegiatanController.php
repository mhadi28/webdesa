<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KegiatanController extends Controller
{
    public function index(Request $request): View
    {
        $kegiatan = Cache::get('kegiatan');

        if (!$kegiatan) {
            $kegiatan = DB::table('kegiatan')->get();
            Cache::put('kegiatan', $kegiatan, 60);
        }

        return view('infokegiatan', [
            'kegiatan' => $kegiatan,
        ]);
    }
}
