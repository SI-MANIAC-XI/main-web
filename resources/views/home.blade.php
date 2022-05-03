@extends('layouts.mainweb')

@section('title')
    Home
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('../mainweb/css/timeline.css') }}">
@endsection

@section('content')

<section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">

	<div class="container-timeline">
		<h2 class="d-flex justify-content-center my-5 fs-1  mb-4 timeline-text">TIMELINE</h2>

		<div class="row-content">

			<div class="col-lg-6 col-md-6 col-12 d-flex">

				<div class="timeline">

				
					<div class="timeline-wrapper">

						 <div class="timeline-yr">

							  <span>MEI</span>

						 </div>

						 <div class="timeline-info">
                             
                          <br>  <small>20 Mei 2022</small>
							  <h4><span>Open Registration</span></h4>

						 </div>

					</div>



					<div class="timeline-wrapper">

						<div class="timeline-yr">

							<span>AGT</span>

						</div>

						<div class="timeline-info">

                            <br><small>22 Agustus 2022</small>

							<h4><span>Registration Closed</span></h4>


						</div>

                        
						<div class="timeline-info">

                           <br> <small>27 Agustus 2022</small>

							<h4><span>Workshop 1</h4>


						</div>

                        
						<div class="timeline-info">

                          <br>  <small>28 Agustus 2022</small>

							<h4><span>Workshop 2</span></h4>


						</div>

					</div>



					<div class="timeline-wrapper">

						<div class="timeline-yr">

							<span>SEP</span>

						</div>

						<div class="timeline-info">
                            <Br><small>3 September 2022</small>
							<h3><span>Technical Meeting Penyisihan</span></h3>

							

						</div>

					</div>

					

					<div class="timeline-wrapper">

						<div class="timeline-info">
                        <br><small>4 September 2022</small>
							<h3><span>Penyisihan</span></h3>


						</div>

					</div>



					<div class="timeline-wrapper">

						<div class="timeline-info">

							<small>5 - 9 September 2022</small>
							<h3><span>Pengerjaan Final</span></h3>


						</div>

					</div>



					<div class="timeline-wrapper">

						<div class="timeline-info">

                            <small>10 September 2022</small>

							<h3><span>Submission & TM Final</span></h3>

							
						</div>

					</div>

                 



					<div class="timeline-wrapper">

						<div class="timeline-yr">

							<span>END</span>

						</div>

						<div class="timeline-info">

                            <small>11 September 2022</small>
							<h3><span>Final</span></h3>

						

						</div>

					</div>

					

				</div>

			</div>

			<div class="col-lg-6 col-md-6 col-12 d-flex">

				<a href="mainweb/images/foto/poster.jpg" target="blank"><img style="width:100%; height:100%; object-fit: contain;" src="{{asset('mainweb/images/foto/poster.jpg')}}" alt="poster"></a>

			</div>



		</div>

	</div>

</section>

<!-- end timeline -->


    <div class="container mt-5">
        <div class="d-flex justify-content-center my-5 fs-1 myTitle" style="color: #A0583A">PRIZES</div>
        <div class="prize-container">
            <div class="row px-2 mx-5">
              <div class="col py-5 px-3">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('../mainweb/img/bg-coklat.jpg') }}" alt="" class="rounded-circle" width="110" height="110">
                </div>
                <div class="d-flex justify-content-center my-2 fs-3" style="color: #ECEECA">Juara 1</div>
                <div class="d-flex justify-content-center my-2 fw-bolder fs-3" style="color: #FAE14D">Rp 5.000.000</div>
                <div class="text-center fs-6" style="color: #ECEECA">
                    Potongan USP sebesar 100% ( Jika masuk Jurusan Teknik Informatika Program Kekhususan Multimedia ) Piala MANIAC + Sertifikat
                </div>
              </div>
              <div class="col py-5 px-3">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('../mainweb/img/bg-coklat.jpg') }}" alt="" class="rounded-circle" width="110" height="110">
                </div>
                <div class="d-flex justify-content-center my-2 fs-3" style="color: #ECEECA">Juara 2</div>
                <div class="d-flex justify-content-center my-2 fw-bolder fs-3" style="color: #FAE14D">Rp 2.500.000</div>
                <div class="text-center fs-6" style="color: #ECEECA">
                    Potongan USP sebesar 100% ( Jika masuk Jurusan Teknik Informatika Program Kekhususan Multimedia ) Piala MANIAC + Sertifikat
                </div>
              </div>
              <div class="col py-5 px-3">
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
            <div class="d-flex justify-content-center my-5 fs-1 myTitle text-center" style="color: #A0583A">JOIN US NOW</div>
            <div class="d-flex justify-content-center">
                <div class="video">
                    <iframe width="500" height="350" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1" allowfullscreen class="embed-responsive-item">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection