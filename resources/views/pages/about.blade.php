@extends('layouts.app')

@section('title')

{{$title}}

@endsection

@section('content')

<div class="container margin_top">

    <div class="col-sm-1"></div>

    <div class = "col-sm-10">

        <h3>ABOUT US</h3>

        <p>Association of Physicians of Pakistani-descent of North America (APPNA) is a not-for-profit organization dedicated to fostering scientific development and education in the field of medicine and to delivering better health care, irrespective of race, color, creed, or gender. APPNA saves lives and relieves suffering through its participation in medical relief and other charitable activities both at home and abroad. Established in 1976, APPNA is one of the largest ethnic medical societies in North America representing more than 15,000 physicians and health care professionals of Pakistani descent serving across the United States and Canada.</p>    

        <p>As a part of constitution we are committed to support medical education and research. To form a peer group for support and career development of physicians of Pakistani origin in Oklahoma. To facilitate better understanding and relations amongst Pakistani physicians and people of Oklahoma. To institute mechanisms for cooperation with other medical organizations in Oklahoma. To help in the orientation and adjustment of medical students and medical school graduates from Pakistan entering the US medical system in Oklahoma by a variety of manners, including development of a mentoring program. To cooperate with medical schools and hospitals in Pakistan in ongoing continuing medical education by arranging lecture tours, conferences and workshops and to participate in medical relief and other charitable activities both in Pakistan and in North America.</p>

  <div class="services-section">
        <div class="row">
            <!-- single service -->
            <div class="col-md-6 col-sm-6">
                <div class="col-md-4 service box ">
                    <div class="icon" style="color:green; text-shadow: 1px 1px 1px rgb(241, 69, 69);">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="service-text">
                        <i class="fa fa-quote-left"></i>
                        <p>Being a member of APPNA Oklahoma gives me a greate opportunity to network with my class fellows and their families.</p>
                        <h2 style="color:coral">- Dr. Muzaffar Saleemi</h2>
                    </div>
                </div>
            </div>
            <!-- single service -->
            <div class="col-md-6 col-sm-6">
                <div class="col-md-4 service box">
                    <div class="icon" style="color:green; text-shadow: 1px 1px 1px rgb(241, 69, 69);">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="service-text">
                        <i class="fa fa-quote-left"></i>
                        <p>APPNA Oklahoma provides a great platform to enjoy communal activities with fellow physicians and help people in need abroad and here alike.</p>
                        <h2 style="color:coral">- Dr. Yasmin Sattar</h2>
                    </div>
                </div>
            </div>
            <!-- single service -->
            
        </div>
	</div>

	
  </div>

</div>

<div style="margin-bottom:20px"></div>



@endsection 