@extends('layouts.mainweb')

@section('title')
    About Us
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/about.css') }}">
@endsection

@section('content')
    <div class="container mt-5">
        <h2 class="d-flex justify-content-center my-5 fs-1 mb-4 myTitle">WHAT IS MANIAC ?</h2>
        <div class="carousel-cont text-center">
            <div class="carousel-slider">
                <div id="carouselExampleIndicators" class="carousel slide carousel-card mt-4 mb-0" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                            aria-label="Slide 8"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset("../mainweb/img/photos/image7.jpg") }}"
                                class="d-block w-100" alt="MANIAC X">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("../mainweb/img/photos/image6.jpg") }}"
                                class="d-block w-100" alt="MANIAC X">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("../mainweb/img/photos/image9.jpg") }}"
                                class="d-block w-100" alt="MANIAC X">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("../mainweb/img/photos/image8.jpg") }}"
                                class="d-block w-100" alt="MANIAC X">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("../mainweb/img/photos/image1.jpg") }}"
                                class="d-block w-100" alt="MANIAC IX">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("../mainweb/img/photos/image2.jpg") }}"
                                class="d-block w-100" alt="MANIAC IX">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("../mainweb/img/photos/image3.jpg") }}"
                                class="d-block w-100" alt="MANIAC IX">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset("../mainweb/img/photos/image4.jpg") }}"
                                class="d-block w-100" alt="MANIAC IX">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="carousel-desc">
                <div class="row">
                    <div class="col-lg-2">
                        <img src="{{ asset("../mainweb/img/maskot/cewek maskot.png") }}" alt="Maskot Wanita" class="maskot" width="60%">
                    </div>
                    <div class="col-lg-8">
                        <p class="mb-0"><strong>MANIAC (Multimedia and Interactive Art Competition)</strong> merupakan lomba berbasis multimedia untuk siswa SMA/K sederjat yang mencakup <b>rally games, game concept design, dan game asset design.</b> MANIAC diselenggarakan oleh Program Studi Teknik Informatika program Multimedia Universitas Surabaya.</p>
                    </div>
                    <div class="col-lg-2">
                        <img src="{{ asset("../mainweb/img/maskot/cowok maskot.png") }}" alt="Maskot Pria" class="maskot" width="60%">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center my-5 fs-1 myTitle text-center" style="color: #A0583A">JOIN US NOW
            </div>
            <div class="d-flex justify-content-center">
                <div class="video">
                    <iframe width="500" height="350"
                        src="https://www.youtube.com/embed/GAwwDNwLEXE" allowfullscreen
                        class="embed-responsive-item">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
