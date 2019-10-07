@extends('layouts.app')

@section('title')

{{$EVENT_TITLE.'  Confirm Order'}}

@endsection

@section('content')

<div class="container margin_top">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Confirm Your Order</span>
              </h4>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Ticket</th>
                      <th>Quantity</th>
                      <th>Cost</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($request->emerald!='0')
                      <tr>
                        <td>$249 Emerald Banquet Donor</td>
                        <td>{{$request->emerald}}</td>
                        <td>${{$request->emerald*249}}</td>
                      </tr>
                    @endif
                    @if($request->turquoise!='0')
                      <tr>
                        <td>$150 Turquoise Banquet Donor</td>
                        <td>{{$request->turquoise}}</td>
                        <td>${{$request->turquoise*150}}</td>
                      </tr>
                    @endif
                    @if($request->banquet!='0')
                      <tr>
                        <td>$100 Banquet Ticket</td>
                        <td>{{$request->banquet}}</td>
                        <td>${{$request->banquet*100}}</td>
                      </tr>
                    @endif
                    @if($request->child!='0')
                      <tr>
                        <td>$15 Child Care Ticket</td>
                        <td>{{$request->child}}</td>
                        <td>${{$request->child*15}}</td>
                      </tr>
                    @endif
                    <tr style="background:gray;color:white">
                        <td colspan="2">Total Amount</td>
                        <td>${{$amount}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your Personal Info</span>
              </h4>
            </div>
            <div class="panel-body">

        <form class="card p-2" action="{{route('event.proceed')}}" method="POST">
            {{csrf_field()}}
            <!--  -->
            <input type="hidden" value="{{$EVENT_TITLE}}" name="item" />
            <input type="hidden" value="{{$amount}}" name="amount" />
            <input type="hidden" value="{{$request->emerald}}" name="emerald" />
            <input type="hidden" value="{{$request->turquoise}}" name="turquoise" />
            <input type="hidden" value="{{$request->banquet}}" name="banquet" />
            <input type="hidden" value="{{$request->child}}" name="child" />
            <input type="hidden" value="appnaok2018@gmail.com" name="business" />
              <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group">
                <label for="phone">phone:</label>
                <input type="number" name="phone" class="form-control" id="phone" required>
              </div>
              <div class="form-group">
                <label for="email">email:</label>
                <input type="email" name="email" class="form-control" id="email" required>
              </div>


            </div>
          </div>
                <div class="input-group">
                    <div class="input-group-append">
                        <div class="row" style="margin-bottom:10px;">
                            <div class="col-md-6">
                                <a href="/event" class="btn btn-default">Edit</a>
                            </div>
                            <div class="col-md-6">
                              <button type="submit">
                                <img src="{{asset('img/tickets/paypal-checkout-button.png')}}">
                              </button>
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
