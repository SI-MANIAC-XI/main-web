@extends('layouts.mainweb')

@section('title')
    Register
@endsection

@section('content')
    <section id="register" style="margin: 80px 0 100px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h2 class="fs-1 myTitle">REGISTRATION</h2>
                    <div class="d-flex justify-content-center">
                        <button class="btn myBtn" style="width: 400px; max-width: 100%;" data-bs-toggle="modal" data-bs-target="#modalPendaftaran">Catatan Pendaftaran</button>
                    </div>
                    <form action="" class="mt-5">
                        <div class="data-tim">
                            <h5 class="text-center" style="font-weight: 600;">Data Tim</h5>
                            <Label class="myLabel">Nama Tim</Label>
                                <input type="text" name="txtNamaTim" id="txtNamaTim" class="myTextbox width-100" placeholder="Nama Tim">
                            <label class="myLabel">Nama Sekolah</label>
                                <input type="text" name="txtNamaSekolah" id="txtNamaSekolah" class="myTextbox width-100" placeholder="Nama Sekolah">
                            <label class="myLabel">Username</label>
                                <input type="text" name="txtUsername" id="txtUsername" class="myTextbox width-100" placeholder="Username">
                            <label class="myLabel">Password</label>
                                <input type="password" name="txtPassword" id="txtPassword" class="myTextbox width-100" placeholder="Password">
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" class="myChkbox mx-2" onclick="showPassword()"> 
                                    <span class="chkText">Show Password</span>
                                </div>
                        </div>
                        
                        <div class="data-anggota ketua">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Ketua</h5>
                            <label class="myLabel">Nama Ketua</label>
                                <input type="text" name="txtNamaKetua" id="txtNamaKetua" class="myTextbox width-100" placeholder="Nama Ketua">
                            <label class="myLabel">Nomor HP</label>
                                <input type="text" name="txtNoHpKetua" id="txtNoHpKetua" class="myTextbox width-100" placeholder="Nomor HP">
                            <label class="myLabel">Email</label>
                                <input type="email" name="txtEmailKetua" id="txtEmailKetua" class="myTextbox width-100" placeholder="Email">
                            <label class="myLabel">Kartu Pelajar</label>
                                <input type="file" accept="image/*" name="KartuPelajarKetua" id="KartuPelajarKetua" class="myInputFile width-100">
                        </div>

                        <div class="data-anggota anggota-1">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 1</h5>
                            <label class="myLabel">Nama Anggota 1</label>
                                <input type="text" name="txtNamaAnggota1" id="txtNamaAnggota1" class="myTextbox width-100" placeholder="Nama Anggota 1">
                            <label class="myLabel">Nomor HP</label>
                                <input type="text" name="txtNoHpAnggota1" id="txtNoHpAnggota1" class="myTextbox width-100" placeholder="Nomor HP">
                            <label class="myLabel">Email</label>
                                <input type="email" name="txtEmailAnggota1" id="txtEmailAnggota1" class="myTextbox width-100" placeholder="Email">
                            <label class="myLabel">Kartu Pelajar</label>
                                <input type="file" accept="image/*" name="KartuPelajarAnggota1" id="KartuPelajarAnggota1" class="myInputFile width-100">
                        </div>

                        <div class="data-anggota anggota-2">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 2</h5>
                            <label class="myLabel">Nama Anggota 2</label>
                                <input type="text" name="txtNamaAnggota2" id="txtNamaAnggota2" class="myTextbox width-100" placeholder="Nama Anggota 2">
                            <label class="myLabel">Nomor HP</label>
                                <input type="text" name="txtNoHpAnggota2" id="txtNoHpAnggota2" class="myTextbox width-100" placeholder="Nomor HP">
                            <label class="myLabel">Email</label>
                                <input type="email" name="txtEmailAnggota2" id="txtEmailAnggota2" class="myTextbox width-100" placeholder="Email">
                            <label class="myLabel">Kartu Pelajar</label>
                                <input type="file" accept="image/*" name="KartuPelajarAnggota2" id="KartuPelajarAnggota2" class="myInputFile width-100">
                        </div>

                        <button class="btn myBtn width-100 mt-5" type="submit">Register</button>
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
