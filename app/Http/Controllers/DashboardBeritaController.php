<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.berita.index', [
            'title' => 'Berita',
            'berita' => Berita::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create', ['title' => 'Buat Berita Baru']);
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
            'image' => 'file|max:4096|mimes:png,jpg,jpeg',
            'title' => 'required|max:55',
            'content' => 'required|min:10'
        ]);
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('berita-image');
        }

        Berita::create($data);
        return redirect('admin/dashboard/berita')->with('success', 'Berita Berhasil Disubmit!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $beritum)
    {
        return view('admin.berita.show', [
            'title' => 'Halaman Berita',
            'berita' => $beritum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $beritum)
    {
        return view('admin.berita.edit', [
            'title' => 'Edit: ' . $beritum->title,
            'berita' => $beritum
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $beritum)
    {
        $data = $request->validate([
            'image' => 'file|max:4096',
            'title' => 'required|max:55|string',
            'content' => 'required|string'
        ]);

        if ($request->file('image')) {
            Storage::delete($request->oldImage);
            $data['image'] = $request->file('image')->store('berita-image');
        }

        Berita::where('id', $beritum)->update($data);
        return redirect()->to('admin/dashboard/berita')->with('success', 'Berita Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $beritum)
    {
        Berita::destroy($beritum->id);
        Storage::delete($beritum->image);
        return back()->with('success', 'Berita Berhasil Dihapus!');
    }
}
