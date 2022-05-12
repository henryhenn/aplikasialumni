@extends('layouts.admin')

@section('content')
    <form action="{{ url('admin/dashboard/aktivitas') }}" method="post" class="mt-5">
        @csrf
        <div class="row mb-3">
            <div class="col-4">
                <span class="font-weight-bold">Aktivitas</span>
            </div>
            <div class="col-8">
                <textarea name="aktivitas" placeholder="Buat Aktivitas Baru di Sini" cols="30" rows="10"
                    class="form-control">{{ old('content') }}</textarea>
                @error('aktvitas')
                    <span class="font-weight-bold text-danger mt-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
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
