@extends('layouts.main')

@section('content')
    <h3 class="text-5xl font-extrabold text-center text-stone-700 mb-10">Galeri</h3>
    <div class="grid xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6 mt-28">
        @forelse ($image as $data)
            <div class="p-4 border-2 shadow-md rounded-md hover:-translate-y-3 ease-in-out duration-500">
                <img src="{{ asset('storage/' . $data->image) }}" class="w-full">
                <span
                    class="text-stone-700 font-bold block mt-6">{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</span>
            </div>
        @empty
            <h3 class="text-2xl font-bold text-center">Tidak ada gambar terbaru</h3>
        @endforelse
    </div>
    <div class="mt-12">
        {{ $image->links() }}
    </div>
@endsection
