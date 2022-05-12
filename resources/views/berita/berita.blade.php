@extends('layouts.main')

@section('content')
    <h3 class="text-5xl font-extrabold text-center text-stone-700">Berita <span class="text-indigo-700">Alumni</span></h3>
    <div class="grid grid-cols-3 gap-6 mt-10">
        @forelse ($berita->skip(1) as $berita)
            <a href="{{ url('berita/' . $berita->id) }}">
                <div
                    class="shadow-lg p-3 mt-20 hover:border-0 border-1 text-gray-900  rounded-md hover:bg-indigo-400 ease-in-out duration-300 group hover:text-white">
                    <div class="flex justify-center mb-4">
                        @if ($berita->image)
                            <img src="{{ asset('storage/' . $berita->image) }}" width="200px">
                        @else
                            <img src="{{ asset('img/default.jpg') }}">
                        @endif
                    </div>
                    <h3 class="text-2xl text-stone-700 group-hover:text-white font-bold text-center mb-6">
                        {{ $berita->title }}</h3>
                    <p class="group-hover:text-white">{{ Str::excerpt($berita->content) }}</p>
                    <small class="inline-block text-stone-800 mt-6 group-hover:text-white"><i
                            class="fa-regular fa-calendar-days"></i>&nbsp;
                        Dibuat
                        pada: {{ $berita->created_at->diffForHumans() }}</small>
                </div>
            </a>
        @empty
            <h3 class="text-3xl text-center font-bold mt-12 text-stone-700">Tidak ada berita ditemukan</h3>
        @endforelse
    </div>
@endsection
