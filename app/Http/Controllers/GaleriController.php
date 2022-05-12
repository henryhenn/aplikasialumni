<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect('login')->with('failed', 'Anda Harus Login Terlebih Dulu!');
        }
        return view('galeri.galeri', [
            'title' => 'Galeri Alumni',
            'image' => DB::table('galeri')->latest()->paginate(10),
            'aktivitas' => Aktivitas::latest()->take(5)->get()
        ]);
    }
}
