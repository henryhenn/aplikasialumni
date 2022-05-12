@extends('layouts.admin')

@section('content')
    <div class="card shadow-lg mt-5" style="background-color: #6366F1">
        <div class="card-header">
            <h5 class="card-title">User Teregristrasi</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>NISN</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Tahun Lulus</th>
                            <th>Handphone</th>
                            <th>Dibuat pada</th>
                            <th>Diupdate pada</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->nisn }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->status->status }}</td>
                                <td>{{ $data->tahun_lulus->thn_lulus }}</td>
                                <td>{{ $data->handphone }}</td>
                                <td>{{ $data->created_at->diffForHumans() }}</td>
                                <td>{{ $data->updated_at->diffForHumans() }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    <h3 class="text-center font-weight-bold">Tidak ada data terbaru</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <span class="float-right">
                    <a href="{{ url('admin/dashboard/alumni') }}" class="font-weight-bold text-white">Lihat
                        Selengkapnya <i class="fas fa-solid fa-arrow-right-long"></i></a>
                </span>
            </div>
        </div>
    </div>
    <div class="card shadow-lg mt-5" style="background-color: #0284C7">
        <div class="card-header">
            <h5 class="card-title">Aktivitas Terbaru</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Aktivitas</th>
                            <th>Dibuat pada</th>
                            <th>Diupdate pada</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($aktivitas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->aktivitas }}</td>
                                <td>{{ $data->created_at->diffForHumans() }}</td>
                                <td>{{ $data->updated_at->diffForHumans() }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <h3 class="font-weight-bold text-center">Tidak ada aktivitas terbaru</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <span class="float-right">
                    <a href="{{ url('admin/dashboard/aktivitas') }}" class="font-weight-bold text-white">Lihat
                        Selengkapnya <i class="fas fa-solid fa-arrow-right-long"></i></a>
                </span>
            </div>
        </div>
    </div>
@endsection
