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
                <div class="col-12">Developed by MANIAC XI Comitee</div>
                <div class="col-12 mt-3">Social Media</div>
                <div class="col-12 mt-2">
                    <a href="https://www.instagram.com/maniac_ubaya/" target="_blank" class="myIcon"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCUVYlb7cc67RC17tNngSeug" target="_blank" class="myIcon"><i class="bi bi-youtube"></a></i>
                </div>
                <div class="col-12 mt-3">Lapor bug & kendala web hubungi si.maniac10@gmail.com</div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>