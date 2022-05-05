<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('../mainweb/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../mainweb/css/navbar.css') }}">

    <link href="{{ asset('../mainweb/img/logo/logo.ico') }}" rel="shorcut icon">
    @yield('style')

    <title>
        MANIAC XI - @yield('title')
    </title>
</head>
<body>
    
    @include('layouts.navbar')

    @yield('content')

    {{-- Footer --}}
    <section id="footer">
        <img src="{{ asset('../mainweb/img/ornament/footer-img.png') }}" alt="Footer Image" class="footer-img">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                    <div class="row">
                        <div class="col-12 mt-3 fs-3">Social Media</div>
                        <div class="col-12">
                            <a href="https://www.instagram.com/maniac_ubaya/" target="_blank" class="myIcon"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCUVYlb7cc67RC17tNngSeug" target="_blank" class="myIcon"><i class="bi bi-youtube"></a></i>
                        </div>
                        <div class="col-12 mt-4 fs-3">Contact Person</div>
                        <div class="col-12">Meliyana : <a href="https://wa.me/082255940933" class="wa-num" target="_blank">082255940933</a></div>
                        <div class="col-12">Alfian Dwi : <a href="https://wa.me/087855956975" class="wa-num" target="_blank">087855956975</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12 mt-3 fs-3">Our Location</div>
                        <div class="col-12 mt-2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3026572731715!2d112.76588288843654!3d-7.319859838375454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fae3f29c4665%3A0x7536c23b4453a79!2sUniversity%20of%20Surabaya!5e0!3m2!1sen!2sid!4v1651761408678!5m2!1sen!2sid" width="80%" height="250"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5 fs-6">Developed by MANIAC XI Comitee</div>
                <div class="col-12 fs-6">Lapor bug & kendala web hubungi si.maniac10@gmail.com</div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>