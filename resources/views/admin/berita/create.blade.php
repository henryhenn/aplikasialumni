@extends('layouts.admin')

@section('content')
    <form action="{{ url('admin/dashboard/berita') }}" enctype="multipart/form-data" method="post" class="mt-5">
        @csrf
        <div class="row mb-3">
            <div class="col-3"><span class="font-weight-bold">Gambar Berita</span></div>
            <div class="col-8">
                <input type="file" onchange="previewImage()" name="image" id="image" class="form-control">
                <img id="blah" width="250px" class="mt-2">
                @error('image')
                    <span class="text-danger font-weight-bold mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3"><span class="font-weight-bold">Judul Berita</span></div>
            <div class="col-8">
                <input type="text" name="title" value="{{ old('title') }}" placeholder="Judul Berita"
                    class="form-control">
                @error('title')
                    <span class="text-danger font-weight-bold mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3"><span class="font-weight-bold">Isi Berita</span></div>
            <div class="col-8">
                <textarea name="content" placeholder="Isi Berita" cols="30" rows="15"
                    class="form-control">{{ old('content') }}</textarea>
                @error('content')
                    <span class="text-danger font-weight-bold mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3"></div>
            <div class="col-8">
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </div>
    </form>
@endsection
