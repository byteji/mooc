@extends('layouts.frontend.master')

@section('title','Login')

@push('css')

@endpush

@section('content')

              <!-- section loin  --> 
    <div class="container-login" style="display: flex;  justify-content: center;">
        <div class="login-content ">
            <form class="form-login " method="POST" action="{{ route('login') }}">@csrf
                <img class="img-login" src="{{asset('assets/frontend/img/cex2.png')}}">
                        <!-- <h2 class="title"  >LOGIN </h2> -->

            <!--=========== input-div one=============-->
        <div class=" input-div one" >
               <div class=" i-login">
                    <i class="fas fa-user"></i>
                </div>
            <div class="div">
                <input id="email" type="email" class="  @error('email') is-invalid @enderror  input  input-field  " name="email"
                    value="{{ old('email') }}" placeholder='Emaill' required autocomplete="email" autofocus>@error('email')
                <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                    @enderror
            </div>
        </div>  <!--================ end input-div one=================-->

            <!--================ input-div pass=================-->
        <div class="input-div pass">
            <div class="i-login">
                <i class=" fas fa-lock"></i>
                </div>
            <div class="div">
                <!--  class="form-control @error('password') is-invalid @enderror" -->
                <input id="password" type="password" class=" @error('password') is-invalid @enderror input  input-field "
                    placeholder="password" name="password" required autocomplete="current-password"> @error('password')
                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                 @enderror
            </div>
        </div>  <!--================  end input-div pass=================-->

                <!--===========  Forgot Your Password ========-->
        <div> @if (Route::has('password.request'))
            <a class="a-login " href="{{ route('password.request') }}"> Forgot Your Password</a>
            @endif
        </div>   <!--============ end Forgot Your Password ============-->

               <!-- ------ form--check ------------------------>
        <div class="form-check ">
           <input class="form-check-input " type="checkbox" name="remember" id="remember"{{ old('remember') ? 'checked' : '' }}>
             <label class="form-check-label" for="remember"> Remember Me </label>
        </div>  <!-- ------  end form--check ----------------->

                                 <!-- ------  button Login ------------->
                    <button type="submit" class="btn-login btn-md login-button "> Login </button>
             </form>

        </div>  <!-- ------  class="login-content ------------->
    </div>  <!-- end section loin -->

 @endsection



    <script>
            // just for the demos, avoids form submit
                var x = document.getElementById("login");
                var y = document.getElementById("register");
                var z = document.getElementById("btn");
         function register(){
               x.style.left= "-400px";
                y.style.left= "50px";
                z.style.left= "110px";
            }
         function login(){
                x.style.left= "50px";
                y.style.left= "450px";
                 z.style.left= "0px";

            }
    </script>

    @push('js')
@endpush
