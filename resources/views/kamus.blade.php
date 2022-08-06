@extends('layouts.main')

@section('container')
<!-- KAMUS -->
<section id="kamus">
    <div class="container">
        <div class="kalimat text-center">
            <h2 class="mb-3">KAMUS</h2>
            <h3>
                Ketahui Arti Kata Suatu <br />
                Bahasa Daerah dengan Cepat
            </h3>
        </div>

        <div class="form-kamus mt-4">
            <div class="container justify-content-center">
                <div class="row gx-2 justify-content-between">
                    <div class="col-auto">
                        <input class="form-control" type="text" placeholder="Masukan sebuah kata" aria-label="kata" />
                    </div>

                    <div class="col-auto ms-3">
                        <input type="button" class="terjemahkan" value="Terjemahkan" />
                    </div>
                </div>

                <div class="row-two btn-group dropend mt-3">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Pilih Bahasa</button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Sasak</a></li>
                        <li><a class="dropdown-item" href="#">Sumbawa</a></li>
                        <li><a class="dropdown-item" href="#">Mbojo</a></li>
                    </ul>
                </div>

                <div class="row-three row mt-4 justify-content-start">
                    <div class="col-auto">
                        <label for="hasilterjemahanan" class="form-label">Hasil Terjemahan</label>
                        <input type="text" class="form-control baris345" id="hasilter" value="null" readonly />
                    </div>
                </div>

                <div class="row-fourth row mt-4 justify-content-start">
                    <div class="col-auto">
                        <label for="hasilterjemahanan" class="form-label">Pengucapan</label>
                        <div class="input-group">
                            <input type="text" class="form-control pengucapan" value="null" aria-describedby="button-addon2" readonly />
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <img src="IMG/SPEAKER.svg" alt="speaker" />
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row-fifth row mt-4 justify-content-start">
                    <div class="col-auto">
                        <label for="artikosakata" class="form-label">Arti Kosakata</label>
                        <input type="text" class="form-control baris345" id="hasilter" value="null" readonly />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CALL OUT -->

    <div class="container call-out mt-5">
        <div class="row">
            <div class="col-12">
                <img src="IMG/HORIZONTALLINE.png" alt="horizontal line" width="100%" />
            </div>
        </div>

        <div class="row ps-3">
            <div class="col-6 ps-5 kalimat">
                <h3>Anda juga dapat menambahkan kosakata baru pada website ini</h3>
            </div>

            <div class="col-6 ps-5 kolom-tombol">
                <div class="row gx-1">
                    <div class="col">
                        <a href="tambahkata.html" style="text-decoration: none">
                            <input type="button" class="btn-tambahkosakata" value="Tambah Kosakata" />
                        </a>
                    </div>
                    <div class="col">
                        <a href="pertanyaan.html" style="text-decoration: none">
                            <input type="button" class="btn-pertanyaan" value="Pertanyaan" />
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <img src="IMG/HORIZONTALLINE.png" alt="horizontal line" width="100%" />
            </div>
        </div>
    </div>

    <!-- END CALL OUT -->

</section>

<!-- END KAMUS -->
@endsection