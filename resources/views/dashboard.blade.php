@extends('layouts.app')



@section('content')
<div class="row" style="margin-top:150px;"></div>

<div class="container margin_top">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Dashboard</div>



                <div class="panel-body">

                    @if (session('status'))

                        <div class="alert alert-success">

                            {{ session('status') }}

                        </div>

                    @endif



                    You are logged in!

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

