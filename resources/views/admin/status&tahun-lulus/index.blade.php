@extends('layouts.admin')

@section('content')
    <a href="{{ url('admin/dashboard/status&tahun-lulus/create') }}" class="my-3 btn btn-success"><i
            class="fas fa-regular fa-square-plus"></i></a>
    <div class="table-responsive mt-3">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Dibuat Pada</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($status as $data)
                    <tr>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->created_at->diffForHumans() }}</td>
                        <td>
                            <form action="{{ url('admin/dashboard/status/' . $data->id) }}" method="post"
                                class="mt-3">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">
                                    <i class="fas fa-solid fa-trash"></i>&nbsp; Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <h4 class="font-weight-bold text-center">Tidak ada status terbaru</h4>
                        </td>
                    </tr>
                @endforelse
            </tbody>
            <thead>
                <tr>
                    <th>Tahun Lulus</th>
                    <th>Dibuat Pada</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tahun_lulus as $data)
                    <tr>
                        <td>{{ $data->thn_lulus }}</td>
                        <td>{{ $data->created_at->diffForHumans() }}</td>
                        <td>
                            <form action="{{ url('admin/dashboard/tahun-lulus/' . $data->id) }}" method="post"
                                class="mt-3">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">
                                    <i class="fas fa-solid fa-trash"></i>&nbsp; Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <h4 class="font-weight-bold text-center">Tidak ada tahun lulus terbaru</h4>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
