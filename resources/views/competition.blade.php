@extends('layouts.mainweb')

@section('title')
    Competition
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/competition.css') }}">
@endsection

@section('content')
    <div class="container mt-5">
        <h2 class="d-flex justify-content-center my-5 fs-1 mb-4 myTitle">COMPETITIONS</h2>
        <div class="d-flex flex-column">
            <div class="compe-container text-center">
                <h5 class="card-title mb-0 fs-4">RALLY GAMES</h5>
                <div class="card-body mb-5">
                    <p>Rally Games terdiri dari dua jenis pos, yaitu pos single dan battle. Pada pos single, setiap tim harus bisa bekerja sama dan berpikir untuk menyelesaikan permainan yang ada. Pada pos battle, setiap tim harus bisa membangun strategi dan kompak dalam berkompetisi dengan tim lain. Terdapat pula pos bonus bernama pos Dungeon. Pada pos ini, setiap tim peserta akan menjawab pertanyaan secara teori mengenai game dan multimedia dasar, serta pertanyaan logika.</p>
                </div>
            </div>
            <div class="compe-container text-center mb-5">
                <h5 class="card-title mb-0 fs-4">FINAL</h5>
                <div class="card-body">
                    <p>Topik yang akan dilombakan pada babak final adalah Game Concept Design dan Game Asset Design. <br><br>
                        Game Concept Design adalah cabang lomba untuk membuat sebuah konsep cerita atau alur dalam sebuah game. Peserta diharapkan dapat membuat konsep game yang dapat menjadi solusi dari kasus yang akan ditentukan nantinya. <br><br>
                        Game Asset Desain adalah cabang lomba untuk mendesain asset-asset yang dibutuhkan dalam game tersebut. Peserta diharapkan dapat membuat konsep game yang menarik dan kreatif sesuai dengan tema yang ditentukan. <br><br>
                        Setiap tim akan mempresentasikan hasil kerjanya pada babak Final. Peserta harus bisa memberikan penjelasan mengenai konsep game beserta assetnya</p>
                </div>
            </div>
        </div>
        <div class="container-competition">

        </div>

        <h2 class="d-flex justify-content-center my-5 fs-1 mb-4 myTitle">GUIDE BOOK</h2>
        <div class="d-flex justify-content-center">
            <a href="{{ asset('../mainweb/guidebook/guidebook_updated.pdf') }}" target="_blank" class="btn btn-download fs-4 rounded-pill"><strong>DOWNLOAD</strong></a>
        </div>
    </div>
@endsection
