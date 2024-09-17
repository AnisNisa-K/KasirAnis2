@extends('layouts.master')
@section('title', 'tambah pelanggan')
@section('content')

    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Tambah Data Pelanggan</h1>
                        <a href="/pelanggan" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Kembali</a>
                        <div class="table-responsive">
                            <br>
                            <!-- Form diawali dari sini -->
                            <form action="/pelanggan/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="NamaPelanggan" class="form-label">Nama Pelanggan</label>
                                    <input type="text"
                                    class="form-control"
                                    id="NamaPelanggan"
                                    name="NamaPelanggan"
                                    placeholder="Masukkan Nama Pelanggan"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="Alamat" class="form-label">Alamat</label>
                                    <input type="text"
                                    class="form-control"
                                    id="Alamat"
                                    name="Alamat"
                                    placeholder="Masukkan Alamat"
                                    />
                                </div>
                                <div class="mb-3">
                                <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                                <input type="number"
                                class="form-control"
                                id="NomorTelepon"
                                name="NomorTelepon"
                                placeholder="Masukkan Nomor Telepon"
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
        </section>
    </div>

@endsection
