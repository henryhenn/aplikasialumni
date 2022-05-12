@extends('layouts.main')

@section('content')
    <h3 class="text-4xl font-extrabold text-center text-stone-700">Registrasi <span class="text-indigo-700">User</span>
    </h3>
    @include('components.flash_message')
    <div class="flex justify-center mt-28">
        <div class="flex-grow">
            <form action="{{ url('register') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="p-10 shadow-md bg-indigo-600 rounded-lg text-white shadow-slate-600">
                    <div class="grid grid-cols-2 mb-6 ">
                        <label for="nama" class="font-bold text-lg">Nama Lengkap &nbsp;</label>
                        <input type="text" name="nama" id="nama" @error('nama') placeholder="{{ $message }}" @enderror
                            class="inline rounded-lg border-2 p-2 text-stone-800 @error('nama') border-red-500 placeholder:text-red-500 @enderror"
                            placeholder="Nama Lengkap" value={{ old('nama') }}>
                    </div>
                    <div class="grid grid-cols-2 mb-6">
                        <label for="nisn" class="font-bold text-lg">NISN &nbsp;</label>
                        <input type="text" name="nisn" id="nisn" @error('nisn') placeholder="{{ $message }}" @enderror
                            placeholder="NISN"
                            class="inline rounded-lg border-2 p-2 text-stone-800
                            @error('nisn') border-red-500 placeholder:text-red-500 @enderror"
                            value={{ old('nisn') }}>
                    </div>
                    <div class="grid grid-cols-2 mb-6">
                        <label for="status" class="font-bold text-lg">Status &nbsp;</label>
                        <div class="relative">
                            @forelse ($status as $data)
                                <input type="radio" name="status_id" value="{{ $data->id }}"
                                    class="checked:bg-blue-500 w-6">
                                <span class="font-bold">{{ $data->status }}</span>
                            @empty
                                <span class="font-bold">Tidak ada opsi terkini</span>
                            @endforelse
                            @error('status')
                                <span class="ml-2 font-bold block text-red-300">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-2 mb-6">
                        <label for="thn_lulus" class="font-bold text-lg">Tahun Lulus &nbsp;</label>
                        <select name="tahun_lulus_id"
                            class="inline rounded-lg border-2 p-2 text-stone-700 font-bold  ease-in-out duration-300"
                            id="thn_lulus">
                            @forelse ($tahun as $data)
                                <option value="{{ $data->id }}">{{ $data->thn_lulus }}</option>
                            @empty
                                <option disabled>Tidak ada opsi</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="grid grid-cols-2 mb-6">
                        <label for="email" class="font-bold text-lg">Email &nbsp;</label>
                        <input type="text" name="email" id="email"
                            class="inline rounded-lg border-2 p-2 text-stone-800 @error('email') placeholder:text-red-500 border-red-500 @enderror"
                            @error('email') placeholder="{{ $message }}" @enderror placeholder="Email"
                            value={{ old('email') }}>
                    </div>
                    <div class="grid grid-cols-2 mb-10">
                        <label for="password" class="font-bold text-lg">Password &nbsp;</label>
                        <input type="password" name="password" id="password"
                            class="inline rounded-lg border-2 p-2 text-stone-800 @error('email') placeholder:text-red-500 border-red-500 @enderror"
                            @error('password') placeholder="{{ $message }}" @enderror placeholder="Password">
                    </div>
                    <div class="grid grid-cols-2 mb-6">
                        <label for="handphone" class="font-bold text-lg">No. Handphone &nbsp;</label>
                        <input type="text" name="handphone" id="handphone"
                            class="inline rounded-lg border-2 p-2 text-stone-800 @error('handphone') placeholder:text-red-500 border-red-500 @enderror"
                            @error('handphone') placeholder="{{ $message }}" @enderror placeholder="No. Handphone"
                            value={{ old('handphone') }}>
                    </div>
                    <div class="grid grid-cols-2 mb-6">
                        <label for="alamat" class="font-bold text-lg">Alamat Lengkap &nbsp;</label>
                        <textarea name="alamat" id="alamat"
                            class="inline rounded-lg border-2 p-2 text-stone-800 @error('alamat') placeholder:text-red-500 border-red-500 @enderror"
                            @error('alamat') placeholder="{{ $message }}" @enderror placeholder="Alamat Lengkap"
                            rows="5">{{ old('alamat') }}</textarea>
                    </div>
                    <div class="grid grid-cols-2 mb-4">
                        <label for="nisn" class="font-bold text-lg">Foto Profil &nbsp;</label>
                        <input type="file" onchange="previewImage()" name="image" id="image"
                            class="inline rounded-lg border-2 p-2 bg-white @error('image') border-red-500 @enderror text-stone-800">
                    </div>
                    <div class="grid grid-cols-2 mb-6">
                        <div></div>
                        <img id="blah" width="250px" class="mt-2">
                    </div>
                    <button type="submit"
                        class="rounded-full font-bold py-3 px-6 w-full bg-indigo-800 hover:bg-indigo-400 ease-in-out duration-300">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
