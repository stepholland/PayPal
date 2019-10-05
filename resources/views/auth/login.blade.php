@extends('layouts.app')

@section('content')

<div class="container" style='margin-top:35px'>
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-card card ">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($message = Session::get('success'))
                <div class="custom-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
                <?php Session::forget('success');?>
                @endif
                @if ($message = Session::get('error'))
                <div class="custom-alerts alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
                <?php Session::forget('error');?>
                @endif
                
                <div class="card-body">
                
                    <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
