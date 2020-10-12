@extends('layouts.master')
@section('title')
Admin Login
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        @include('layouts.backend.partials.flash')
                        {!! Form::open(['route'=>'login']) !!}
                        @csrf
                        <h1>Admin Login</h1>
                        <p class="text-muted">Selamat datang, silahkan login untuk melanjutkan</p>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">
                                    <i class="c-icon fas fa-user"></i></span></div>
                            {!! Form::text('email', old('email'), ['class' => 'form-control', 'id' => 'login', 'placeholder' => 'Email']) !!}
                        </div>
                        @if ($errors->has('email'))
                        <small style="color:red;" class="mb-n3">
                            {{ $errors->first('email') }}
                        </small>
                        @endif
                        <div class="input-group my-4">
                            <div class="input-group-prepend"><span class="input-group-text">
                                    <i class="c-icon fas fa-lock"></i></span></div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            @if ($errors->has('password'))
                            <span style="color:red;">
                                {{ $errors->first('password') }}
                            </span>
                            @endif
                        </div>
                        <div class="input-group mb-4">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" class="btn btn-info px-4" value="Login">
                            </div>
                            <div class="col-6 text-right">
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="card text-white bg-info py-5 d-md-down-none  flex-row align-items-center" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <img src="{{ asset('assets/img/logo/logo-full.png') }}" class="img-fluid" style="max-width:300px" alt="logo" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection