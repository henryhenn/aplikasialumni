@extends('layouts.admin')

@section('content')
    <a href="{{ url('admin/dashboard/alumni') }}" class="font-weight-bold" style="color: #94A3B8;"><i
            class="fas fa-solid fa-arrow-left-long"></i>&nbsp; Kembali</a>
    <div class="mt-5">
        <div class="card bg-success">
            <div class="card-body font-weight-bold">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                        <h5 class="font-weight-bold">Nama Lengkap: {{ $alumni->nama }}</h5>
                        <ul style="list-style: none;">
                            <li>NISN: {{ $alumni->nisn }}</li>
                            <li>Status: {{ $alumni->status->status }}</li>
                            <li>Tahun Lulus: {{ $alumni->tahun_lulus->thn_lulus }}</li>
                            <li>Email: {{ $alumni->email }}</li>
                            <li>Handphone: {{ $alumni->handphone }}</li>
                            <li>Alamat: {{ $alumni->alamat }}</li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <img src="{{ asset('img/default.jpg') }}" width="350px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
