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
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.unsplash.com/photo-1586227740560-8cf2732c1531?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=961&q=80"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1651693029270-bf3c29ad0b20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1648737966150-0ca228eedfa0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1530099486328-e021101a494a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=947&q=80"
                                class="d-block w-100" alt="...">
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
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim cum illum
                    voluptas fuga repellat et
                    ipsa sint, voluptates deserunt obcaecati iure beatae fugiat cupiditate nisi provident vel ea
                    aut?
                    Reprehenderit dolore tempora sint incidunt, aspernatur accusantium libero quidem ex excepturi
                    inventore aliquid amet, animi porro consequuntur repellendus ipsam facere a?</p>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center my-5 fs-1 myTitle text-center" style="color: #A0583A">JOIN US NOW
            </div>
            <div class="d-flex justify-content-center">
                <div class="video">
                    <iframe width="500" height="350"
                        src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1" allowfullscreen
                        class="embed-responsive-item">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
