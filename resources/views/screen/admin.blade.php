@extends('layouts.main')
@section('isi')
<h1>Admin</h1>
<br><br>
<form class="row g-3">
    <div class="mb-3">
        <i class="fa-solid fa-envelope"></i>
        <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">Kami tidak akan pernah membagikan email Anda kepada orang lain.</div>
    </div>
    <div class="mb-3">
        <i class="fa-solid fa-key"></i>
        <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
        <input type="password" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
        <label class="form-check-label" for="exampleCheck1">Periksa Saya</label>
    </div>
    <button type="submit" class="btn btn-primary">Masuk</button>
</form>
@endsection
