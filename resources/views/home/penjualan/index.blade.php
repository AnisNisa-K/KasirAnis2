@extends('layouts.master')
@section('title', 'penjualan')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Data Penjualan</h1>
                    <a href="/penjualan/tambah" class="btn btn-info"><i class="bi bi-plus"></i>Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Tanggal Penjualan</td>
                                    <td>Total Harga</td>
                                    <td>ID Pelanggan</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penjualan as $penjualan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $penjualan->TanggalPenjualan }}</td>
                                    <td>{{ $penjualan->TotalHarga }}</td>
                                    <td>{{ $penjualan->PelangganID }}</td>
                                    <td><a href="/penjualan/{{ $penjualan->id}}/show" class="btn btn-secondary"><i class="bi bi-eye-fill"></i> Detail</a></td>
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
