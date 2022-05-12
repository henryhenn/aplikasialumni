@extends('layouts.main')

@section('content')
    <h3 class="text-5xl font-extrabold text-center text-stone-700">Berita <span class="text-indigo-700">Alumni</span></h3>

    <a href="{{ url('berita') }}" class="text-blue-600 font-bold block mt-12"><i
            class="fas fa-solid fa-arrow-left-long"></i>&nbsp;
        Kembali</a>
    <div class="container mt-16">
        <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-6">
            <img src="{{ asset('storage/' . $berita->image) }}" width="480px">
            <div class="container">
                <h3 class="text-3xl font-extrabold text-indigo-600">{{ $berita->title }}</h3>
                <p class="mt-4">{{ $berita->content }}</p>
                <small class="block mt-12"><i class="fa-regular fa-calendar-days"></i>&nbsp; Diupdate pada:
                    {{ $berita->updated_at->diffForHumans() }}</small>
            </div>
        </div>
    </div>
@endsection
