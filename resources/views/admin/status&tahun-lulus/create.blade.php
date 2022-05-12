@extends('layouts.admin')

@section('content')
    <a href="{{ url('admin/dashboard/status&tahun-lulus') }}" class="font-weight-bold mb-4"><i
            class="fas fa-solid fa-arrow-left-long"></i>&nbsp;
        Kembali</a>
    <form action="{{ url('admin/dashboard/status&tahun-lulus') }}" enctype="multipart/form-data" method="post"
        class="mt-5">
        @csrf
        <div class="row mb-5">
            <div class="col-3"><span class="font-weight-bold">Status</span></div>
            <div class="col-8">
                <input type="text" name="status" placeholder="Status" value="{{ old('status') }}" class="form-control">
                @error('status')
                    <span class="text-danger font-weight-bold mt-2">{{ $message }}</span>
                @enderror
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3"><span class="font-weight-bold">Tahun Lulus</span></div>
            <div class="col-8">
                <input type="text" name="thn_lulus" value="{{ old('thn_lulus') }}" placeholder="Tahun Lulus"
                    class="form-control">
                @error('thn_lulus')
                    <span class="text-danger font-weight-bold mt-2">{{ $message }}</span>
                @enderror
                <button type="submit" class="btn btn-success mt-4">Submit</button>
            </div>
        </div>
    </form>
@endsection
