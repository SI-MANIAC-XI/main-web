@extends('layouts.mainweb')

@section('title')
    Dashboard
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('../mainweb/css/dashboard.css') }}">
@endsection

@section('content')

    <section id="dashboard" style="width: 90%; margin: 0 auto;">
        <div class="container dashboard-container">
            <div class="row">
                <h3>Selamat Datang, Tim {{ $team->team_name }}</h3>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12 text-center mb-3">
                    <h3>Anggota</h3>
                </div>
            </div>
            <form action={{ url('updateteam/'.$team->id) }} method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mt-2 justify-content-evenly">
                    @foreach ($team->teamDetail as $item)
                    <input type="hidden" name="{{ 'idAnggota'.$loop->index }}" value="{{ $item->id }}">
                    <div class="col-lg-4 mb-3 daftar-anggota">
                        <div class="row mb-3">
                            <a href="{{ asset('files/'.$item->image) }}">Check Me</a>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-5">Nama</div>
                            <div class="col-7">{{ $item->name }}</div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-5">No HP</div>
                            <div class="col-7">{{ $item->phone_number }}</div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-5">Email</div>
                            <div class="col-7">{{ $item->email }}</div>
                        </div>
                        @if ($team->status != 'accepted')
                        <div class="row mt-3">
                            <label class="text-center label-ganti-kp">Ganti Kartu Pelajar</label>
                            <input type="file" class="myInputFile" accept="file_extension|image/*" name="{{ 'imgAnggota'.$loop->index }}" id="imgAnggota2">
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 text-center d-flex flex-column justify-content-center align-items-center">
                        <h3>Status</h3>
                        <h4 class="status ditolak" style="font-weight: 700; text-transform: uppercase;">{{ $team->status }}</h4>
                        <p class="keterangan">{{ $team->message }}</p>
                        @if ($team->status != 'accepted')
                        <button type="submit" class="btn myBtn">Simpan Perubahan</button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection