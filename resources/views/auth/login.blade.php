{{-- EXTENDS LAYOUT --}}
@extends('layouts.app')


@section('content')
<div class="container">

</div>
<div style="background-color: white" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- CARD --}}
            <div class="card">
                {{-- CARD HARDER --}}
                <div class="text-center card-header-success">
                    <span class="text-card-header">
                        {{ __('เข้าสู่ระบบ') }}
                    </span>
                </div>
                {{-- CARD BODY --}}
                <div class="card-body-login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- EMAIL ---}}
                        <div class="form-group">
                            <div class="row">
                                <label for="email" class="col-md-8 offset-md-2 col-form-label text-md-left">
                                    <span class="text-card-body">
                                        <i class="fa fa-user icon-img"></i>&nbsp;{{ __('อีเมล') }}
                                    </span>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <input id="email" type="email" class="form-control
                                    @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                        required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- PASSWORD --}}
                        <div style="margin-bottom: 0rem" class="form-group">
                            <div class="row">
                                <label for="password" class="col-md-8 offset-md-2 col-form-label text-md-left">
                                    <span class="text-card-body">
                                        <i class="fa fa-lock icon-img"></i>&nbsp;{{ __('รหัสผ่าน') }}
                                    </span>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- REMEMBER --}}
                        {{--
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        --}}
                        {{-- FORGET PASSWORD --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <div class="row">
                                    <div class="col-5 text-left">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                <span class="text-card-body-sm">{{ __('ลืมรหัสผ่าน?') }}</span>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-7 text-right">
                                            <span class="text-card-body-sm">{{ __('ยังไม่มีบัญชีใช่ไหม?') }}</span>
                                            <a href="{{ route('register') }}">
                                                <span class="text-card-body-sm">{{ __('ลงทะเบียน') }}</span>
                                            </a>
                                    </div>
                                </div>
                                <div style="margin-top: 1.15rem" class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="taviraj">{{ __('เข้าสู่ระบบ') }}</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
