@extends('layouts.admin')

@section('content')
    <a href="{{ url('admin/dashboard/aktivitas/create') }}" class="my-3 btn btn-success"><i
            class="fas fa-regular fa-square-plus"></i></a>
    <div class="table-responsive mt-3">
        <table class="table table-striped table-secondary" style="background-color: #0284C7;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Aktivitas</th>
                    <th>Dibuat Pada</th>
                    <th>Diupdate Pada</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($aktivitas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->aktivitas }}</td>
                        <td>{{ $data->created_at->diffForHumans() }}</td>
                        <td>{{ $data->updated_at->diffForHumans() }}</td>
                        <td>
                            <div style="display: flex;">
                                <a href="{{ url("admin/dashboard/aktivitas/$data->id/edit") }}"
                                    class="btn btn-warning btn-sm text-white mr-2"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ url("admin/dashboard/aktivitas/$data->id") }}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" onclick="return confirm('Apakah Anda Yakin?')"
                                        class="btn btn-sm btn-danger"><i class="fas fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <h4 class="font-weight-bold text-center">Tidak ada aktivitas ditemukan</h4>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
