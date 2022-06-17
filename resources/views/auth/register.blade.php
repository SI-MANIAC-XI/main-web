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
                        <button class="btn myBtn" style="width: 400px; max-width: 90%;" data-bs-toggle="modal"
                            data-bs-target="#modalPendaftaran">Catatan Pendaftaran</button>
                    </div>
                    <form method="POST" action="{{ url('/register') }}" class="mt-5"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="data-tim">
                            <h5 class="text-center" style="font-weight: 600;">Data Tim</h5>
                            <Label class="myLabel">Nama Tim</Label>
                            <input type="text" name="team_name" id="txtNamaTim"
                                class="myTextbox width-90 @error('team_name') is-invalid @enderror" placeholder="Nama Tim"
                                >
                            @error('team_name')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Nama Sekolah</label>
                            <input type="text" name="school_name" id="txtNamaSekolah"
                                class="myTextbox width-90 @error('school_name') is-invalid @enderror"
                                placeholder="Nama Sekolah" >
                            @error('school_name')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Alamat Lengkap Sekolah</label>
                            <textarea name="school_address" id="school_address" cols="30" rows="10"
                                class="myTextbox width-90  @error('school_address') is-invalid @enderror"
                                placeholder="cth. Jalan Raya Kalirungkut, Surabaya 60293"
                                style="padding-top: 5px; padding-bottom: 5px; height: 80px; min-height: 40px;"
                                ></textarea>
                            @error('school_address')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">No. Telepon Sekolah</label>
                            <input type="text" name="school_number" id="txtNamaSekolah"
                                class="myTextbox width-90  @error('school_number') is-invalid @enderror"
                                placeholder="No. Telepon Sekolah" >
                            @error('school_number')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Username</label>
                            <input type="text" name="username" id="txtUsername"
                                class="myTextbox width-90  @error('username') is-invalid @enderror" placeholder="Username"
                                >
                            @error('username')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Password</label>
                            <input type="password" name="password" id="txtPassword"
                                class="myTextbox width-90 @error('password') is-invalid @enderror" placeholder="Password"
                                >
                            @error('password')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="d-flex align-items-center" style="margin-left: 5%; position: relative;">
                                <input type="checkbox" class="myChkbox mx-2" onclick="showPassword()">
                                <span class="checkmark"></span>
                                <span class="chkText">Show Password</span>
                            </div>
                        </div>

                        <div class="data-anggota ketua">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Ketua Tim</h5>
                            <label class="myLabel">Nama Ketua Tim</label>
                            <input type="text" name="name" id="txtNamaKetua"
                                class="myTextbox width-90 @error('name') is-invalid @enderror" placeholder="Nama Ketua Tim"
                                >
                            @error('name')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Nomor HP</label>
                            <input type="text" name="phone_number" id="txtNoHpKetua"
                                class="myTextbox width-90 @error('phone_number') is-invalid @enderror"
                                placeholder="Nomor HP" >
                            @error('phone_number')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Email</label>
                            <input type="email" name="email" id="txtEmailKetua"
                                class="myTextbox width-90 @error('email') is-invalid @enderror" placeholder="Email"
                                >
                            @error('email')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Kartu Pelajar (Max 1 MB)</label>
                            <input type="file" accept="application/pdf,image/*" name="image"
                                id="KartuPelajarKetua formFileMultiple"
                                class="myInputFile width-90 @error('image') is-invalid @enderror"
                                style="color:#a0583a;">
                            @error('image')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <p style="margin-left: 5%; margin-top: 0;">Format: Nama Tim_Nama</p>
                        </div>

                        <div class="data-anggota anggota-1">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 1</h5>
                            <label class="myLabel">Nama Anggota 1</label>
                            <input type="text" name="name1" id="txtNamaAnggota1" class="myTextbox width-90"
                                placeholder="Nama Anggota 1">
                            @error('name1')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="myLabel">Nomor HP</label>
                            <input type="text" name="phone_number1" id="txtNoHpAnggota1" class="myTextbox width-90"
                                placeholder="Nomor HP">
                                @error('phone_number1')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            <label class="myLabel">Email</label>
                            <input type="email" name="email1" id="txtEmailAnggota1" class="myTextbox width-90"
                                placeholder="Email">
                                @error('email1')
                                <div class="invalid-feedback text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            <label class="myLabel">Kartu Pelajar (Max 1 MB)</label>
                            <input type="file" accept="application/pdf,image/*" name="image1"
                                id="KartuPelajarAnggota1 formFileMultiple"
                                class="myInputFile width-90 @error('image1') is-invalid @enderror" style="color:#a0583a;">
                                @error('image1')
                                 <div class="invalid-feedback text-center">
                                    {{ $message }}
                                 </div>
                                @enderror
                                <p style="margin-left: 5%; margin-top: 0;">Format: Nama Tim_Nama</p>
                        </div>

                        <div class="data-anggota anggota-2">
                            <h5 class="text-center mt-5" style="font-weight: 600;">Data Anggota 2</h5>
                            <label class="myLabel">Nama Anggota 2</label>
                            <input type="text" name="name2" id="txtNamaAnggota2" class="myTextbox width-90 @error('name2') is-invalid @enderror"
                                placeholder="Nama Anggota 2">
                                @error('name2')
                                 <div class="invalid-feedback text-center">
                                    {{ $message }}
                                 </div>
                                @enderror
                            <label class="myLabel">Nomor HP</label>
                            <input type="text" name="phone_number2" id="txtNoHpAnggota2" class="myTextbox width-90 @error('phone_number2') is-invalid @enderror"
                                placeholder="Nomor HP">
                                 @error('phone_number2')
                                 <div class="invalid-feedback text-center">
                                    {{ $message }}
                                 </div>
                                @enderror
                            <label class="myLabel">Email</label>
                            <input type="email" name="email2" id="txtEmailAnggota2" class="myTextbox width-90 @error('email2') is-invalid @enderror"
                                placeholder="Email">
                                 @error('email2')
                                 <div class="invalid-feedback text-center">
                                    {{ $message }}
                                 </div>
                                @enderror
                            <label class="myLabel">Kartu Pelajar (Max 1 MB)</label>
                            <input type="file" accept="application/pdf,image/*" name="image2"
                                id="KartuPelajarAnggota2 formFileMultiple"
                                class="myInputFile width-90 @error('image2') is-invalid @enderror" style="color:#a0583a;">
                                @error('image2')
                                 <div class="invalid-feedback text-center">
                                    {{ $message }}
                                 </div>
                                @enderror
                                <p style="margin-left: 5%; margin-top: 0;">Format: Nama Tim_Nama</p>
                        </div>

                        <button class="btn myBtn width-90 mt-5" type="submit">Register</button>
                        <div class="row justify-content-center">
                            <p class="text-center have-account">Already have an account? <a href="{{ url('/login') }}">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modalPendaftaran" tabindex="-1" aria-labelledby="modalPendaftaranLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #A0583A; color: #ECEECA; border: none">
                        <h5 class="modal-title" id="modalPendaftaranLabel">Catatan Pendaftaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color: #ECEECA; color: #A0583A;">
                        <div class="container">
                            <h3 class="text-center">Alur Pendaftaran Online</h3>
                            <ol>
                                <li>Peserta melakukan pendaftaran pada website MANIAC XI (<a
                                        href="https://maniac.ifubaya.id">maniac.ifubaya.id</a>).</li>
                                <li>
                                    Peserta wajib mengisi kelengkapan data untuk pendaftaran, meng-<i>upload scan</i> kartu
                                    pelajar. <br>
                                    Data-data yang perlu diisi adalah sebagai berikut: <br>
                                    <ul>
                                        <li>Nama Kelompok</li>
                                        <li>Asal Sekolah</li>
                                        <li>Username</li>
                                        <li>Password</li>
                                        <li>Alamat Lengkap Sekolah</li>
                                        <li>No. Telepon Sekolah</li>
                                        <li>Nama Ketua Kelompok, No. HP (Whatsapp), Email</li>
                                        <li>Nama Anggota Kelompok, No. HP (Whatsapp), Email</li>
                                        <li>Scan kartu pelajar per-anggota pada bagian yang sudah disiapkan</li>
                                    </ul>
                                    Apabila belum memiliki kartu pelajar, dapat dilakukan upload scan surat keterangan aktif
                                    dengan mengetahui tanda tangan dari kepala sekolah, berkas harus dalam bentuk PDF dengan
                                    format nama Nama Tim_Nama Anggota.
                                </li>
                                <li>Harap perhatikan kelengkapan data yang diperlukan untuk pendaftaran.</li>
                                <li>Tim akan dikonfirmasi telah terdaftar sebagai peserta MANIAC XI melalui email yang akan
                                    dikirimkan oleh panitia kepada ketua tim dalam jangka waktu maksimal 1 minggu setelah
                                    peserta melakukan pendaftaran di website.</li>
                                <li>Apabila dalam jangka waktu 1 minggu peserta belum mendapatkan email konfirmasi, maka
                                    dapat menghubungi nomor Whatsapp 087855956985 (Ian Wahyudi)</li>
                            </ol>
                            <br>

                            <h3 class="text-center">Persyaratan Peserta MANIAC XI</h3>
                            <ol>
                                <li>Satu tim terdiri dari 3 siswa/siswi aktif (maksimal kelas XI di Tahun Ajaran 2021/2022)
                                    Sekolah Menengah Atas (SMA)/Sekolah Menengah Kejuruan (SMK)/sederajat yang berasal dari
                                    sekolah yang sama <b>(boleh berasal dari jenjang dan peminatan yang berbeda).</b></li>
                                <li>Dikarenakan Babak Final MANIAC XI diadakan secara luring/offline. Peserta diharapkan
                                    untuk bersedia dalam mengikuti seluruh rangkaian acara mulai dari Babak Penyisihan
                                    hingga Babak Final</li>
                                <li>Registrasi dilakukan oleh salah satu perwakilan TIM.</li>
                                <li>Tim yang sudah terdaftar dapat mengganti anggota tim <b>paling lambat hingga
                                    2 minggu sebelum diadakannya <i>Technical Meeting</i> Babak Penyisihan.</b></li>
                                <li>Setiap peserta MANIAC XI harus mempunyai minimal 1 laptop/komputer dan 1 <i>gadget</i>
                                    (<i>smartphone</i>/tablet/laptop/komputer/dan lainnya), dan mempunyai koneksi internet
                                    yang cukup dan memadai. <br> Catatan: <i>Gadget</i> harus memiliki kamera yang dapat
                                    digunakan saat bergabung pada Zoom meeting.</li>
                                <li>Peserta diwajibkan mengisi data pendaftaran secara lengkap dan sesuai. Pendaftaran
                                    dilakukan secara <i>online</i> melalui <a
                                        href="https://maniac.ifubaya.id">maniac.ifubaya.id</a>.</li>
                            </ol>
                        </div>
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
