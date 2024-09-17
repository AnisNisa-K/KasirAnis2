@extends('layouts.master')
@section('title', 'user')
@section('content')

<div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Data User</h1>
                        <a href="/user/tambah" class="btn btn-info"><i class="bi bi-plus"></i> Tambah</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->password}}</td>
                                        <td><a href="/user/{{ $user->id }}/show" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                                        <a href="/user/{{ $user->id }}/delete" class="btn btn-danger" onclick="return confirm('Yakin akan dihapus?')"><i class="bi bi-trash3"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </div>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
