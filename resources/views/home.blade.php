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
            <div class="d-flex justify-content-center my-5 fs-1" style="color: #A0583A">PRIZES</div>
            <div class="row px-2 mx-5">
              <div class="col py-5 px-5">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('../mainweb/img/bg-coklat.jpg') }}" alt="" class="rounded-circle" width="110" height="110">
                </div>
                <div class="d-flex justify-content-center my-2 fs-3" style="color: #ECEECA">Juara 1</div>
                <div class="d-flex justify-content-center my-2 fw-bolder fs-3" style="color: #FAE14D">Rp 5.000.000</div>
                <div class="text-center fs-6" style="color: #ECEECA">
                    Potongan USP sebesar 100% ( Jika masuk Jurusan Teknik Informatika Program Kekhususan Multimedia ) Piala MANIAC + Sertifikat
                </div>
              </div>
              <div class="col py-5 px-5">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('../mainweb/img/bg-coklat.jpg') }}" alt="" class="rounded-circle" width="110" height="110">
                </div>
                <div class="d-flex justify-content-center my-2 fs-3" style="color: #ECEECA">Juara 2</div>
                <div class="d-flex justify-content-center my-2 fw-bolder fs-3" style="color: #FAE14D">Rp 2.500.000</div>
                <div class="text-center fs-6" style="color: #ECEECA">
                    Potongan USP sebesar 100% ( Jika masuk Jurusan Teknik Informatika Program Kekhususan Multimedia ) Piala MANIAC + Sertifikat
                </div>
              </div>
              <div class="col py-5 px-5">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('../mainweb/img/bg-coklat.jpg') }}" alt="" class="rounded-circle" width="110" height="110">
                </div>
                <div class="d-flex justify-content-center my-2 fs-3" style="color: #ECEECA">Juara 3</div>
                <div class="d-flex justify-content-center my-2 fw-bolder fs-3" style="color: #FAE14D">Rp 1.000.000</div>
                <div class="text-center fs-6" style="color: #ECEECA">
                    Potongan USP sebesar 100% ( Jika masuk Jurusan Teknik Informatika Program Kekhususan Multimedia ) Piala MANIAC + Sertifikat
                </div>
              </div>
            </div>
        </div>

        <div class="container">
            <div class="d-flex justify-content-center my-5 fs-1" style="color: #A0583A">JOIN US NOW</div>
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