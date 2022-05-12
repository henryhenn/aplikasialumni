@extends('layouts.admin')

@section('content')
    <div class="table-responsive mt-5">
        <table class="table table-striped" style="background-color: #6366F1;">
            <thead>
                <tr>
                    <th colspan="8">
                        <form action="{{ url('admin/dashboard/alumni') }}" method="get">
                            <input type="text" name="nama" placeholder="Cari Alumni di Sini..." class="form-control">
                        </form>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>NISN</th>
                    <th>Nama Lengkap</th>
                    <th>Kelulusan</th>
                    <th>Alamat</th>
                    <th>Handphone</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($alumni as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->tahun_lulus->thn_lulus }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->handphone }}</td>
                        <td>{{ $data->status->status }}</td>
                        <td>
                            <div style="display: flex;">
                                <a href="{{ url("admin/dashboard/alumni/$data->id") }}"
                                    class="btn btn-primary btn-sm mr-2"><i class="fas fa-solid fa-eye"></i></a>
                                <form action="{{ url('admin/dashboard/alumni/' . $data->id) }}" method="post">
                                    @method("Delete")
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah Anda Yakin?')"><i
                                            class="fas fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <h3>Tidak ada data ditemukan</h3>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
