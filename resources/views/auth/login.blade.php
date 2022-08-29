@extends('layouts.mainweb')

@section('title')
    Login
@endsection

@section('content')
    <section id="login" style="margin: 100px 0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-11 text-center">
                     @if(session('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           {{ session('loginError') }}
                        </div>
                     @endif
                     @if(session()->has('registerClosed'))
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('registerClosed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>
                     @endif
                    <img src="{{ asset('../mainweb/img/logo/logo-maniac-xi.png') }}" width="90%" alt="Logo MANIAC XI">
                    
                    <form method="POST" action="{{ url('/login') }}" class="mt-5">
                        @csrf
                        <input type="text" name="username" id="txtUsername"
                            class="myTextbox width-90 @error('username') is-invalid @enderror" placeholder="Username">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <input type="password" name="password" id="txtPassword"
                            class="myTextbox width-90  @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="d-flex align-items-center" style="margin-left: 5%; position: relative;">
                            <input type="checkbox" class="myChkbox mx-2" onclick="showPassword()">
                            <span class="checkmark"></span>
                            <span class="chkText">Show Password</span>
                        </div>
                        <button class="btn myBtn width-90" type="submit">Login</button>
                    </form>
                    <div class="row justify-content-center">
                        <p class="text-center have-account">Don't have an account yet? <a
                                href="{{ url('/register') }}">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (session('loginError'))
      <script>toastr.danger("{ !! session('loginError') !! }");</script>        
    @endif
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
