<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Aktivitas;
use Illuminate\Http\Request;
use App\Models\TahunLulus;
use App\Models\Status;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit(User $user)
    {
        return view('auth.profile', [
            'title' => 'Halaman Profil',
            'user' => $user,
            'tahun' => TahunLulus::orderBy('thn_lulus')->get(),
            'status' => Status::all(),
            'aktivitas' => Aktivitas::latest()->take(5)->get()
        ]);
    }

    public function update(Request $request, User $user)
    {
        // dd($request->image);
        $data = $request->validate([
            'nisn' => 'string|max:20',
            'status_id' => 'string',
            'tahun_lulus_id' => 'required',
            'handphone' => 'string|max:13',
            'alamat' => 'string|max:255',
            'image' => 'file|max:4096|mimes:png,jpg,jpeg'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage != null) {
                Storage::delete($request->oldImage);
            }
            $data['image'] = $request->file('image')->store('users-image');
        }

        User::where('id', $user->id)->update($data);
        return redirect('edit-profile/' . $user->id)->with('success', 'Profil Berhasil Diperbarui!');
    }
}
