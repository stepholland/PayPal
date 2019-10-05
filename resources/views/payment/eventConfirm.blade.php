@extends('layouts.app')

@section('title')

{{$EVENT_TITLE.'  Confirm Order'}}

@endsection

@section('content')

<div class="container margin_top">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Confirm Your Order</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">{{$EVENT_TITLE.'  Confirm Order'}}</h6>
                <!-- <small class="text-muted"></small> -->
              </div>
              <span class="text-muted">${{number_format($amount,2)}}</span>
            </li>
            
            <!-- <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Total</h6>
                <!-- <small class="text-muted">Brief description</small> 
              </div>
              <span class="text-muted">${{number_format($amount*1.03,2)}}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li> -->
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (includes service fees)</span>
              <strong>${{number_format($amount ,2)}}</strong>
            </li>
          </ul>
          
            <script src="https://js.braintreegateway.com/web/3.25.0/js/client.min.js"></script>
            <script src="https://js.braintreegateway.com/web/3.25.0/js/paypal-checkout.min.js"></script>
            <form class="card p-2" action="" method="post">
                {{csrf_field()}}
                <!--  -->
                <input type="hidden" value="{{$phone}}" name="phone" />
                <input type="hidden" value="{{$EVENT_TITLE}}" name="item" />
                <input type="hidden" value="{{$amount}}" name="amount" />
                <input type="hidden" value="{{$email}}" name="email" />
                <input type="hidden" value="appnaok2018@gmail.com" name="business" />
                <div class="input-group">
                    <div class="input-group-append">
                        <div class="row" style="margin-bottom:10px;">
                            <div class="col-md-6">
                                <a href="/event" class="btn btn-default">Previous</a>
                            </div> 
                            <div class="col-md-6">
                                <a class="btn btn-default" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&add=1&business=appnaok2018@gmail.com&item_name={{$EVENT_TITLE}}&item_number=123456&amount={{$amount}}&return=http://www.paypal.com&cancel_return=http://www.paypal.com&email={{$email}}" target="_click">Purchase</a></button>
                            </div>    
                            <em>Please save a copy of the confirmation</em>                    
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
