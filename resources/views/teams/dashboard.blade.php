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
            <div>
                @if(session()->has("success"))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>{{ session()->get("success") }}</strong>
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               @endif
               @if(session()->has("error"))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <strong>{{ session()->get("error") }}</strong>
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               @endif
            </div>
            <form action={{ url('updateteam/'.$team->id) }} method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mt-2 justify-content-evenly">
                    @foreach ($team->teamDetail as $item)
                    <input type="hidden" name="{{ 'idAnggota'.$loop->index }}" value="{{ $item->id }}">
                    <div class="col-lg-4 mb-3 daftar-anggota">
                        <div class="row mb-3">
                            <a href="{{ asset('files/'.$item->image) }}" class="btn myBtn" target="_blank" style="width: 80%; margin: 0 auto;">Check Me</a>
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
                            <input type="file" class="myInputFile @error('imgAnggota'.$loop->index) is-invalid @enderror" accept="application/pdf,image/*" name="{{ 'imgAnggota'.$loop->index }}" id="imgAnggota2">
                           
                        </div>
                        @error('imgAnggota'.$loop->index)
                        <div class="invalid-feedback text-center">
                           {{ $message }}
                        </div>
                      @enderror
                        @endif
                    </div>
                    @endforeach
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 text-center d-flex flex-column justify-content-center align-items-center">
                        <h3>Status</h3>
                        @if ($team->status != 'accepted')
                        <h4 class="status ditolak" style="font-weight: 700; text-transform: uppercase;">{{ $team->status }}</h4>
                        <p class="keterangan">{{ $team->message }}</p>
                        <button type="submit" class="btn myBtn dark">Simpan Perubahan</button>
                        @else
                        <h4 class="status diterima" style="font-weight: 700; text-transform: uppercase;">{{ $team->status }}</h4>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection