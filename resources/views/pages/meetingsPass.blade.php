@extends('layouts.app')

@section('title')

{{$title}}

@endsection

@section('content')


<div class="containter">
<div class="container margin_top"></div>
<div class="row">
<div class="col-md-6 col-md-offset-3"><h4><em>Please enter password to see meeting minutes. Kindly email APPNA OK executive committee to request the password.</em></h4>
</div>
<div class="col-md-8  col-md-offset-4">
    
<form action="{{route('meetings')}}" method="POST">
<label for="password" class="control-form" name="password" id="password">Password:</label>{{ csrf_field() }}
 <input type="password" name="access" id="access"/>
 <button class="btn btn-primary" type="submit" style="margin:10px;">Submit</button>
 </form>
   </div>
</div>
<div style="margin-bottom:20px"></div>
</div>
@endsection 

            