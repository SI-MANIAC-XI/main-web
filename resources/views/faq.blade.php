@extends('layouts.mainweb')

@section('title')
    FAQ
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/faq.css') }}">
@endsection

@section('content')
    <h2 class="d-flex justify-content-center my-5 fs-1 mb-4 myTitle text-align-center padding-title">FREQUENTLY ASKED QUESTIONS</h2>
    <div class="container mt-5">
    <div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Apa itu MANIAC XI? 
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
        <strong>MANIAC (Multimedia and Interactive Art Competition)</strong> merupakan lomba berbasis multimedia untuk siswa SMA/K sederjat yang mencakup rally, game concept design, dan game asset design. MANIAC diselenggarakan oleh Program Studi Informatika program Multimedia Universitas Surabaya.
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <p style="margin-bottom: 0;">Apakah MANIAC XI akan diadakan secara&nbsp <i>offline</i>&nbsp atau&nbsp <i>online</i>?</p>
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Untuk MANIAC XI akan diadakan secara <i>hybrid</i> yang dimana sesi babak Penyisihan akan diadakan secara <i>online</i> dan sesi Final akan diadakan secara <i>offline</i>.
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Apa saja tahap dalam MANIAC XI?
        </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            <ul>
                <li>Babak Penyisihan</li>
                <li>Babak Final</li>
            </ul>
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Apakah akan ada pelatihan sebelum pelaksanaan acara?
        </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Ya, akan ada Workshop Game Assets pada 27 Agustus 2022
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Bagaimana cara mendaftar menjadi peserta MANIAC XI?
        </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Calon peserta dapat mengunjungi website maniacubaya.com atau menghubungi contact person yang tertera pada poster atau website. Kemudian membuat jadwal untuk dapat mendaftar secara <i>offline</i> di Universitas Surabaya.
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            Bagaimana timeline lomba MANIAC XI?
        </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            <ul>
                <li>3 September 2022 = Technical Meeting Babak Penyisihanli</li>
                <li>4 September 2022 = Babak Penyisihan</li>
                <li>10 September 2022 = Technical Meeting Babak Final</li>
                <li>11 September 2022 = Babak Final</li>
            </ul>
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            Berapakah biaya pendaftaran untuk MANIAC XI?
        </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Untuk MANIAC XI saat ini bebas biaya pendaftaran.
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingEight">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            Dimana saya dapat memperoleh informasi terkait MANIAC XI?
        </button>
        </h2>
        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            <ul>
                <li>Website: maniac.ifubaya.id</li>
                <li>IG: maniac_ubaya</li>
                <li>OA Line: @994nxsfr</li>
                <li>Email: maniac.ubayaa@gmail.com</li>
            </ul>
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingNine">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
            Apakah diperbolehkan jika terdapat salah satu partner yang berbeda angkatan?
        </button>
        </h2>
        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Diperbolehkan, dengan syarat tetap berada pada di jenjang yang sama (SMA/K sederajat)
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingTen">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
            Apakah diperbolehkan jika ingin menggantikan rekan satu tim jika mendadak tidak bisa mengikuti MANIAC XI?
        </button>
        </h2>
        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Diperbolehkan jika ingin mengganti salah satu rekan harap menginformasikan Panitia maksimal 2 minggu sebelum <i>Technical Meeting</i> MANIAC XI
        </div>
        </div>
    </div>
    <br>
    </div>
    </div>
@endsection