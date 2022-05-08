@extends('layouts.mainweb')

@section('title')
    Competition
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/competition.css') }}">
@endsection

@section('content')
    <div class="container mt-5">
        <h2 class="d-flex justify-content-center my-5 fs-1 mb-4 myTitle">COMPETITIONS</h2>
        <div class="d-flex flex-column">
            <div class="compe-container text-center">
                <h5 class="card-title mb-0 fs-4">RALLY GAMES</h5>
                <div class="card-body mb-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, saepe ducimus architecto commodi eveniet, ratione asperiores nobis consequuntur nostrum quo exercitationem veniam! Totam deserunt enim quia aliquid consectetur! Assumenda, necessitatibus? Autem consectetur illo odit voluptates sunt, explicabo sapiente expedita! Voluptate soluta enim, sapiente neque odit voluptatibus ullam, aliquam doloribus illum eveniet eius porro, corporis deleniti possimus eligendi sequi voluptatem blanditiis totam rem dignissimos distinctio maiores illo. Officiis reiciendis velit excepturi pariatur nemo debitis dolorum magni?</p>
                </div>
            </div>
            <div class="compe-container text-center mb-5">
                <h5 class="card-title mb-0 fs-4">FINAL</h5>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae qui obcaecati aperiam totam ipsam est, debitis praesentium beatae distinctio sequi minus, perspiciatis adipisci quidem cupiditate facere voluptatem. Et, alias debitis illo est eligendi perferendis placeat magnam commodi, expedita a suscipit adipisci cupiditate cum saepe incidunt, quisquam fugit culpa voluptates repellat accusamus! Laboriosam et, porro quasi doloremque necessitatibus neque excepturi pariatur at consequuntur, fuga placeat corporis, enim laudantium impedit dolore voluptatibus nulla sapiente perspiciatis a atque!</p>
                </div>
            </div>
        </div>
        <div class="container-competition">

        </div>

        <h2 class="d-flex justify-content-center my-5 fs-1 mb-4 myTitle">GUIDE BOOK</h2>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-download fs-4 rounded-pill"><strong>DOWNLOAD</strong></a>
        </div>
    </div>
@endsection
