@extends('layouts.master')
@section('title', 'pelanggan')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Data Pelanggan</h1>
                    <a href="/pelanggan/tambah" class="btn btn-info"><i class="bi bi-plus"></i> Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Nama</td>
                                    <td>Alamat</td>
                                    <td>Nomor Telepon</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pelanggan as $pelanggan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pelanggan->NamaPelanggan }}</td>
                                    <td>{{ $pelanggan->Alamat }}</td>
                                    <td>{{ $pelanggan->NomorTelepon}}</td>
                                    <td><a href="/pelanggan/{{ $pelanggan->id }}/show" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                                        <a href="/pelanggan/{{ $pelanggan->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin akan dihapus?')"><i class="bi bi-trash3"></i> Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
