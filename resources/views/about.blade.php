@extends('layouts.mainweb')

@section('title')
    About Us
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/about.css') }}">
@endsection

@section('content')
    <div class="container mt-5">
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