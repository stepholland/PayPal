@extends('layouts.app')

@section('title')

{{$title}}

@endsection

@section('content')


<div class="container">

    <div class="col-sm-1"></div>

    <div class = "col-sm-10">

        <h3>Join APPNA Oklahoma Chapter</h3>

        <div class="d-flex justify-content-center" style="margin:40px 20px">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Membership Type</th>
                <th scope="col">Cost</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th>Lifetime</th>
                <td>$ 257.78</td>
                </tr>
                <tr>
                <th>Annual</th>
                <td>$ 26.06</td>
                </tr>
            </tbody>
            </table>
            <hr>
        <h4><em>Plese click <a href="https://www.paypal.me/APPNAOK">here</a> to pay your memebership fees.</em></h4>
        <a href="https://www.paypal.me/APPNAOK"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_150x38.png" style="margin:10px 20px" alt="Credit Card Badges"></a>
        </div>

    </div>

</div>

<div style="margin-bottom:20px"></div>

@endsection 