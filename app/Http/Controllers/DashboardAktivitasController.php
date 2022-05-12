<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardAktivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.aktivitas.index', [
            'title' => 'Aktivitas',
            'aktivitas' => Aktivitas::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aktivitas.create', [
            'title' => 'Buat Aktivitas Baru'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'aktivitas' => 'required|min:8|max:255'
        ]);

        Aktivitas::create($data);
        return redirect('admin/dashboard/aktivitas')->with('success', 'Aktivitas Berhasil Disubmit!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aktivitas  $aktivitas
     * @return \Illuminate\Http\Response
     */
    public function show(Aktivitas $aktivita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aktivitas  $aktivitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Aktivitas $aktivita)
    {
        return view('admin.aktivitas.edit', [
            'title' => 'Edit Aktivitas: ' . Str::excerpt($aktivita->aktivitas),
            'aktivitas' => $aktivita
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aktivitas  $aktivitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aktivitas $aktivita)
    {
        $data = $request->validate([
            'aktivitas' => 'required|string'
        ]);

        Aktivitas::where('id', $aktivita->id)->update($data);
        return redirect('admin/dashboard/aktivitas')->with('success', ' Aktivitas Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aktivitas  $aktivitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($aktivita)
    {
        Aktivitas::destroy($aktivita);
        return back()->with('success', 'Aktivitas Berhasil Dihapus');
    }
}
