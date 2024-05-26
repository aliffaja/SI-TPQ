<!-- resources/views/Administrator/Santris/addsantri.blade.php -->
@extends('Layouts.template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Santri Baru</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('santri.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nama_santri">Nama Santri</label>
                            <input id="nama_santri" type="text" class="form-control @error('nama_santri') is-invalid @enderror" name="nama_santri" value="{{ old('nama_santri') }}" required autofocus>
                            @error('nama_santri')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="id_pengguna">ID Pengguna</label>
                            <select id="id_pengguna" class="form-control @error('id_pengguna') is-invalid @enderror" name="id_pengguna" required>
                                <option value="">Pilih Pengguna</option>
                                @foreach($penggunas as $pengguna)
                                    <option value="{{ $pengguna->id }}">{{ $pengguna->name }}</option>
                                @endforeach
                            </select>
                            @error('id_pengguna')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="id_walisantri">ID Wali Santri</label>
                            <select id="id_walisantri" class="form-control @error('id_walisantri') is-invalid @enderror" name="id_walisantri" required>
                                <option value="">Pilih Wali Santri</option>
                                @foreach($waliSantri as $waliSantri)
                                    <option value="{{ $walisantri->id }}">{{ $walisantri->name }}</option>
                                @endforeach
                            </select>
                            @error('id_walisantri')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required>
                            @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input id="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" required>
                            @error('kelas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
