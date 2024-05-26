<!-- views/Administrator/Penggunas/view-pengguna.blade.php -->
@extends('Layouts.template')

@section('content')

<h1>Data Pengguna</h1>

<!-- Tambahkan tombol untuk mendaftar pengguna baru -->
<a href="{{ route('register-pengguna') }}" class="btn btn-primary mb-2">Tambah Pengguna</a>

<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $pengguna)
        <tr>
            <td>{{ $pengguna->username }}</td>
            <td>{{ $pengguna->password }}</td>
            <td>{{ $pengguna->level == 0 ? 'Guru' : 'Santri' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection