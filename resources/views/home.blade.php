@extends('layouts.mainweb')

@section('title')
    Home
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/home.css') }}">
@endsection

@section('content')
    <div class="container mt-5">
        <div class="container">
            <div class="d-flex justify-content-center my-5 fs-1">PRIZES</div>
            <div class="row px-2 mx-5">
              <div class="col py-5 px-5">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('../mainweb/img/bg-coklat.jpg') }}" alt="" class="rounded-circle" width="110" height="110">
                </div>
                <div class="d-flex justify-content-center my-2 text-light fs-3">Juara 1</div>
                <div class="d-flex justify-content-center my-2 text-warning fw-bolder fs-3">Rp 5.000.000</div>
                <div class="text-center text-white fs-6">
                    Potongan USP sebesar 100% ( Jika masuk Jurusan Teknik Informatika Program Kekhususan Multimedia ) Piala MANIAC + Sertifikat
                </div>
              </div>
              <div class="col py-5 px-5">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('../mainweb/img/bg-coklat.jpg') }}" alt="" class="rounded-circle" width="110" height="110">
                </div>
                <div class="d-flex justify-content-center my-2 text-light fs-3">Juara 2</div>
                <div class="d-flex justify-content-center my-2 text-warning fw-bolder fs-3">Rp 2.500.000</div>
                <div class="text-center text-white fs-6">
                    Potongan USP sebesar 100% ( Jika masuk Jurusan Teknik Informatika Program Kekhususan Multimedia ) Piala MANIAC + Sertifikat
                </div>
              </div>
              <div class="col py-5 px-5">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('../mainweb/img/bg-coklat.jpg') }}" alt="" class="rounded-circle" width="110" height="110">
                </div>
                <div class="d-flex justify-content-center my-2 text-light fs-3">Juara 3</div>
                <div class="d-flex justify-content-center my-2 text-warning fw-bolder fs-3">Rp 1.000.000</div>
                <div class="text-center text-white fs-6">
                    Potongan USP sebesar 100% ( Jika masuk Jurusan Teknik Informatika Program Kekhususan Multimedia ) Piala MANIAC + Sertifikat
                </div>
              </div>
            </div>
        </div>

        <div class="container">
            <div class="d-flex justify-content-center my-5 fs-1">JOIN US NOW</div>
            <div class="d-flex justify-content-center">
                <div class="video">
                    <iframe width="500" height="350" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection