@extends('template.base')
@section('content')
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6 portfolio-box">
                    <a href="./berita.html">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/berita.jpg') }}" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-name">Berita</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-box">
                    <a href="./Pariwisata.html" >
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/wisata.jpg') }}" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-name">Pariwisata</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="./Event.html">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/event2.jpg') }}" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-name">Event</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/penginapan.jpg') }}" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-name">Penginapan</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="./Kuliner.html">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/kuliner.jpg') }}" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-name">Kuliner</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/ole2.jpg') }}" alt="" />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-name">Oleh Oleh</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection