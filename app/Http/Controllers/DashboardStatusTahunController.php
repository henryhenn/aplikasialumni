<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunLulus;
use App\Models\Status;

class DashboardStatusTahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.status&tahun-lulus.index', [
            'title' => 'Status & Tahun Lulus',
            'tahun_lulus' => TahunLulus::orderBy('thn_lulus')->get(),
            'status' => Status::orderBy('status')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.status&tahun-lulus.create', ['title' => 'Buat Status & Tahun Lulus']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->status) {
            $status = $request->validate([
                'status' => 'string|max:20'
            ]);
            Status::create($status);
            return back()->with('success', 'Status Berhasil Dibuat!');
        } elseif ($request->thn_lulus) {
            $thn_lulus = $request->validate([
                'thn_lulus' => 'string|max:20'
            ]);
            TahunLulus::create($thn_lulus);
            return back()->with('success', 'Tahun Lulus Berhasil Dibuat!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_status(Status $status)
    {
        // dd($status);
        Status::destroy($status->id);
        return back()->with('success', 'Status Berhasil Dihapus');
    }

    public function delete_tahunlulus(TahunLulus $tahun)
    {
        TahunLulus::destroy($tahun->id);
        return back()->with('success', 'Tahun Lulus Berhasil Dihapus');
    }
}
