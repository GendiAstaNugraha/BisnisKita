@extends('layouts.main')
@section('isi')
    <h1>Daftar</h1>
    <br><br>
    <form class="row g-3" action="/daftar" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Username</label>
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
            <label for="exampleInputEmail1" class="form-label">Email</label>
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
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control @error('password')
            is-invalid
            @enderror" id="exampleInputPassword1" name="password" required >
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check" required value="Null">
            <label class="form-check-label" for="exampleCheck1">Check</label>
        </div>
        <button type="submit" class="btn btn-primary" name="button">Daftar</button>
    </form>
    <br><br>
@endsection
