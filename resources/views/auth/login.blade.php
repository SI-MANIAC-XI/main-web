@extends('layouts.mainweb')

@section('title')
    Login
@endsection

@section('content')
    <section id="login" style="margin: 100px 0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <img src="{{ asset('../mainweb/img/logo/logo-maniac-xi.png') }}" width="100%" alt="Logo MANIAC XI">
                    <form method="POST" action="" class="mt-5">
                        <input type="text" name="txtUsername" id="txtUsername" class="myTextbox" style="width: 100%;" placeholder="Username">
                        <input type="password" name="txtPassword" id="txtPassword" class="myTextbox" style="width: 100%;" placeholder="Password">
                        <div class="d-flex align-items-center">
                            <input type="checkbox" class="myChkbox mx-2" onclick="showPassword()"> 
                            <span class="chkText">Show Password</span>
                        </div>
                        <button class="btn myBtn" type="submit" style="width: 100%;">Login</button>
                    </form>
                    <div class="row justify-content-center">
                        <p class="text-center have-account">Don't have an account yet? <a href="/register">Register Now</a></p>
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