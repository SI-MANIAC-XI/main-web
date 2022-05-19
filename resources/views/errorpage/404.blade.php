@extends('layouts.mainweb')

@section('title')
    Not Found
@endsection

@section('content')
    <section id="not-foud" style="margin: 100px 0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="text404 d-flex flex-column align-items-center">
                        <h1>404</h1>
                        <p>Oops! Halaman Tidak Ditemukan</p>
                        <a href="{{ url('/') }}" class="btn myBtn text-center" style="width: 250px; max-width: 90%;">Kembali ke Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
