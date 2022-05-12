<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Aktivitas;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita.berita', [
            'title' => 'News',
            'berita' => Berita::latest()->get(),
            'aktivitas' => Aktivitas::latest()->take(5)->get()
        ]);
    }

    public function show(Berita $berita)
    {
        if (!auth()->check()) {
            return redirect('login')->with('failed', 'Anda Harus Login Terlebih Dulu!');
        }
        return view('berita.show-berita', [
            'title' => $berita->title,
            'berita' => $berita,
            'aktivitas' => Aktivitas::latest()->take(5)->get()
        ]);
    }
}
