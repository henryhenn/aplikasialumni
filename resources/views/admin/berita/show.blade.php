@extends('layouts.admin')

@section('content')
    <a href="{{ url('admin/dashboard/berita') }}" class="font-weight-bold" style="color: #94A3B8;"><i
            class="fas fa-solid fa-arrow-left-long"></i>&nbsp; Kembali</a>
    <h4 class="font-weight-bold" style="margin-top: 20px;">{{ $berita->title }}</h4>
    <div class="row mt-5">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mr-5">
            <p>{{ $berita->content }}</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <img src="{{ asset('storage/' . $berita->image) }}" width="480px" class="mb-3 mt-2">
            <small class="block mt-5"><i class="fa-regular fa-calendar-days"></i>&nbsp; Diupdate
                pada:{{ $berita->created_at->diffForHumans() }}</small>
        </div>
    </div>
@endsection
