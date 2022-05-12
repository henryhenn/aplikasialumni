@extends('layouts.main')

@section('content')
    @include('components.flash_message')
    <h3 class="font-extrabold text-center text-5xl text-stone-700">Sistem Informasi Alumni <span
            class="text-indigo-700 block mt-4">SMK Cinta
            Kasih Tzu Chi</span></h3>
    <div
        class="mt-28 relative rounded-xl p-6 shadow-md shadow-stone-400 hover:-translate-y-3 ease-in-out duration-300 bg-indigo-700">
        <div class="text-center text-white">
            <h4 class="text-3xl font-bold">Berdiri Sejak 2011</h4>
            <p class="mt-6 text-justify">
                Alumni CKTC mulai berdiri sejak tahun 2011 silam. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Rem, quidem. Ipsa, distinctio ea? Quibusdam earum, perspiciatis labore eum culpa aspernatur omnis a
                voluptate repudiandae, nam vitae illum doloribus quo quia ab corrupti necessitatibus odio consequuntur?
                Porro possimus illo magni et voluptatum labore delectus quasi dicta ad eum laudantium, officiis illum soluta
                architecto suscipit exercitationem! Cum quidem dicta tempore, blanditiis aliquid doloribus excepturi
                inventore sapiente expedita nam sunt rerum veniam suscipit corporis maiores alias numquam at neque earum
                ducimus ipsam velit voluptatum cumque eius! Autem consequatur ipsa vitae tempore enim inventore soluta,
                consectetur facere laudantium deleniti optio ad ea, fuga atque!
            </p>
        </div>
    </div>
    <div
        class=" mt-32 rounded-xl p-6 shadow-md shadow-stone-400 hover:-translate-y-3 ease-in-out duration-300 bg-indigo-500">
        <div class="text-left text-white">
            <h4 class="text-2xl font-bold">Tentang Alumni</h4>
            <p class="mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nihil aperiam in incidunt excepturi laborum
                optio rem aliquam veritatis? Sit inventore incidunt consectetur adipisci fugit corporis ratione neque nihil
                obcaecati explicabo veniam, at tempore voluptates perferendis alias modi sunt itaque corrupti impedit,
                repellat officiis. Vel, perspiciatis maiores. Asperiores totam, explicabo a praesentium ad tempora ea sunt?
                Fugit nam quaerat hic, recusandae maxime quasi non consequatur quia ea! Fugiat nesciunt, debitis nisi
                eligendi odit ipsam eius culpa rem vel repellat ipsa animi expedita quasi, ab sequi obcaecati voluptate at,
                accusamus neque nemo cum voluptates tempore possimus suscipit! Laboriosam similique nulla minus.
            </p>
        </div>
    </div>
    <hr class="py-1 my-40 rounded-full w-1/2 mx-auto bg-stone-700">
    <div class="py-8 bg-indigo-200 px-3 rounded-xl shadow-md">
        <div class="grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-6">
            @forelse ($galeri as $data)
                <img src="{{ asset('storage/' . $data->image) }}"
                    class="w-[300px] rounded-lg hover:-translate-y-2 ease-in-out duration-300 hover:shadow-md">
            @empty
                <h3 class="font-bold text-center text-2xl">Tidak ada gambar terbaru</h3>
            @endforelse
        </div>
        <a href="{{ url('galeri') }}" class="font-bold float-right text-blue-700 mt-10">
            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
    <hr class="py-1 my-40 rounded-full w-1/2 mx-auto bg-stone-700">
    <div class="mt-40">
        <h3 class="text-3xl font-bold text-center mb-4 text-stone-700">Ringkasan Alumni</h3>
        <div class="grid xl:grid-cols-4 lg:grid-cols-4 gap-6 mt-10 md:grid-cols-3 sm:grid-cols-2">
            @forelse ($tahun as $data)
                <div
                    class="p-6 border-2 border-indigo-300 text-center flex justify-center rounded-md mb-14 bg-white hover:shadow-lg text-gray-700 hover:-translate-y-3 ease-in-out duration-300">
                    <h4 class="text-2xl mb-4 font-bold text-indigo-700 align-middle">Alumni {{ $data->thn_lulus }} <i
                            class="fa-solid fa-user-group"></i>
                    </h4>
                </div>
            @empty
                <h3 class="font-bold text-2xl text-center text-stone-700">Tidak ada ringkasan terbaru</h3>
            @endforelse
        </div>
    </div>
    <div class="mt-56 mb-44">
        <h3 class="text-3xl mb-4 font-bold text-center text-stone-700">
            Berita Alumni
        </h3>
        <div class="grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 mt-6 gap-6">
            @forelse ($berita as $berita)
                <a href="{{ url("/berita/$berita->id") }}" class='group'>
                    <div
                        class="p-3 rounded-md hover:shadow-xl text-stone-800  hover:-translate-y-3 ease-in-out duration-300 group-hover:text-blue-600">
                        <img src="{{ asset('img/4332827.jpg') }}" alt="" class="w-auto rounded-md">
                        <h4 class="text-lg font-bold mt-4">{{ $berita->title }}</h4>
                        <p class="text-md mt-4">{{ Str::excerpt($berita->content) }} Read
                            More</p>
                    </div>
                </a>
            @empty
                <h3 class=" text-2xl font-bold text-center text-stone-700">Tidak ada berita ditemukan</h3>
            @endforelse
        </div>
        <span class="float-right text-blue-600 font-bold hover:text-blue-800 mt-24">
            <a href="{{ url('/berita') }}">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
        </span>
    </div>
@endsection
