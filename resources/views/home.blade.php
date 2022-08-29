@extends('layouts.mainweb')

@section('title')
    Home
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('../mainweb/css/timeline.css') }}">
@endsection

@section('content')
<section id="header" style="margin-top: 70px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="about-text">
                <div class="col-lg-10 mx-auto" id="header-text "style="text-align: center;">
                    <img src="{{ asset('../mainweb/img/logo/logo-maniac-xi-2.png') }}" alt="" width="80%">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="d-flex justify-content-center mt-4 hadiah text-center">WIN UP TO <br>IDR 100+ MILLION </div>
                
                @php
                    date_default_timezone_set("Asia/Jakarta");
                    $endDate = "1 September 2022";
                    $endDateTimestamp = strtotime($endDate);  
                @endphp
                @if (time() < $endDateTimestamp)
                    @if (!auth()->check())
                    <a href="{{ url('/register') }}" class="btn custom-btn custom-btn-bg">REGISTER NOW</a> 
                    @endif
                @endif
            </div>
        </div>
    </div>
</section>


<section id="poster" class="mt-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-8">
                <a href="{{ asset('mainweb/img/poster/poster.png') }}" target="blank"><img src="{{ asset('mainweb/img/poster/poster-scroll.png') }}" alt="Scroll" width="100%; height:100%; object-fit: contain;"></a>
            </div>
        </div>
    </div>
</section>

<section class="resume pt-5 d-lg-flex justify-content-center align-items-center" id="resume">
	<div class="container container-timeline">
		<h2 class="d-flex justify-content-center my-5 fs-1 mb-4 myTitle">TIMELINE</h2>
        <div class="row timeline-big justify-content-center mb-5">
            <div class="col-xl-10 col-lg-12">
                <img src="{{ asset('mainweb/img/poster/Timeline.png') }}" alt="Timeline" width="100%">
            </div>
        </div>
		<div class="row row-content timeline-small mb-5">
			<div class="col-lg-12 col-md-12 col-sm-12 d-flex">
                <div class="row">
                    <div class="timeline col-lg-12 col-md-12 col-sm-12">
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>MEI</span>
                            </div>
                            <div style="display: flex; flex-direction:column;">
                                <div class="timeline-info">                         
                                    <br><small>23 Mei 2022</small>
                                    <h4><span>Open Registration</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>AGT</span>
                            </div>
                            <div style="display: flex; flex-direction:column;">
                                <div class="timeline-info">
                                    <br><small>22 Agustus 2022</small>
                                    <h4><span>Registration Closed</span></h4>
                                </div>                  
                                <div class="timeline-info">
                                    <br><small>27 Agustus 2022</small>
                                    <h4><span>Workshop 1</h4>
                                </div> 
                                <div class="timeline-info">
                                    <br><small>28 Agustus 2022</small>
                                    <h4><span>Workshop 2</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>SEP</span>
                            </div>
                            <div style="display: flex; flex-direction:column;">
                                <div class="timeline-info">
                                    <Br><small>3 September 2022</small>
                                    <h4><span>Technical Meeting Penyisihan</span></h4>
                                </div>
                                <div class="timeline-info">
                                    <br><small>4 September 2022</small>
                                    <h4><span>Penyisihan</span></h4>
                                </div>
                                <div class="timeline-info">
                                    <br><small>5 - 9 September 2022</small>
                                    <h4><span>Pengerjaan Final</span></h4>
                                </div>
                                <div class="timeline-info">
                                    <br><small>10 September 2022</small>
                                    <h4><span>Submission & TM Final</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>END</span>
                            </div>
                            <div style="display: flex; flex-direction: column;">
                                <div class="timeline-info">
                                    <small>11 September 2022</small>
                                    <h4><span>Final</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-sm-12 d-flex mt-3">
                       
                        <a href="{{ asset('mainweb/img/poster/poster.png') }}" target="blank"><img style="width:100%; height:100%; object-fit: contain;" src="{{asset('../mainweb/img/poster/poster.png')}}" alt="poster"></a>
                    </div> --}}
                </div>
			</div>
		</div>
	</div>
</section>

<!-- end timeline -->


<div class="container mt-4 px-5">
    <div class="d-flex justify-content-center my-5 fs-1 myTitle" style="color: #A0583A">PRIZES</div>
    <div class="prize-container">
        <div class="row px-2 mx-4 justify-content-between">
            <div class="col-md-4 mt-5 py-3 px-3 prize1">
            <div class="d-flex justify-content-center">
                <span class="dot">
                    <img class= "crown" src="{{ asset('../mainweb/img/icon/Mahkota_1.png') }}" alt="Juara 1" width="100">
                </span>
            </div>
            <div class="d-flex justify-content-center fs-3" style="color: #FFFFFF"><b>Juara 1</b></div>
            <div class="d-flex justify-content-center fw-bolder fs-3 neon">Rp 5.000.000</div>
            <div class="text-center fs-5" style="color: #ECEECA">
                Potongan USP sebesar 100%*
            </div>
            </div>

            <div class="col-md-4 mt-5 py-3 px-3 prize1">
                <div class="d-flex justify-content-center">
                    <span class="dot">
                        <img class= "crown" src="{{ asset('../mainweb/img/icon/Mahkota_2.png') }}" alt="Juara 2" width="100">
                    </span>
                </div>
                <div class="d-flex justify-content-center fs-3" style="color: #FFFFFF"><b>Juara 2</b></div>
                <div class="d-flex justify-content-center fw-bolder fs-3 neon">Rp 3.000.000</div>
                <div class="text-center fs-5" style="color: #ECEECA">
                    Potongan USP sebesar 50%*
                </div>
            </div>

            <div class="col-md-4 mt-5 py-3 px-3 prize1">
                <div class="d-flex justify-content-center">
                    <span class="dot">
                        <img class= "crown" src="{{ asset('../mainweb/img/icon/Mahkota_3.png') }}" alt="Juara 3" width="100">
                    </span>
                </div>
                <div class="d-flex justify-content-center fs-3" style="color: #FFFFFF"><b>Juara 3</b></div>
                <div class="d-flex justify-content-center fw-bolder fs-3 neon">Rp 1.000.000</div>
                <div class="text-center fs-5" style="color: #ECEECA">
                    Potongan USP sebesar 25%*
                </div>
            </div>

            {{-- keterangan tambahan --}}
            <div>
                <div>
                <p class="my-3 fs-6">
                    *) Setiap pemenang akan mendapatkan <strong>Piala + Sertifikat</strong>
                </p>
            </div>

            <div class="mb-3 pt-3 px-4 d-flex justify-content-center fs-5 prize1" style="color: #FFFFFF">
                <p>
                    <strong>*) USP berlaku jika </strong> masuk Jurusan Teknik Informatika <strong>Program Multimedia Universitas Surabaya</strong>
                </p>
            </div>

            <div>
                <p class="mb-5 fs-6">
                    <strong>1 Tim terdiri atas 3 orang dari SMA/SMK yang sama</strong>
                </p>
            </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center my-5 fs-1 myTitle text-center" style="color: #A0583A">JOIN US NOW</div>
        <div class="d-flex justify-content-center">
            <div class="video">
                <iframe width="500" height="350" src="https://www.youtube.com/embed/vjEuxzl2jzg" allowfullscreen class="embed-responsive-item">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    
@endsection