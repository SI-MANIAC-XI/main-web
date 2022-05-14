@extends('layouts.mainweb')

@section('title')
    Register
@endsection

@section('content')
    <section id="register" style="margin: 80px 0 100px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-11">
                    <h2 class="fs-1 myTitle">REGISTRATION</h2>
                    <div class="d-flex justify-content-center">
                        <button class="btn myBtn" style="width: 400px; max-width: 90%;" data-bs-toggle="modal" data-bs-target="#modalPendaftaran">Catatan Pendaftaran</button>
                    </div>
                    <form method="POST" action="{{ url('/register') }}" class="mt-5" enctype="multipart/form-data">
                        @csrf
                        <div class="data-tim">
                            <h5 class="text-center" style="font-weight: 600;">Data Tim</h5>
                            <Label class="myLabel">Nama Tim</Label>
                                <input type="text" name="team_name" id="txtNamaTim" class="myTextbox width-90" placeholder="Nama Tim" required>
                            <label class="myLabel">Nama Sekolah</label>
                                <input type="text" name="school_name" id="txtNamaSekolah" class="myTextbox width-90" placeholder="Nama Sekolah" required>
                            <label class="myLabel">Alamat Lengkap Sekolah</label>
                                <textarea name="school_address" id="school_address" cols="30" rows="10" class="myTextbox width-90" placeholder="cth. Jalan Raya Kalirungkut, Surabaya 60293" style="padding-top: 5px; padding-bottom: 5px; height: 80px; min-height: 40px;" required></textarea>
                            <label class="myLabel">Username</label>
                                <input type="text" name="username" id="txtUsername" class="myTextbox width-90" placeholder="Username" required>
                            <label class="myLabel">Password</label>
                                <input type="password" name="password" id="txtPassword" class="myTextbox width-90" placeholder="Password" required>
                                <div class="d-flex align-items-center" style="margin-left: 5%; position: relative;">
                                    <input type="checkbox" class="myChkbox mx-2" onclick="showPassword()"> 
                                    <span class="checkmark"></span>
                                    <span class="chkText">Show Password</span>
                                </div>
                        </div>
                        
                        <div class="data-anggota ketua">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Ketua Tim</h5>
                            <label class="myLabel">Nama Ketua Tim</label>
                                <input type="text" name="name" id="txtNamaKetua" class="myTextbox width-90" placeholder="Nama Ketua Tim" required>
                            <label class="myLabel">Nomor HP</label>
                                <input type="text" name="phone_number" id="txtNoHpKetua" class="myTextbox width-90" placeholder="Nomor HP" required>
                            <label class="myLabel">Email</label>
                                <input type="email" name="email" id="txtEmailKetua" class="myTextbox width-90" placeholder="Email" required>
                            <label class="myLabel">Kartu Pelajar</label>
                                <input type="file" accept="image/*" name="image" id="KartuPelajarKetua" class="myInputFile width-90" required>
                        </div>

                        <div class="data-anggota anggota-1">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 1</h5>
                            <label class="myLabel">Nama Anggota 1</label>
                                <input type="text" name="name1" id="txtNamaAnggota1" class="myTextbox width-90" placeholder="Nama Anggota 1" required>
                            <label class="myLabel">Nomor HP</label>
                                <input type="text" name="phone_number1" id="txtNoHpAnggota1" class="myTextbox width-90" placeholder="Nomor HP" required>
                            <label class="myLabel">Email</label>
                                <input type="email" name="email1" id="txtEmailAnggota1" class="myTextbox width-90" placeholder="Email" required>
                            <label class="myLabel">Kartu Pelajar</label>
                                <input type="file" accept="image/*" name="image1" id="KartuPelajarAnggota1" class="myInputFile width-90" required>
                        </div>

                        <div class="data-anggota anggota-2">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 2</h5>
                            <label class="myLabel">Nama Anggota 2</label>
                                <input type="text" name="name2" id="txtNamaAnggota2" class="myTextbox width-90" placeholder="Nama Anggota 2" required>
                            <label class="myLabel">Nomor HP</label>
                                <input type="text" name="phone_number2" id="txtNoHpAnggota2" class="myTextbox width-90" placeholder="Nomor HP" required>
                            <label class="myLabel">Email</label>
                                <input type="email" name="email2" id="txtEmailAnggota2" class="myTextbox width-90" placeholder="Email" required>
                            <label class="myLabel">Kartu Pelajar</label>
                                <input type="file" accept="image/*" name="image2" id="KartuPelajarAnggota2" class="myInputFile width-90" required>
                        </div>

                        <button class="btn myBtn width-90 mt-5" type="submit">Register</button>
                        <div class="row justify-content-center">
                            <p class="text-center have-account">Already have an account? <a href="/login">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modalPendaftaran" tabindex="-1" aria-labelledby="modalPendaftaranLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #A0583A; color: #ECEECA; border: none">
                        <h5 class="modal-title" id="modalPendaftaranLabel">Catatan Pendaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color: #ECEECA; color: #A0583A;">
                        ...
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        function showPassword() {
            let txtPassword = document.getElementById("txtPassword");
            if (txtPassword.type === "password") {
                txtPassword.type = "text";
            } else {
                txtPassword.type = "password";
            }
        }
    </script>
@endsection
