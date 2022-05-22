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
        <p>
            <strong>MANIAC (Multimedia and Interactive Art Competition)</strong> adalah lomba berbasis multimedia untuk anak SMA/K sederajat yang mencakup <i>rally games, game concept design</i>, dan <i>game asset design</i>, yang diselenggarakan oleh jurusan Teknik Informatika Program Multimedia Universitas Surabaya
        </p>
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <p style="margin-bottom: 0;">Apakah MANIAC XI akan diadakan secara&nbsp <i>offline</i> atau <i>online</i>?</p>
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            <ul>
                <li><i>Online</i> melalui Zoom untuk <i>technical meeting</i> dan babak penyisihan</li>
                <li><i>Offline</i> di Universitas Surabaya untuk babak final</li>
            </ul>
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
                <li><i>Technical Meeting</i> Babak Penyisihan</li>
                <li>Babak Penyisihan</li>
                <li>Babak Final</li>
                <li>Pengerjaan dan <i>Submission</i> Final</li>
                <li><i>Technical Meeting</i> Babak Final</li>
                <li>Babak Final</li>
            </ul>
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Apakah MANIAC XI bersifat akademis (seperti mengerjakan soal-soal pelajaran)?
        </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Tidak, MANIAC XI berfokus pada bidang multimedia. Bidang akademis hanya akan diuji di beberapa pos pada rally games.
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Apakah bidang lomba yang diujikan hanya tentang Multimedia?
        </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            MANIAC hanya berfokus pada 2 bidang Multimedia, yaitu <i>game concept design</i> dan <i>asset design</i>
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            Apakah akan ada pelatihan sebelum pelaksanaan acara?
        </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Ya, akan ada Workshop:
            <ul>
                <li>Workshop <i>Game Concept Design</i> pada tanggal 27 Agustus 2022</li>
                <li>Workshop <i>Game Asset Design</i> pada tanggal 28 Agustus 2022</li>
            </ul>
        </div>
        </div>
    </div>
    <br><div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            Software apa yang digunakan selama lomba?
        </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Untuk pengerjaan final, software yang digunakan adalah bebas
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading8">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
            Bagaimana cara mendaftar menjadi peserta MANIAC XI?
        </button>
        </h2>
        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Pendaftaran dilakukan secara online dengan mengisi form pendaftaran yang tersedia di website <a href="https://maniac.ifubaya.id">maniac.ifubaya.id</a>
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading9">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
            Bagaimana timeline lomba MANIAC XI?
        </button>
        </h2>
        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            <ul>
                <li>Workshop Game Concept Design (27 Agustus 2022)</li>
                <li>Workshop Game Asset Design (28 Agustus 2022)</li>
                <li>Technical Meeting Babak Penyisihan (3 September 2022)</li>
                <li>Babak Penyisihan (4 September 2022)</li>
                <li>Technical Meeting Babak Final (10 September 2022)</li>
                <li>Babak Final (11 September 2022)</li>
            </ul>
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading10">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
            Apakah workshop diwajibkan bagi semua peserta lomba MANIAC XI?
        </button>
        </h2>
        <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Tidak diwajibkan, workshop terbuka secara berbayar untuk umum dan terbuka secara gratis bagi peserta
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading11">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
            Berapakah biaya pendaftaran untuk MANIAC XI?
        </button>
        </h2>
        <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            <ul>
                <li>Pendaftaran untuk mengikuti lomba tidak dikenakan biaya (GRATIS)</li>
                <li>Pendaftaran workshop untuk peserta tidak dikenakan biaya (GRATIS)</li>
                <li>Pendaftaran workshop untuk umum dikenakan biaya sebesar 10K</li>
            </ul>
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading12">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
            Apakah terdapat batasan jumlah tim yang mendaftar (dari tiap sekolah)?
        </button>
        </h2>
        <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Tidak ada
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading13">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
            Berapa jumlah orang dalam satu tim ?
        </button>
        </h2>
        <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            3 orang dari sekolah yang sama
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading14">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
            Dimana saya dapat memperoleh informasi terkait MANIAC XI?
        </button>
        </h2>
        <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            <ul>
                <li>Website: maniac.ifubaya.id</li>
                <li>IG: maniac_ubaya</li>
                <li>OA Line: @994nxsfr</li>
                <li>Email: maniac.ubayaa@gmail.com</li>
                <li>CP: Meliyana (WA: 082255940933), Alfian (WA: 087855956975)</li>
            </ul>
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading15">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
            Dimana saya dapat melihat kisi-kisi perlombaan?
        </button>
        </h2>
        <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Semua informasi mengenai lomba akan diinfokan melalui Instagram MANIAC XI
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading16">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
            <p style="margin-bottom: 0;">Apakah wajib mengikuti <i>Technical Meeting</i>?</p>
        </button>
        </h2>
        <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Setiap tim wajib mengirimkan salah satu perwakilan tim.
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading17">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
            Batas pendaftaran MANIAC XI hingga kapan?
        </button>
        </h2>
        <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            23 Mei - 22 Agustus 2022 
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading18">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
            Apa saja yang dilombakan pada babak utama penyisihan dan final?
        </button>
        </h2>
        <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            <ul>
                <li>Penyisihan: <i>Rally games</i> dan Game Besar </li>
                <li>Final: <i>Game concept design</i> dan <i>Game asset design</i></li>
            </ul>
            Selengkapnya dapat dilihat <a href="https://maniac.ifubaya.id/competition">di sini</a>
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading19">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
            Apakah kelas 12 boleh mengikuti MANIAC XI?
        </button>
        </h2>
        <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Untuk kelas 12 angkatan lulus Tahun Ajaran 2021/2022 tidak diperbolehkan, sedangkan untuk angkatan yang naik ke kelas 12  pada Tahun Ajaran 2022/2023 diperbolehkan, asalkan mendapat izin dari sekolah dan memiliki bukti status kesiswaan.
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading20">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
            Apakah diperbolehkan jika teman satu berbeda angkatan?
        </button>
        </h2>
        <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Diperbolehkan, dengan syarat tetap berada di jenjang yang sama (SMA/K sederajat), dan untuk kelas 12 mengikuti ketentuan pada pertanyaan sebelumnya.
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading21">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
            Apakah ada keringanan apabila terdapat gangguan koneksi?
        </button>
        </h2>
        <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Tidak ada, risiko ditanggung peserta masing-masing
        </div>
        </div>
    </div>
    <br>
    <div class="accordion-item faq-radialGradient">
        <h2 class="accordion-header" id="heading22">
        <button class="accordion-button collapsed color-title-faq faq-radialGradient-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
            Apakah diperbolehkan jika ingin menggantikan rekan satu tim jika mendadak tidak bisa mengikuti MANIAC XI?
        </button>
        </h2>
        <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22" data-bs-parent="#accordionExample">
        <div class="accordion-body color-inside-faq faq-radialGradient-inside">
            Diperbolehkan, namun ada batasan waktu, yaitu 2 minggu sebelum diadakannya <i>Technical Meeting</i> Babak Penyisihan
        </div>
        </div>
    </div>
    <br>
    </div>
    </div>
@endsection