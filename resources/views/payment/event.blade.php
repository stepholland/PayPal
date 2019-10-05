@extends('layouts.app')

@section('title')

{{ $title.' Purchase Ticket' }}

@endsection

@section('content')

<form action="{{route('eventConfirm')}}" method="POST">

{{ csrf_field() }}
<div class="container margin_top">
<div class="col-md-6">

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

        <label for="name" class="control-label">Your Full Name</label>

        <input name="name"  value="{{ old('name') }}" required autofocus class="form-control" type="text">

        @if ($errors->has('name'))

            <span class="help-block">

                <strong>{{ $errors->first('name') }}</strong>

            </span>

        @endif

    </div>

</div>

<div class="col-md-6">

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        <label for="email" class="control-label">Your Email</label>

        <input name="email"  value="{{ old('email') }}" required autofocus class="form-control" type="email">

        @if ($errors->has('email'))

            <span class="help-block">

                <strong>{{ $errors->first('email') }}</strong>

            </span>

        @endif

    </div>

</div>

<div class="col-md-6">

    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">

        <label for="phone" class=" control-label">Your Phone</label>

        <input name="phone"  value="{{ old('phone') }}" required autofocus class="form-control" type="text">

        @if ($errors->has('phone'))

            <span class="help-block">

                <strong>{{ $errors->first('phone') }}</strong>

            </span>

        @endif

    </div>

</div>

<div class="col-md-6">

        <label for="ticket" class="control-form" name="ticket" id="ticket">Number of Banquet Tickets</label>

        <select name="ticket" class="form-control" onchange="return postSelection(this)">

        

            <option value="1" @if(old('ticket') === 1) selected @endif> 1 </option>

            <option value="2" @if(old('ticket') === 2) selected @endif> 2 </option>

            <option value="3"@if(old('ticket') ===  3) selected @endif> 3 </option>

            <option value="4"@if(old('ticket') ===  4) selected @endif> 4 </option>

            <option value="5"@if(old('ticket') ===  5) selected @endif> 5 </option>

            <option value="6"@if(old('ticket') ===  6) selected @endif> 6 </option>

            <option value="7"@if(old('ticket') ===  7) selected @endif> 7 </option>

            <option value="8"@if(old('ticket') ===  8) selected @endif> 8 </option>

        </select>

    

    </div>
    <div class="row">
    <div class="col-md-6">

        <label for="child-ticket" class="control-form" name="child-ticket" id="child-ticket">Number of Child Care Tickets</label>

        <select name="child-ticket" class="form-control" onchange="return postSelection(this)">

        
            <option value="0" @if(old('child-ticket') === 0) selected @endif> 0 </option>

            <option value="1" @if(old('child-ticket') === 1) selected @endif> 1 </option>

            <option value="2" @if(old('child-ticket') === 2) selected @endif> 2 </option>

            <option value="3"@if(old('child-ticket') ===  3) selected @endif> 3 </option>

            <option value="4"@if(old('child-ticket') ===  4) selected @endif> 4 </option>

    

        </select>

    

    </div>
    <div class="col-md-6">

    </div>
    </div>
    <button class="btn btn-primary" type="submit" style="margin:10px;">Proceed</button>
</form>                         
</div>
@endsection
