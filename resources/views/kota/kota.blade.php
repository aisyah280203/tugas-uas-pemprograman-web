<!-- resources/views/kota.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Kota</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID Kota</th>
                                    <th>Nama Kota</th>
                                    <th>Nama Pemimpin</th>
                                    <th>Tanggal Berdiri</th>
                                    <th>Jumlah Penduduk</th>
                                    <th>Luas Wilayah</th>
                                    <th>Jenis Kota</th>
                                    <th>Keunggulan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kota as $item)
                                    <tr>
                                        <td>{{ $item->IDKota }}</td>
                                        <td>{{ $item->NamaKota }}</td>
                                        <td>{{ $item->NamaPemimpin }}</td>
                                        <td>{{ $item->TglBerdiri }}</td>
                                        <td>{{ $item->JmlPenduduk }}</td>
                                        <td>{{ $item->LuasWilayah }}</td>
                                        <td>{{ $item->JenisKota }}</td>
                                        <td>{{ $item->Keunggulan }}</td>
                                        <td>
                                            <a href="{{ route('kota.edit', $item->IDKota) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('kota.destroy', $item->IDKota) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
