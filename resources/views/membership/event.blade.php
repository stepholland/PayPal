@extends('layouts.app')



@section('stripe')

<div class="container" id='container-margin'>

    <div class="row">

   

        <div class="col-md-8 col-md-offset-2">

                <form action="{{ route('membership.event', ['amount' => $amount, 'quantity' => $quantity, 'phone' => $phone, 'name' => $name]) }}" method="POST">

                    {{ csrf_field() }}

                    <h3>Please review your order</h3>

                    <ul class="list-group">

                        <li class="list-group-item">Name:<em class="pull-right"> {{$name}}</em></li>

                        <li class="list-group-item">Email:<em class="pull-right"> {{$email}}</em></li>

                        <li class="list-group-item">Phone:<em class="pull-right"> {{$phone}}</em></li>

                        <li class="list-group-item">Lunch Ticket:<em class="pull-right"> ${{$amount/100}} x {{$quantity}} = ${{round($amount/100 * $quantity, 2)}}</em></li>

                        <li class="list-group-item">Service Fee 3%:<em class="pull-right">${{round($amount * $quantity * .0003,2)}}</em></li>

                        <li class="list-group-item">Total:<em class="pull-right"> ${{$total = round($amount * $quantity * .0103, 2)}}</em></li>

                    </ul>



                    <script

                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"

                        data-key="{{config('services.stripe.key')}}"

                        data-amount="{{round($amount * $quantity * 1.03, 2)}}"

                        data-email="{{$email}}"

                        data-name="GA-APPNA"

                        data-description="Lunch"

                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"

                        data-locale="auto">

                    </script>

               </form>

            </br>



        </div>

    </div>

</div>

@endsection