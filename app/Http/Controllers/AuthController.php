<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Aktivitas;
use App\Models\TahunLulus;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register', [
            'title' => 'Halaman Registrasi',
            'aktivitas' => Aktivitas::latest()->take(5)->get(),
            'tahun' => TahunLulus::orderBy('thn_lulus')->get(),
            'status' => Status::orderBy('status')->get()
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|unique:users,nama',
            'nisn' => 'required|max:20',
            'status_id' => 'required',
            'tahun_lulus_id' => 'required',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:5',
            'handphone' => 'required|max:13',
            'alamat' => 'required|max:255',
            'image' => 'required|file|mimes:jpg,png,jpeg|max:4096'
        ]);
        $data['password'] = bcrypt($data['password']);
        $data['image'] = $request->file('image')->store('users-image');

        User::create($data);
        return redirect('login')->with('success', 'Registrasi Berhasil. Silakan Login!');
    }

    public function login()
    {
        return view('auth.login', [
            'title' => 'Halaman Login',
            'aktivitas' => Aktivitas::latest()->take(5)->get()
        ]);
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Selamat datang, ' . auth()->user()->nama);
        }
        return back()->with('failed', 'Email atau Password Salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login')->with('success', 'Anda Berhasil Logout!');
    }

    public function adminlogin()
    {
        return view('auth.admin_login', [
            'title' => 'Admin Login',
            'aktivitas' => Aktivitas::latest()->take(5)->get()
        ]);
    }

    public function auth_admin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'is_admin' => 'required|boolean'
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard/home')->with('success', 'Welcome Back, ' . auth()->user()->nama . ' !');
        }
    }

    public function admin_logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admin/login')->with('success', 'Anda Berhasil Logout!');
    }
}
