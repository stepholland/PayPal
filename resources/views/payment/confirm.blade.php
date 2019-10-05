@extends('layouts.app')

@section('title')

{{$title.'  Membership Confirm Order'}}

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
                <h6 class="my-0">{{$title.'  Membership Confirm Order'}}</h6>
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
            <form class="card p-2" action="{{route('proceed')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" value="{{auth()->user()->fname}}" name="fname" />
                <input type="hidden" value="{{auth()->user()->lname}}" name="lname" />
                <input type="hidden" value="{{auth()->user()->add1}}" name="add1" />
                <input type="hidden" value="{{auth()->user()->add2}}" name="add2" />
                <input type="hidden" value="{{auth()->user()->city}}" name="city" />
                <input type="hidden" value="{{auth()->user()->state}}" name="state" />
                <input type="hidden" value="{{auth()->user()->zip}}" name="zip" />
                <input type="hidden" value="{{auth()->user()->phone}}" name="phone" />
                <input type="hidden" value="{{$title}}" name="item" />
                <input type="hidden" value="{{$amount}}" name="amount" />
                <div class="input-group">
                    <div class="input-group-append">
                        <div class="row" style="margin-bottom:10px;">
                            <div class="col-md-6">
                                <a href="/home" class="btn btn-default">Previous</a>
                            </div> 
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-default">Proceed</button>
                            </div>                        
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
