@extends('user.layouts.main')

@section('isi')
<br>
<form class="row g-3" action="/daftar/ubah" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            Profile
        </div>
        <div class="card-body">
            <div class="contaner">
                <div class="row">
                    <div class="col-md-10">
                        <img src="/img/avatar/{{ auth()->user()->avatar }}" style="width: 50px; height: 50px; float: left; border-radius: 50%; margin-right: 25px;">
                        <div class="mb-3">
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ auth()->user()->avatar }}">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="exampleInputName1" class="col-sm-2 col-form-label">Username :</label>
                <div class="col-sm-10">
                    <input type="search" class="form-control-plaintext @error('nama') is-invalid @enderror" id="exampleInputName1" name="nama" required value="{{ auth()->user()->nama }}">
                </div>
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control-plaintext @error('email') is-invalid @enderror" id="exampleInputemail1" name="email" required value="{{ auth()->user()->email }}">
                </div>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" required>
                </div>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="button">Ubah</button>
</form>

{{-- <form class="row g-3">
    <div class="mb-3">
        <label for="gambar" class="form-label">Foto Profil</label>
        <input class="form-control" type="file" id="gambar" name="gambar">
    </div>
    <div class="mb-3">
        <label for="exampleInputAlamat1" class="form-label">Alamat</label>
        <input type="search" class="form-control @error('alamat')
        is-invalid
        @enderror" id="exampleInputAlamat1" name="alamat" value="{{ old('alamat') }}">
</div>
<div class="mb-3">
    <label for="exampleInputTelp1" class="form-label">No Telpon</label>
    <input type="text" class="form-control @error('telp')
        is-invalid
        @enderror" id="exampleInputTelp1" name="telp" value="{{ old('telp') }}">
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
        @enderror" id="exampleInputTgl1" name="tgl" value="{{ old('tgl') }}">
</div>
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
</div>
<div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
</div>
<div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
</div>
<div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
</div>
<div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
</div>
<div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
    </select>
</div>
<div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
</div>
<div class="col-12">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Check me out
        </label>
    </div>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
</div>
</form> --}}
@endsection
