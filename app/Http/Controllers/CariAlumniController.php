<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use App\Models\User;
use App\Models\TahunLulus;

class CariAlumniController extends Controller
{
    public function index()
    {
        return view('alumni.alumni', [
            'title' => 'Cari Alumni',
            'alumni' => User::filter(request(['nama']))->orderBy('tahun_lulus_id')->orderBy('nama')->where('is_admin', false)->paginate(10)->withQueryString(),
            'aktivitas' => Aktivitas::latest()->take(5)->get(),
            'tahun' => TahunLulus::orderBy('thn_lulus')->get()
        ]);
    }

    public function show(User $alumni)
    {
        if (!auth()->check()) {
            return redirect('login')->with('failed', 'Anda Harus Login Terlebih Dulu!');
        }
        return view('alumni.show-alumni', [
            'title' => 'Data: ' . $alumni->nama,
            'alumni' => $alumni,
            'aktivitas' => Aktivitas::latest()->take(5)->get()
        ]);
    }
}
