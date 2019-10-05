@extends('layouts.app')

@section('title')

{{ucfirst(trans(auth()->user()->fname))}}

@endsection

@section('content')

<div class="container">
    <div class="row margin_top">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Personal Information <a href="{{route('edit')}}" style="color:#333"><i class="fas fa-pencil-alt"></i></a></div>
                <div class="panel-body">
                    <h5 style="margin:2px 5px">    
                        <i style="color:coral;margin:2px 5px;" class="fas fa-user"></i> <br> {{ucfirst(trans(auth()->user()->fname)) }} @if(auth()->user()->mname!=NULL) {{ ' '.ucfirst(trans(auth()->user()->mname)) }} @endif {{ucfirst(trans(auth()->user()->lname)) }} <br>
                        <i style="color:coral;margin:2px 5px;" class="far fa-address-card"></i>   <br>
                        {{auth()->user()->add1}} <br>
                            @if (auth()->user()->add2!=NULL)
                            {{auth()->user()->add2}} <br>
                            @endif
                            {{auth()->user()->city}} <br>
                            {{auth()->user()->state}} <br>
                            {{auth()->user()->zip}} <br>
                            <i style="color:coral;margin:2px 5px;" class="fas fa-phone"></i> <br>
                            {{auth()->user()->phone}}
                        </h5>
                    </div>
            </div>
        </div>
        <div class="col-md-8">

            <div class="panel panel-default">

                <div class="panel-heading">Hello {{ ucfirst(trans(auth()->user()->fname)) }},</div>

                <div class="panel-body">
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
                    @if (auth()->user()->verified())
                        @if (auth()->user()->hasMembership())

                            <h4>You don't have a membership. Please select one from the following:</h4> <br>
                            <div class="row" style="margin-bottom:10px;">
                                <div class="col-md-3"></div>
                                <div class="col-md-2">
                                <form action="{{route('confirm', ['amount'=> 26.06]) }}" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary" name="annual">Annual - $26.06</button>
                                </form>
                                </div>
                                <div class="col-md-2">
                                <form action="{{route('confirm', ['amount'=> 257.78]) }}" method="POST">
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary" name="lifetime">Lifetime - $257.78</button>
                                </form>
                                </div>
                            </div>
                       @endif
                       @if (auth()->user()->membershipend)
                            <h4>Your {{auth()->user()->membership}} membership is to be due on <strong>{{auth()->user()->membershipend}}</strong>.</h4>
                       @endif
                    @endif
               
                    @if (!auth()->user()->verified())
                        <p>Please confirm your email.</p>
                        <p>Didn't receive confirmation? <a style="color: blue" href="/resend">click here</a> to resend.    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

