@extends('layouts.main')
@section('isi')
<h1>Masuk</h1>
<br><br>
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<br>
<form class="row g-3" action="/masuk" method="POST">
    @csrf
    <div class="mb-3">
        <i class="fa-solid fa-envelope"></i>
        <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
        <input type="email" class="form-control @error('email')
            is-invalid
            @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required autofocus value="{{ old('email') }}">
        <div id="emailHelp" class="form-text">Kami tidak akan pernah membagikan email Anda kepada orang lain.</div>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <i class="fa-solid fa-key"></i>
        <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
        <input type="password" class="form-control @error('password')
            is-invalid
            @enderror" id="exampleInputPassword1" name="password" required>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check" required value="Null">
        <label class="form-check-label" for="exampleCheck1">Periksa Saya</label>
    </div>
    <button type="submit" class="btn btn-primary" name="button">Masuk</button>
</form>
<br><br>
@endsection
