@extends('layouts.admin')

@section('content')
    <form action="{{ url('admin/dashboard/galeri') }}" enctype="multipart/form-data" method="post" class="mt-5">
        @csrf
        <div class="row mb-3">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"><span class="font-weight-bold">Gambar</span></div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <input type="file" onchange="previewImage()" name="image" id="image" class="form-control">
                <img id="blah" width="250px" class="mt-2">
                @error('image')
                    <span class="text-danger font-weight-bold mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-xl-4 col-md-4 col-lg-4 col-sm-0">
            </div>
            <div class="col-8">
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </div>
    </form>
@endsection
