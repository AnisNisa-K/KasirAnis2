@extends('layouts.master')
@section('title', 'edit pelanggan')
@section('content')

    <div class="content-wrapper">
        <br>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Edit Data Pelanggan</h1>
                        <a href="/pelanggan" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Kembali</a>
                        <br> <br>
                        <!-- Form dimulai dari sini -->
                        <form action="/pelanggan/{{ $pelanggan->id }}/update" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="NamaPelanggan" class="form-label">Nama Pelanggan</label>
                                <input type="text"
                                class="form-control"
                                id="NamaPelanggan"
                                name="NamaPelanggan"
                                value="{{ $pelanggan->NamaPelanggan }}"
                                placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <input type="text"
                                class="form-control"
                                id="Alamat"
                                name="Alamat"
                                value="{{ $pelanggan->Alamat}}"
                                placeholder=""
                                />
                            </div>
                            <div class="mb-3">
                                <label for="NomorTelepon" class="form-label">Nomor Telepon</label>
                                <input type="number"
                                class="form-control"
                                id="NomorTelepon"
                                name="NomorTelepon"
                                value="{{ $pelanggan->NomorTelepon}}"
                                placeholder=""
                                />
                            </div>
                            <button class="btn btn-info"><i class="bi bi-save"></i> Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
