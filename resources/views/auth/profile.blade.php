@extends('layouts.main')

@section('content')
    <h3 class="font-extrabold text-center text-5xl text-stone-700">Halaman <span class="text-indigo-700">Profil</span></h3>

    @include('components.flash_message')
    <div class="flex xl:flex-row lg:flex-row sm:flex-col gap-14 mt-28">
        <div class="basis-1/2">
            <div class="p-10 shadow-md rounded-lg">
                <h4 class="text-2xl text-stone-700 font-bold text-center mb-10">Profil</h4>
                <div class="grid grid-cols-2 mb-6">
                    <span class="font-bold">Gambar Profil</span>
                    <span>
                        <img src="{{ asset('storage/' . $user->image) }}" class='rounded-xl'>
                    </span>
                </div>
                <div class="grid grid-cols-2 mb-6">
                    <span class="font-bold">Nama Lengkap</span>
                    <span>
                        {{ $user->nama }}
                    </span>
                </div>
                <div class="grid grid-cols-2 mb-6">
                    <span class="font-bold">NISN</span>
                    <span>
                        {{ $user->nisn }}
                    </span>
                </div>
                <div class="grid grid-cols-2 mb-6">
                    <span class="font-bold">Status</span>
                    <span>
                        {{ $user->status->status }}
                    </span>
                </div>
                <div class="grid grid-cols-2 mb-6">
                    <span class="font-bold">Tahun Lulus</span>
                    <span>
                        {{ $user->tahun_lulus->thn_lulus }}
                    </span>
                </div>
                <div class="grid grid-cols-2 mb-6">
                    <span class="font-bold">Email</span>
                    <span>
                        {{ $user->email }}
                    </span>
                </div>
                <div class="grid grid-cols-2 mb-6">
                    <span class="font-bold">Handphone</span>
                    <span>
                        {{ $user->handphone }}
                    </span>
                </div>
                <div class="grid grid-cols-2 mb-6">
                    <span class="font-bold">Alamat</span>
                    <span>
                        {{ $user->alamat }}
                    </span>
                </div>
            </div>
        </div>
        <div class="basis-1/2">
            <div class="p-10 bg-indigo-600 rounded-lg text-white">
                <h4 class="font-bold text-center text-2xl mb-10">Edit Profil</h4>
                <form action="{{ url('edit-profile/' . $user->id) }}" method="post" enctype="multipart/form-data"
                    autocomplete="off">
                    @method('put')
                    @csrf
                    <div class="grid grid-cols-1 mb-6">
                        <label for="nisn" class="font-bold text-lg">NISN &nbsp;</label>
                        <input type="text" name="nisn" id="nisn" @error('nisn') placeholder="{{ $message }}" @enderror
                            placeholder="NISN"
                            class="inline rounded-lg border-2 p-2 text-stone-800
                            @error('nisn') border-red-500 placeholder:text-red-500 @enderror"
                            value={{ old('nisn', $user->nisn) }}>
                    </div>
                    <div class="grid grid-cols-1 mb-6">
                        <label for="status" class="font-bold text-lg">Status &nbsp;</label>
                        <div class="relative">
                            @forelse ($status as $data)
                                <input type="radio" name="status_id" id="status" value="{{ $data->id }}"
                                    class="checked:bg-blue-500 w-6">
                                <span class="font-bold">{{ $data->status }}</span>
                            @empty
                                <span class="font-bold">Tidak ada opsi</span>
                            @endforelse
                            @error('status')
                                <span class="ml-2 font-bold block text-red-300">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 mb-6">
                        <label for="thn_lulus" class="font-bold text-lg">Tahun Lulus &nbsp;</label>
                        <select name="tahun_lulus_id"
                            class="inline rounded-lg border-2 p-2 text-stone-700 font-bold ease-in-out duration-300"
                            id="thn_lulus">
                            @forelse ($tahun as $data)
                                <option value="{{ $data->id }}">{{ $data->thn_lulus }}</option>
                            @empty
                                <option value="">-- Tidak ada opsi --</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="grid grid-cols-1 mb-6">
                        <label for="handphone" class="font-bold text-lg">No. Handphone &nbsp;</label>
                        <input type="text" name="handphone" id="handphone"
                            class="inline rounded-lg border-2 p-2 text-stone-800 @error('handphone') placeholder:text-red-500 border-red-500 @enderror"
                            @error('handphone') placeholder="{{ $message }}" @enderror placeholder="No. Handphone"
                            value={{ old('handphone', $user->handphone) }}>
                    </div>
                    <div class="grid grid-cols-1 mb-6">
                        <label for="alamat" class="font-bold text-lg">Alamat Lengkap &nbsp;</label>
                        <textarea name="alamat" id="alamat"
                            class="inline rounded-lg border-2 p-2 text-stone-800 @error('alamat') placeholder:text-red-500 border-red-500 @enderror"
                            @error('alamat') placeholder="{{ $message }}" @enderror placeholder="Alamat Lengkap"
                            rows="5">{{ old('alamat', $user->alamat) }}</textarea>
                    </div>
                    <div class="grid grid-cols-1 mb-6">
                        <input type="hidden" name="oldImage" value="{{ $user->image }}">
                        <label for="foto" class="font-bold text-lg">Foto Profil &nbsp;</label>
                        <input type="file" onchange="previewImage()" name="image" id="image"
                            class="inline rounded-lg border-2 p-2 bg-white @error('image') border-red-500 @enderror text-stone-800">
                        <img id="blah" width="250px" class="mt-2">
                        @error('image')
                            <span class="mt-4">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit"
                        class="rounded-full font-bold py-3 px-6 w-full bg-indigo-800 hover:bg-indigo-400 ease-in-out duration-300">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
