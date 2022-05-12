<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Aktivitas;

class DashboardHomeController extends Controller
{
    public function index()
    {
        return view('admin.home.index', [
            'title' => 'Home',
            'users' => User::where('is_admin', 0)->orderBy('nama')->latest()->limit(5)->get(),
            'aktivitas' => Aktivitas::latest()->take(3)->get()
        ]);
    }
}
