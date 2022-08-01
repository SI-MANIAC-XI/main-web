@extends('layouts.admindashboard')
@section('title')
    Peserta Workshop
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
                        <li class="breadcrumb-item active" aria-current="page">Peserta Workshop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <h2 class="mb-0">Peserta Workshop</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nama Tim</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @for ($i = 0; $i < count($teamWorkshop1); $i++)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $teamWorkshop1[$i]->name }}</td>
                                    <td>{{ $teamWorkshop1[$i]->team_name }}</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection