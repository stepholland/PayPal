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
    <th style="font-weight:700; font-size:1.5em">Lifetime Members</th>
  </tr>    
  @foreach ($users as $key => $user)
    @if ($user->membership === 'Lifetime')
    <tr>
<td style="font-weight:700; font-size:1.5em"><a style="color:black" href="mailto:{{$user->email}}">Dr. {{ucfirst(strtolower(trans($user->fname)))}} {{ucfirst(strtolower(trans($user->lname)))}}</a></td>  </tr>

    

    @endif
  @endforeach
<tr><td style="font-weight:700; font-size:1.5em">Dr. Aamir Mohammad</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Ahmad Ashfaq</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Akhtar Hameed</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Asim Chohan</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Ayesha Sattar</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Bushra Siddique</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Faisal Latif</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Faisal Wasi</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Iftikhar Hussain</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Irim Yasin</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Jawaid Jamal</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Kamran Abbasi</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Kamran Muhammad</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Khalid Khan</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Khurram Liaqat</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Mohammad Dotani</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Mohammad Ghani</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Mohammad Paracha</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Mudassir Nawaz</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Muhammad Amin</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Muhammad Gillan</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Muhammad Yasin</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Munawar Ali</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Muneer Khan</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Naeem Tahirkheli</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Rizwan Aslam</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Saadia Chohan</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Saima Salim</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Saqib Sheikh</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Sarfaraz Anwar</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Saud Ahmed</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Sikandar Mesiya</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Sophia Janjua</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Syed Hassany</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Tariq Masood</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Tauqeer Ali</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Zaheer Baber</td></tr>
<tr><td style="font-weight:700; font-size:1.5em">Dr. Zahid Cheema</td></tr>

</table>
    </div>

</div>

<div style="margin-bottom:20px"></div>

@endsection 