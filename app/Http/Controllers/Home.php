<?php

namespace App\Http\Controllers;

use App\Models\JadwalCeramah;
use App\Models\KasKeluar;
use App\Models\KasMasuk;
use App\Models\KegiatanMasjid;

class Home extends Controller
{

    public function index()
    {
        return view('v_home');
    }
}
