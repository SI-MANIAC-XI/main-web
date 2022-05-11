@extends('layouts.admindashboard')
@section('title')
    Welcome
@endsection
@section('header')
    <div class="header-body">
        <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 d-inline-block mb-0">Admin</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Welcome</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!-- START card -->
            <div class="card bg-gradient-danger text-white">
                <div class="card-header">
                    <div class="card-title">
                        <h1>Welcome to Admin Dashboard Maniac XI</h1>
                    </div>
                    {{-- <div class="clearfix"></div> --}}
                </div>
                <div class="card-body">
                    <p>
                       Selamat Datang di Admin Dashboard Maniac XI. Untuk validasi data dan pemrosesan data dapat anda
                        lakukan dengan memilih menu pada bagian kiri.<br /> Selamat Bertugas .Terima Kasih.
                     </p>
                </div>
            </div>
            <!-- END card -->
        </div>
    </div>
@endsection
