@extends('layouts.main')

@section('container')
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
                                    <img src="img/AVATAR.png" alt="avatar" />
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
@endsection