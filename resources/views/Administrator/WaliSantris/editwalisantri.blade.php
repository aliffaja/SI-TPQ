<!-- resources/views/Administrator/WaliSantris/editWaliSantris.blade.php -->

@extends('Layouts.template')

@section('content')
    <div class="container">
        <h1>Edit Wali Santri</h1>
        <form action="{{ route('wali_santri.update', $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $waliSantri->nama ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $waliSantri->alamat ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="no_hp">No HP:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp', $waliSantri->no_hp ?? '') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
