@extends('layouts.mainweb')

@section('title')
    Forbidden
@endsection

@section('content')
    <section id="not-foud" style="margin: 100px 0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="text404 d-flex flex-column align-items-center">
                        <h1>403</h1>
                        <p>Oops! Anda tidak memiliki akses ke halaman ini</p>
                        <a href="{{ url('/') }}" class="btn myBtn text-center" style="width: 250px; max-width: 90%;">Kembali ke Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
