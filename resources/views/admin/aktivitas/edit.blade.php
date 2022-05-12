@extends('layouts.admin')

@section('content')
    <form action="{{ url("admin/dashboard/aktivitas/$aktivitas->id") }}" method="post" class="mt-5">
        @method('put')
        @csrf
        <div class="row mb-5">
            <div class="col-4">
                <span class="font-weight-bold">Aktivitas</span>
            </div>
            <div class="col-8">
                <textarea autofocus name="aktivitas" cols="30" rows="10" class="form-control">{{ $aktivitas->aktivitas }}</textarea>
                @error('aktivitas')
                    <span class="font-weight-bold text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-4">
            </div>
            <div class="col-8">
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </div>
    </form>
@endsection
