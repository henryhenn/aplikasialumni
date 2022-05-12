@extends('layouts.admin')

@section('content')
    <form action="{{ url('admin/dashboard/berita/' . $berita->id) }}" enctype="multipart/form-data" method="post"
        class="mt-5">
        @method('put')
        @csrf
        <div class="row mb-5">
            <div class="col-4">
                <span class="font-weight-bold">Gambar Sebelumnya</span>
            </div>
            <div class="col-8">
                <input type="hidden" name="oldImage" value="{{ $berita->image }}">
                <img src="{{ asset('storage/' . $berita->image) }}" width="350px">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-4">
                <span class="font-weight-bold">Gambar Baru</span>
            </div>
            <div class="col-8">
                <input type="file" onchange="previewImage()" name="image" id="image" class="form-control">
                <img id="blah" width="250px" class="mt-2">
                @error('image')
                    <span class="font-weight-bold mt-3 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-4">
                <span class="font-weight-bold">Judul Berita</span>
            </div>
            <div class="col-8">
                <input type="text" name="title" value="{{ old('title', $berita->title) }}" class="form-control">
                @error('title')
                    <span class="font-weight-bold mt-3 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-4">
                <span class="font-weight-bold">Isi Berita</span>
            </div>
            <div class="col-8">
                <textarea name="content" cols="30" rows="15" class="form-control">{{ old('content', $berita->content) }}</textarea>
                @error('content')
                    <span class="font-weight-bold mt-3 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-4"></div>
            <div class="col-8">
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </div>
    </form>
@endsection
