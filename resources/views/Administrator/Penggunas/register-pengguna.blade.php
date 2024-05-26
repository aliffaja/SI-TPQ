<!-- views/Administrator/Penggunas/register-pengguna.blade.php -->
@extends('Layouts.template')

@section('content')

<h1>Register Pengguna Baru</h1>

<form method="POST" action="{{ route('register-pengguna') }}">
    @csrf
    <div class="form-group">
        <label for="username">Username :</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password :</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <h4>Role Anda??</h4>
    <select name="level" required>
        <option value="0">Guru</option>
        <option value="1">Santri</option>
    </select>
    <button type="submit" class="btn btn-primary">Register</button>
    @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif

</form>
@endsection
