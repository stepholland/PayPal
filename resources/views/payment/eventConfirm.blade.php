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
                    @php
                      $allPrices=array();
                    @endphp

                    @foreach($request->tickets as $ticket=>$units)

                      @php
                        $thisTicket=App\Ticket::where('id',$ticket)->first();
                      @endphp
                      @if($units!=0)
                      <tr>
                        <td>${{$thisTicket->price}} {{$thisTicket->name}}</td>
                        <td>{{$units}}</td>
                        <td>${{$units*$thisTicket->price}}</td>
                      </tr>
                      @endif
                    @endforeach

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
            @forelse($request->tickets as $ticket=>$units)
              @php
                $thisTicket=App\Ticket::where('id',$ticket)->first();
              @endphp
              @if($units!=0)
                <input type="hidden" value="{{$units}}" name="tickets[{{{$ticket}}}]" />
              @endif
            @empty
             <h3 class="text-center text-danger">No Tickets selected</h3>
            @endforelse
            <input type="hidden" value="{{$amount}}" name="amount" />
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
                                <a href="{{url('/events')}}" class="btn btn-default">Edit</a>
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
