@extends('layouts.frontend.master')

@section('title','Login')

@push('css')

@endpush

@section('content')

<div class="container-login  " style="display: flex;  justify-content: center;">



        <div class="login-content ">


            <form id="login" class="form-login " method="POST" action="{{ route('login') }}">@csrf

                <img class="img-login" src="{{asset('assets/frontend/img/logo22.png')}}">



                <div id="btn"> </div>

                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>

                <!--========================================== input-div one===========================================-->
                <div class=" input-div one">

                    <div class="i-login">
                        <i class="fas fa-user "></i>
                    </div>

                    <div class="div">


                        <input id="email" type="email" class="  @error('email') is-invalid @enderror  input    "
                            name="email" value="{{ old('email') }}" placeholder='Emaill' required autocomplete="email"
                            autofocus>
                        @error('email')

                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>

                        </span>
                        @enderror
                    </div>

                </div>

                <!--================ END input-div one=================-->

                <!--================ input-div pass=================-->
                <div class="input-div pass">

                    <div class="i-login">
                        <i class=" fas fa-lock"></i>
                    </div>

                    <div class="div">
                        <!--  class="form-control @error('password') is-invalid @enderror" -->
                        <input id="password" type="password" class=" @error('password') is-invalid @enderror input  "
                            placeholder="password" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                </div>
                <!--================  END input-div pass=================-->

                <!--================  Forgot Your Password=================-->
                <div> @if (Route::has('password.request'))
                    <a class="a-login " href="{{ route('password.request') }}"> Forgot Your Password</a>
                    @endif
                </div>
                <!--================  END Forgot Your Password=================-->



                <!-- form--check -->
                <div class="form-check ">

                    <input class="form-check-input " type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        Remember Me
                    </label>
                </div>
                <!-- ---------------------  END form--check ----------------------------------------------->

                <!-- --------------------- btn-login----------------------------------------------->


                <button type="submit" class="btn-login btn-md login-button "> Login </button>
                <!-- ---------------------  END btn-login------------------------------------------------>


            </form>
        </div><!-- ---------------------END login-content------------------------------------------------>




        <!-- ---------------------form Register------------------------------------------------>
        <div class="login-content ">

            <form id="register" class="form-login   " method="POST" action="{{ route('register') }}">@csrf

                <img class="img-login" src="{{asset('assets/frontend/img/logo22.png')}}">


                <div id="btn"></div>

                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>

                <!-- ---------------------<h2 class="title">Register </h2>------------------------------------------------>

                <!--================  Register first_name =================-->
                <div class="form-row">
                    <!--================  form-row =================-->

                    <div class="form-group col-md-6">

                        <div class=" input-div one ">


                            <div class=" i-login">
                                <i class="fas fa-user "></i>
                            </div>


                            <div class="div ">


                                <input id="first_name" type="text"
                                    class="  @error('first_name') is-invalid @enderror input   " name="first_name"
                                    value="{{ old('first_name') }}" placeholder='first_name' required
                                    autocomplete="first_name" autofocus>
                                @error('first_name')



                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <!--================ END  Register first_name =================-->
                    <!--================   Register   last_name  =================-->
                    <div class="form-group col-md-6">


                        <div class=" input-div one ">


                            <div class=" i-login">
                                <i class="fas fa-user "></i>
                            </div>


                            <div class="div ">
                                <input id="first_name" type="text"
                                    class="  @error('last_name') is-invalid @enderror input   " name="last_name"
                                    value="{{ old('first_name') }}" placeholder='last_name' required
                                    autocomplete="last_name" autofocus>
                                @error('last_name')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
                <!--================  END form-row =================-->
                <!--================ END  Register   last_name  =================-->



                <!--================ Emaill  Register =================-->
                <div class="form-group">

                    <div class=" input-div two2">

                        <div class=" i-login">
                            <i class=" far fa-envelope "></i>
                        </div>

                        <div class=" div">


                            <input id="email" type="email" class=" @error('email') is-invalid @enderror  input   "
                                name="email" value="{{ old('email') }}" placeholder='E-Mail Address' required
                                autocomplete="email" autofocus>
                            @error('email')

                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>

                            </span>
                            @enderror
                        </div>
                    </div>

                </div>
                <!--================  END  Emaill  Register =================-->

                <!--================ Register  Password=================-->
                <div class="form-group">

                    <div class=" input-div two">

                        <div class="i-login">
                            <i class=" fas fa-lock"></i>
                        </div>

                        <div class="div">

                            <input id="password" type="password"
                                class=" @error('password') is-invalid @enderror input  " placeholder="Password"
                                name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>
                </div>
                <!--================  END Register  Password =================-->

                <!--================ Register  Confirm Password=================-->
                <div class="form-group">

                    <div class=" input-div two">

                        <div class="i-login">
                            <i class=" fas fa-lock"></i>
                        </div>

                        <div class="div">
                            <input id="password-confirm" type="password" class="  input   " name="password_confirmation"
                                placeholder="Password-confirm" required autocomplete="new-password">
                        </div>

                    </div>
                </div>
                <!--================  END   Register   Confirm Password =================-->

                <!-- --------------------- btn-Register----------------------------------------------->
                <button type="submit" class="btn-login btn-md  "> Register </button>

                <!-- ---------------------  END btn-Register----------------------------------------------->

            </form>
            <!-- ---------------------END  form  Register------------------------------------------------>

        </div><!-- ---------------------END login-content------------------------------------------------>





</div> <!-- ---------------------END container-login ------------------------------------------------>





@endsection


@push('js')



@endpush