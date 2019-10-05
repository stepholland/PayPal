@extends('layouts.app')

@section('title')

{{$title}}

@endsection

@section('content')
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>
jQuery(document).on('click', '#collapse', function (e)
{
    jQuery('.collapse').collapse('hide');
})</script>

<div class="container margin_top">

<div id="meetings">
    <p><a class="btn btn-primary" id="collapse" data-toggle="collapse" href="#2019" role="button" aria-expanded="true" aria-controls="2019" data-parent="#meetings">
        Meeting Minutes 2019
    </a>&nbsp;&nbsp;<a class="btn btn-primary" id="collapse"  data-toggle="collapse" href="#2018" role="button" aria-expanded="false" aria-controls="2018" data-parent="#meetings">
        Meeting Minutes 2018
    </a></p>
    
    <div class="collapse in" id="2019"  data-parent="#meetings">
        <div class="card card-body">
            <ul style="list-style-type: none;">
                <li>January - 01/09/2019 <a href="img/meeting/APPNA minutes Jan 2019_TA.docx"><i class="far fa-file"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="collapse" id="2018" data-parent="#meetings">
        <div class="card card-body">
            <ul style="list-style-type: none;">
                <li>January - 01/09/2018 <a href="img/meeting/January2018MeetingMinutes.docx"><i class="far fa-file"></i></a></li>
                <li>February - 02/01/2018 <a href="img/meeting/February2018MeetingMinutes.docx"><i class="far fa-file"></i></a></li>
                <li>March - 03/13/2018 <a href="img/meeting/March2018MeetingMinutes.docx"><i class="far fa-file"></i></a></li>
                <li>April - 04/05/2018 <a href="img/meeting/April2018MeetingMinutes.docx"><i class="far fa-file"></i></a></li>
                <li>May - 05/03/2018 <a href="img/meeting/May2018MeetingMinutes.docx"><i class="far fa-file"></i></a></li>
                <li>June - 06/13/2018 <a href="img/meeting/June2018MeetingMinutes.docx"><i class="far fa-file"></i></a></li>
                <li>July - 07/19/2018 <a href="img/meeting/July2018Meetingminutes.docx"><i class="far fa-file"></i></a></li>
                <li>August - 08/23/2018 <a href="img/meeting/August2018MeetingMinutes.docx"><i class="far fa-file"></i></a></li>
                <li>September - 09/06/2018 <a href="img/meeting/Sept2018MeetingMinutes.docx"><i class="far fa-file"></i></a></li>
                <li>October - 10/04/2018 <a href="img/meeting/Oct2018MeetingMinutes.docx"><i class="far fa-file"></i></a></li>
                <li>November - 11/01/2018 <a href="img/meeting/Nov2018MeetingMinutes.docx"><i class="far fa-file"></i></a></li>
                <li>December - 12/01/2018 <a href="img/meeting/December2018MeetingMinutes.docx"><i class="far fa-file"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</div>
<div style="margin-bottom:20px"></div>

@endsection 

            