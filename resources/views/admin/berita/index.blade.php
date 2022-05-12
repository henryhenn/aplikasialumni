@extends('layouts.admin')

@section('content')
    <a href="{{ url('admin/dashboard/berita/create') }}" class="my-3 btn btn-success"><i
            class="fas fa-regular fa-square-plus"></i></a>
    <div class="table-responsive mt-3">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gambar</th>
                    <th>Judul Berita</th>
                    <th>Isi Berita</th>
                    <th>Dibuat Pada</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($berita as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>
                            @if ($data->image)
                                <img src="{{ asset('storage/' . $data->image) }}" width="200px">
                            @else
                                <img src="{{ asset('img/default.jpg') }}" title="Default Image" alt="Default Image"
                                    width="200px">
                            @endif
                        </td>
                        <td>{{ $data->title }}</td>
                        <td>{{ Str::excerpt($data->content) }}</td>
                        <td>{{ $data->created_at->diffForHumans() }}</td>
                        <td>
                            <div style="display: flex;">
                                <a href="{{ url("admin/dashboard/berita/$data->id") }}" class="btn btn-primary btn-sm"><i
                                        class="fas fa-solid fa-eye"></i></a>
                                <a href="{{ url("admin/dashboard/berita/$data->id/edit") }}"
                                    class="btn btn-sm btn-warning text-white mx-2"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ url('admin/dashboard/berita/' . $data->id) }}" method="post">
                                    @method("Delete")
                                    @csrf
                                    <input type="hidden" name="oldImage" value="{{ $data->image }}">
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')"><i
                                            class="fas fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            <h5 class="text-center font-weight-bold">TIdak ada berita ditemukan</h5>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
