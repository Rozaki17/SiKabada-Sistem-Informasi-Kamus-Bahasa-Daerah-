@extends('layouts.main')

@section('container')
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
                            <p></p>
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
@endsection