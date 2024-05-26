<!-- resources/views/Administrator/WaliSantris/WaliSantris.blade.php -->

@extends('Layouts.template')

@section('content')
    <div class="container">
        <h1>Daftar Wali Santri</h1>
        <a href="{{ route('wali_santri.create') }}" class="btn btn-primary">Tambah Wali Santri</a>
        <a href="{{ route('wali_santri.report.pdf') }}" class="btn btn-warning">Cetak Data</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $waliSantri)
                    <tr>
                        <td>{{ $waliSantri->id }}</td>
                        <td>{{ $waliSantri->nama }}</td>
                        <td>{{ $waliSantri->alamat }}</td>
                        <td>{{ $waliSantri->no_hp }}</td>
                        <td>
                            <a href="{{ route('wali_santri.edit', $waliSantri->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('wali_santri.destroy', $waliSantri->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    
@endsection

