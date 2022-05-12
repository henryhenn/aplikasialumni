@extends('layouts.admin')

@section('content')
    <a href="{{ url('admin/dashboard/galeri/create') }}" class="my-3 btn btn-success"><i
            class="fas fa-regular fa-square-plus"></i></a>
    <div class="row mb-3 mt-4">
        @forelse ($gambar as $data)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mx-3 mb-3">
                <img src="{{ asset('storage/' . $data->image) }}" width="400px" class="img-fluid">
                <form action="{{ url('admin/dashboard/galeri/' . $data->id) }}" method="post" class="mt-3">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">
                        <i class="fas fa-solid fa-trash"></i>&nbsp; Hapus
                    </button>
                </form>
            </div>
        @empty
            <div class="col">
                <h3 class="font-weight-bold text-center mt-3">Tidak ada gambar terbaru</h3>
            </div>
        @endforelse
    </div>
@endsection
