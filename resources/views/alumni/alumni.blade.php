@extends('layouts.main')

@section('content')
    <h3 class="text-5xl font-extrabold text-center text-stone-700">Cari <span class="text-indigo-700">Alumni</span></h3>
    <div class="p-12 shadow-lg rounded-lg mt-16">
        <div class="float-left mb-10">
            <form>
                <div class="block">
                    <label for="nama">Nama Lengkap: &nbsp;</label>
                    <input type="text" value="{{ old('nama') }}" name="nama" id="nama"
                        class="inline rounded-lg p-2 border-2 " placeholder="Cari Disini">
                </div>
                {{-- <button type="submit"
                    class="py-2 px-10 text-white mt-10 float-right rounded-full bg-indigo-500 hover:bg-indigo-700 ease-in-out duration-300">Cari</button> --}}
            </form>
        </div>
        <table class="mt-16 table-fixed w-full">
            <thead class="table-header-group text-center bg-indigo-600 text-white">
                <tr>
                    <th class="py-4">NISN</th>
                    <th class="py-4">Nama Lengkap</th>
                    <th class="py-4">Kelulusan</th>
                    <th class="py-4">Status</th>
                    <th class="py-4">Action</th>
                </tr>
            </thead>
            <tbody id="alumni">
                @forelse ($alumni as $data)
                    <tr class="text-center">
                        <td class="p-6">
                            <span>{{ $data->nisn }}</span>
                        </td>
                        <td class="p-6">
                            <span>{{ $data->nama }}</span>
                        </td>
                        <td class="p-6">
                            <span>{{ $data->tahun_lulus->thn_lulus }}</span>
                        </td>
                        <td class="p-6">
                            <span>{{ $data->status->status }}</span>
                        </td>
                        <td>
                            <a href="{{ url('/cari-alumni/' . $data->id) }}"
                                class="py-2 px-4 rounded-full bg-indigo-500 hover:bg-indigo-700 ease-in-out duration-300 text-white text-center font-bold">Lihat</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-6">
                            <h3 class="font-bold text-2xl text-center text-stone-700">Tidak ada data alumni ditemukan</h3>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-10">
            {{ $alumni->links() }}
        </div>
    </div>
@endsection
