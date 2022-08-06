@extends('layouts.no-navbar-footer')

@section('container')
<div class="daftar-container p-5">
    <div class="row daftar-kembali">
        <div class="col-6" style="color: #16fcd2; font-weight: 700">
            <h3>Daftar</h3>
        </div>
        <div class="col-6 d-flex align-items-center justify-content-end">
            <div class="logokembali d-flex align-items-center">
                <div class="logo flex-shrink-0">
                    <a href="/">
                        <img src="/img/Back Arrow.svg" alt="logo" style="width: 28px" />
                    </a>
                </div>
                <div class="tulisan flex-grow-1 ms-1">
                    <a href="/">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row form-daftar">
        <form action="/register" method="POST">
            @csrf
            <div class="form-floating mt-4 mb-4">
                <input type="text" class="form-control" id="nama" placeholder="Nama" nama="nama"/>
                <label for="nama">Nama pengguna</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="katasandi" placeholder="Password" nama="katasandi"/>
                <label for="katasandi">Kata Sandi</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="katasandi2" placeholder="Konfirmasi Password" nama="katasandi2"/>
                <label for="katasandi2">Konfirmasi Kata Sandi</label>
            </div>
            <div class="tombol-daftar">
                <button type="submit" name="tombolDaftar" class="daftar">Daftar</button>
            </div>
        </form>
        <div class="sudah-akun mt-3">
            <p>Sudah memiliki akun? <a href="/login">Masuk</a></p>
        </div>
    </div>
</div>
@endsection
