<!-- resources/views/Administrator/Santris/editsantri.blade.php -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Santri</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('santri.update', $santri->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama_santri">Nama Santri</label>
                            <input id="nama_santri" type="text" class="form-control @error('nama_santri') is-invalid @enderror" name="nama_santri" value="{{ $santri->nama_santri }}" required autofocus>
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
                                    <option value="{{ $pengguna->id }}" {{ $santri->id_pengguna == $pengguna->id ? 'selected' : '' }}>{{ $pengguna->name }}</option>
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
                                @foreach($walisantris as $walisantri)
                                    <option value="{{ $walisantri->id }}" {{ $santri->id_walisantri == $walisantri->id ? 'selected' : '' }}>{{ $walisantri->name }}</option>
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
                            <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ $santri->no_hp }}" required>
                            @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $santri->email }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input id="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ $santri->kelas }}" required>
                            @error('kelas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>