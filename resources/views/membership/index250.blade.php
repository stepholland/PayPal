@extends('layouts.app')

@section('stripe')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <form action="{{ route('membership.store250', auth()->user()->id) }}" method="POST">
                    {{ csrf_field() }}
                    <h3>Please review your order</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Life Time Membership:<em class="pull-right"> $250</em></li>
                        <li class="list-group-item">Service Fee 3%:<em class="pull-right"> $7.5</em></li>
                        <li class="list-group-item">Total:<em class="pull-right"> $257.5</em></li>
                    </ul>
                    <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="{{config('services.stripe.key')}}"
                        data-amount="25750"
                        data-email="{{auth()->user()->email}}"
                        data-name="GA-APPNA"
                        data-description="Lifetime Membership"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto">
                    </script>
                </form>
                    </br>

        </div>
    </div>
</div>
@endsection