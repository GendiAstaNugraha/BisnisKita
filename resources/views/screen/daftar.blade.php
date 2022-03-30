@extends('layouts.main')
@section('isi')
    <h1>Daftar</h1>
    <br><br>
    <form class="row g-3" action="/daftar" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Nama</label>
            <input type="search" class="form-control @error('nama')
            is-invalid
            @enderror" id="exampleInputName1" name="nama" required value="{{ old('nama') }}">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputAlamat1" class="form-label">Alamat</label>
            <input type="search" class="form-control @error('alamat')
            is-invalid
            @enderror" id="exampleInputAlamat1" name="alamat" required value="{{ old('alamat') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputTelp1" class="form-label">No Telpon</label>
            <input type="number" class="form-control @error('telp')
            is-invalid
            @enderror" id="exampleInputTelp1" name="telp" required value="{{ old('telp') }}">
            @error('telp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputTgl1" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tgl')
            is-invalid
            @enderror" id="exampleInputTgl1" name="tgl" required value="{{ old('tgl') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
            <input type="email" class="form-control @error('email')
            is-invalid
            @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required value="{{ old('email') }}">
            <div id="emailHelp" class="form-text">Kami tidak akan pernah membagikan email Anda kepada orang lain.</div>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control @error('sandi')
            is-invalid
            @enderror" id="exampleInputPassword1" name="password" required >
            @error('sandi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check" required value="null">
            <label class="form-check-label" for="exampleCheck1">Periksa Saya</label>
        </div>
        <button type="submit" class="btn btn-primary" name="button">Daftar</button>
    </form>
    <br><br>
@endsection
