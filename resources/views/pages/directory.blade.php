  @extends('layouts.app')

@section('title')

{{$title}}

@endsection

@section('content')
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

<div class="container margin_top">

    <div class="col-sm-1"></div>

    <div class = "col-sm-10">
    
<table id="customers">
  <tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Membership Type</th>
    <th>Due</th>
  </tr>
  @foreach ($users as $key => $user)
  <tr>
    <td><a style="color:black" href="mailto:{{$user->email}}">{{ucfirst(trans($user->fname))}} {{ucfirst(trans($user->lname))}}</a></td>
    <td>{{$user->phone}}</td>
    <td>{{$user->membership}}</td>
    <td>{{$user->membershipend}}</td>
  </tr>
  @endforeach
  
</table>
    </div>

</div>

<div style="margin-bottom:20px"></div>

@endsection 