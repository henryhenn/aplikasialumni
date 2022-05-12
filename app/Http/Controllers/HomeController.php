<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Aktivitas;
use App\Models\TahunLulus;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home', [
            'title' => 'Home',
            'berita' => Berita::latest()->take(3)->get(),
            'aktivitas' => Aktivitas::latest()->take(5)->get(),
            'galeri' => DB::table('galeri')->take(4)->get(),
            'tahun' => TahunLulus::with('user')->orderBy('thn_lulus')->get(),
        ]);
    }
}
