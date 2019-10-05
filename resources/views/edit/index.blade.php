@extends('layouts.app')

@section('content')

<div class="container margin_top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
            <div class="panel-heading strap" style="font-weight:700; color:#314504; width:100%; height=100%; background-color:coral; margin-bottom:20px; padding:2px 40%">Update Information</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('update') }}">
                       {{ csrf_field() }}

                        
                       
                        <div class="form-group row">
                            <label for="add1" class="col-md-4 col-form-label text-md-right">{{ __('Mailing Address') }}</label>
                            <div class="col-md-6">
                                <input id="add1" type="text" class="form-control{{ $errors->has('add1') ? ' is-invalid' : '' }}" name="add1" value="{{ old('add1') }}" required autofocus>
                                @if ($errors->has('add1'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('add1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="add2" class="col-md-4 col-form-label text-md-right">{{ __('Mailing Address 2') }}</label>

                            <div class="col-md-6">
                                <input id="add2" type="text" class="form-control" name="add2" value="{{ old('add2') }}"  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>
                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip" class="col-md-4 col-form-label text-md-right">{{ __('Zip') }}</label>
                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" name="zip" value="{{ old('zip') }}" required autofocus>
                                @if ($errors->has('zip'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
