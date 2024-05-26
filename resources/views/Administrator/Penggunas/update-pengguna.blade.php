<!-- views/Administrator/Penggunas/update-pengguna.blade.php -->
@extends('Layouts.template')

@section('content')
<h1>Update Pengguna</h1>

<form method="POST" action="{{ route('update-pengguna', $pengguna->id) }} class="mb-3"">
    @csrf
    @method('PUT')
    <input type="text" name="username" value="{{ $pengguna->username }}">
    <input type="password" name="password" placeholder="Password">
    <select name="level">
        <option value="0" {{ $pengguna->level == 0 ? 'selected' : '' }}>Guru</option>
        <option value="1" {{ $pengguna->level == 1 ? 'selected' : '' }}>Santri</option>
    </select>
    <button type="submit">Update</button>
</form>
@endsection