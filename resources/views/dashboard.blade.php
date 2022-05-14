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
                <h3>Selamat Datang, NAMA TIM</h3>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12 text-center mb-3">
                    <h3>Anggota</h3>
                </div>
            </div>
            <form action="">
                <div class="row mt-2 justify-content-evenly">
                    <div class="col-lg-4 mb-3 daftar-anggota">
                        <div class="row mb-3">
                            <img src="https://source.unsplash.com/800x400" alt="" width="100%">
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">Nama</div>
                            <div class="col-7">NAMA KETUA</div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">Nomor HP</div>
                            <div class="col-7">NO HP KETUA</div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">Email</div>
                            <div class="col-7">EMAIL KETUA</div>
                        </div>
                        <div class="row mt-3">
                            <label class="text-center label-ganti-kp">Ganti Kartu Pelajar</label>
                            <input type="file" class="myInputFile" accept="image/*" name="imgKetua" id="imgKetua">
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3 daftar-anggota">
                        <div class="row mb-3">
                            <img src="https://source.unsplash.com/800x401" alt="" width="100%">
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">Nama</div>
                            <div class="col-7">NAMA ANGGOTA 1</div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">Nomor HP</div>
                            <div class="col-7">NO HP ANGGOTA 1</div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">Email</div>
                            <div class="col-7">EMAIL ANGGOTA 1</div>
                        </div>
                        <div class="row mt-3">
                            <label class="text-center label-ganti-kp">Ganti Kartu Pelajar</label>
                            <input type="file" class="myInputFile" accept="image/*" name="imgAnggota1" id="imgAnggota1">
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3 daftar-anggota">
                        <div class="row mb-3">
                            <img src="https://source.unsplash.com/800x402" alt="" width="100%">
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">Nama</div>
                            <div class="col-7">NAMA ANGGOTA 2</div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">Nomor HP</div>
                            <div class="col-7">NO HP ANGGOTA 2</div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">Email</div>
                            <div class="col-7">EMAIL ANGGOTA 2</div>
                        </div>
                        <div class="row mt-3">
                            <label class="text-center label-ganti-kp">Ganti Kartu Pelajar</label>
                            <input type="file" class="myInputFile" accept="image/*" name="imgAnggota2" id="imgAnggota2">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 text-center d-flex flex-column justify-content-center align-items-center">
                        <h3>Status</h3>
                        <h4 class="status ditolak" style="font-weight: 700">DITOLAK</h4>
                        <p class="keterangan">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, numquam!</p>
                        <button type="submit" class="btn myBtn">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection