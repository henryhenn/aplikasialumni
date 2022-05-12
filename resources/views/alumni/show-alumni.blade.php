@extends('layouts.main')

@section('content')
    <h3 class="text-5xl font-extrabold text-center text-stone-700 mb-20">Data <span class="text-indigo-700">Alumni</span></h3>

    <a href="{{ url('cari-alumni') }}" class="font-bold text-blue-600"><i class="fas fa-solid fa-arrow-left-long"></i>&nbsp;
        Kembali</a>

    <div class="p-6 shadow-lg border-indigo-700 border-2 rounded-md">
        <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-6">
            <img src="{{ asset('img/default.jpg') }}" class="w-[350px]" alt="">
            <ul class="list-none">
                <li class="mb-4">
                    <h3 class="text-2xl font-bold">Nama: {{ $alumni->nama }}</h3>
                </li>
                <li class="mb-2">
                    <span class="font-bold">NiSN: {{ $alumni->nisn }}</span>
                </li>
                <li class="mb-2">
                    <span class="font-bold">Status: {{ $alumni->status->status }}</span>
                </li>
                <li class="mb-2">
                    <span class="font-bold">Tahun Lulus: {{ $alumni->tahun_lulus->thn_lulus }}</span>
                </li>
                <li class="mb-2">
                    <span class="font-bold">Email: {{ $alumni->email }}</span>
                </li>
                <li class="mb-2">
                    <span class="font-bold">Handphone: {{ $alumni->handphone }}</span>
                </li>
                <li class="mb-2">
                    <span class="font-bold">Alamat: {{ $alumni->alamat }}</span>
                </li>
            </ul>
        </div>
    </div>
@endsection
