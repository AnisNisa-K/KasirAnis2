@extends('layouts.master')
@section('title','penjualan')
@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Tambah Data Penjualan</h1>
                    <a href="/penjualan" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Kembali</a>
                    <div class="table-responsive">
                        <br>
                        <!-- Form diawali dari sini -->
                        <form action="/penjualan/simpan" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="TanggalPenjualan" class="form-label">Tanggal Penjualan</label>
                                <input type="date"
                                class="form-control"
                                id="TanggalPenjualan"
                                name="TanggalPenjualan"
                                placeholder="Masukkan Nama Pelanggan"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="TotalHarga" class="form-label">Total Harga</label>
                                <input type="number"
                                class="form-control"
                                id="TotalHarga"
                                name="TotalHarga"
                                placeholder="Masukkan Total Harga"
                                step="0.01"
                                />
                            </div>
                            <div class="mb-3">
                                <label for="PelangganID" class="form-label">ID Pelanggan</label>
                                <input type="text"
                                class="form-control"
                                id="PelangganID"
                                name="PelangganID"
                                placeholder="Masukkan ID Pelanggan"
                                />
                            </div>
                            <button class="btn btn-info"><i class="bi bi-save"></i> Simpan</button>
                            <button class="btn btn-secondary" type="reset"><i class="bi bi-arrow-clockwise"></i> Bersihkan</button>
                        </form>
                        <!-- Form tutup disini -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
