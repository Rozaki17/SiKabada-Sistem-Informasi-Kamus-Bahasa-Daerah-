@extends('layouts.main')

@section('container')
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
@endsection