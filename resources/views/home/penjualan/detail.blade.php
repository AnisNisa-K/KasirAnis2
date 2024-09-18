@extends('layouts.master')
@section('title', 'detail penjualan')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Detail Penjualan</h1>
                <p><strong>Tanggal Penjualan: </strong>{{ $penjualan->TanggalPenjualan }}</p>
                <p><strong>Nama Pelanggan: </strong>{{ $penjualan->pelanggan->NamaPelanggan }}</p>
                <p><strong>Total Harga: </strong>Rp {{ number_format($penjualan->TotalHarga, 2) }}</p>

                <h2>Detail Produk</h2>
                <table class="table">
                    <thead>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                    </thead>
                    <tbody>
                        @foreach($penjualan->detailpenjualans as $detail)
                        <tr>
                            <td>{{ $detail->produk->NamaProduk }}</td>
                            <td>{{ $detail->JumlahProduk }}</td>
                            <td>Rp {{ number_format($detail->produk->Harga, 2) }}</td>
                            <td>Rp {{ number_format($detail->Subtotal, 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/penjualan" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </section>
</div>

@endsection
