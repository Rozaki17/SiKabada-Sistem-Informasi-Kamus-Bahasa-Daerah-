@extends('layouts.main')

@section('container')
<!-- BERANDA -->
<section id="beranda">
    <div class="container text-center">
        <div class="content-beranda">
            <div class="beranda-kalimat">
                <div class="wrapper">
                    <div class="typing-demo"><h1>KAMUS BAHASA DAERAH DIGITAL</h1></div>
                </div>
                <!-- <h1>KAMUS BAHASA DAERAH DIGITAL</h1> -->
                <h3 class="mt-4 mb-3">
                    Mari Melestarikan Bahasa <br />
                    Daerah yang Ada di Indonesia
                </h3>
                <p>
                    Indonesia memiliki 718 bahasa daerah yang eksistensinya wajib <br />
                    dilindungi karena merupakan warisan sekaligus identitas bangsa
                </p>
            </div>
            <div class="button-beranda">
                <a href="#kamus">
                    <button class="mulai me-3 mt-1">Mulai</button>
                </a>
                <button class="selengkapnya ms-1">Pelajari Selengkapnya</button>
            </div>
        </div>
    </div>
</section>
<!-- END BERANDA -->

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
    </div>
    <form action="/kamus" method="POST">
        <div class="form-kamus mt-4">
            <div class="container justify-content-center">
                <div class="row gx-2 justify-content-between">
                    <div class="col-auto">
                        <input class="form-control" type="text" placeholder="Masukan sebuah kata" aria-label="kata" >
                    </div>
                    <div class="col-auto ms-3">
                        <input type="button" class="terjemahkan" value="Terjemahkan">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row-two btn-group dropend mt-3">
        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Pilih Bahasa</button>
        <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Sasak</a></li>
            <li><a class="dropdown-item" href="#">Sumbawa</a></li>
            <li><a class="dropdown-item" href="#">Mbojo</a></li>
        </ul>
    </div>

    <!-- CALL OUT -->
    <div class="container call-out mt-5">
        <div class="row">
            <div class="col-12">
                <img src="img/HORIZONTALLINE.png" alt="horizontal line" width="100%" />
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
                <img src="/img/HORIZONTALLINE.png" alt="horizontal line" width="100%" />
            </div>
        </div>
    </div>
    <!-- END CALL OUT -->
    
</section>
<!-- END KAMUS -->

<!-- EVENT -->
<section id="event" class="position-relative">
    <div class="container event-container mx-auto">
        <div class="kalimat text-center">
            <h2 class="mb-3">EVENT</h2>
            <h3>
                Mengetahui berbagai event kebudayaan <br />
                yang ada di Indonesia
            </h3>
        </div>
        <div class="card-event">
            <div class="row">
                @foreach ($articles as $article) 
                <div class="col-4">
                    <div class="card card-pertama text-center">
                        <img src="/img/CARD-EVENT.png" class="card-img-top" alt="artikel" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->excerpt }}</p>
                            <a href="/event/{{ $article->slug }}" class="btn btn-card">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- END EVENT -->

<!-- ARTIKEL -->
<section id="artikel">
    <div class="container container-artikel">
        <div class="kalimat text-center">
            <h2 class="mb-3">ARTIKEL</h2>
            <h3>
                Ketahui lebih dalam <br />
                seputar kebudayaan daerah
            </h3>
        </div>
        <div class="row artikel-row">
            @foreach ($articles as $article)
            <div class="col-4 artikel-card">
                <a class="artikel-button" href="artikeldetail.html">
                    <div class="card">
                        <img src="/img/CARD-ARTIKEL.png" class="card-img-top" alt="artikel" />
                        <div class="card-body pb-0">
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                            <div class="row card-row-artikel">
                                <div class="col-2 p">
                                    <img src="/img/AVATAR.png" alt="avatar" />
                                </div>
        
                                <div class="col-10 ps-4">
                                    <p>
                                        Rob Arace <br />
                                        20 Mar
                                        <span> <img src="img/Ellipse.png" alt="Ellipse" /></span>
                                        5 min read
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="text-center" id="loadmore">
            <input type="button" class="btn-loadmore" value="Lihat Artikel Lainnya" />
        </div>

        <div class="text-center" id="nocontent">
            <p>No Content</p>
        </div>

        <div class="text-center" id="sembunyikan">
            <input type="button" class="btn-sembunyikan" value="Sembunyikan" />
        </div>
    </div>
</section>
<!-- END ARTIKEL -->

<!-- TENTANG KAMI -->
<section id="tentangkami">
    <div class="container tentangkami-container">
        <div class="kalimat text-center">
            <h2 class="mb-3">TENTANG KAMI</h2>
            <h3>
                Sekilas mengenai tim <br />
                pengembang Sikabada.
            </h3>
        </div>
        <div class="row gx-4 card-developer text-center mt-4">
            <div class="col">
                <div class="p-3 card-coloumn pt-5 pb-5 ps-4 pe-4">
                    <img src="img/DAUS.png" alt="Muh. Firdaus" />
                    <h4>Muh. Firdaus</h4>
                    <h5>Role: Frontend</h5>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor”</p>
                    <div class="row social-media gx-0 mx-auto w-50">
                        <div class="col">
                            <a href="">
                                <img src="img/GitHub.png" alt="github" />
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <img src="img/LinkedIn Circled.png" alt="linkedin" />
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <img src="img/Instagram Circle.png" alt="instagram" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-3 card-coloumn pt-5 pb-5 ps-4 pe-4">
                    <img src="img/IZA.png" alt="Mizanul Ridho Aohana" />
                    <h4>Mizanul Ridho Aohana</h4>
                    <h5>Role: Fullstack</h5>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor”</p>
                    <div class="row social-media gx-0 mx-auto w-50">
                        <div class="col">
                            <a href="">
                                <img src="img/GitHub.png" alt="github" />
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <img src="img/LinkedIn Circled.png" alt="linkedin" />
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <img src="img/Instagram Circle.png" alt="instagram" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-3 card-coloumn pt-5 pb-5 ps-4 pe-4">
                    <img src="img/ROZAKI.png" alt="Muhammad Rozaki" />
                    <h4>Muhammad Rozaki</h4>
                    <h5>Role: Backend</h5>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor”</p>
                    <div class="row social-media gx-0 mx-auto w-50">
                        <div class="col">
                            <a href="">
                                <img src="img/GitHub.png" alt="github" />
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <img src="img/LinkedIn Circled.png" alt="linkedin" />
                            </a>
                        </div>
                        <div class="col">
                            <a href="">
                                <img src="img/Instagram Circle.png" alt="instagram" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- CALL OUT -->
<div class="container call-out mt-3">
    <div class="row">
        <div class="col-12">
            <img src="img/HORIZONTALLINE.png" alt="horizontal line" width="100%" />
        </div>
    </div>

    <div class="row ps-3">
        <div class="col-6 ps-5 kalimat">
            <h3>Kirim pertanyaan atau saran dan kritikmu melalui tombol disamping</h3>
        </div>

        <div class="col-6 ps-5 kolom-tombol">
            <div class="row">
                <div class="col">
                    <a href="kritik-saran.html" style="text-decoration: none">
                        <input type="button" class="ms-5 btn-tambahkosakata" value="Kritik/Saran" />
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
            <img src="img/HORIZONTALLINE.png" alt="horizontal line" width="100%" />
        </div>
    </div>
</div>
<!-- END CALL OUT -->

</section>
<!-- END TENTANG KAMI -->
@endsection