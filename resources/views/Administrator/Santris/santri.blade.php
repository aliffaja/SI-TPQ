<!-- resources/views/Administrator/Santris/santri.blade.php -->

@extends('Layouts.template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Santri</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('santri.create') }}" class="btn btn-primary mb-3">Tambah Santri</a>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Santri</th>
                                <th>ID Pengguna</th>
                                <th>ID Wali Santri</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($santris as $santri)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $santri->nama_santri }}</td>
                                    <td>{{ $santri->id_pengguna }}</td>
                                    <td>{{ $santri->id_walisantri }}</td>
                                    <td>{{ $santri->no_hp }}</td>
                                    <td>{{ $santri->email }}</td>
                                    <td>{{ $santri->kelas }}</td>
                                    <td>
                                        <a href="{{ route('santri.edit', $santri->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('santri.destroy', $santri->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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