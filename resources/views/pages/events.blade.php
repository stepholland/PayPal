@extends('layouts.app')

@section('title')

{{$title}}

@endsection

@section('content')


<div class="container margin_top">

    <div class="col-sm-1"></div>

    <!-- <div class = "col-sm-10">

        <h3 style="text-align:center">Currently NO EVENTS... </h3>

    </div> -->
    

</div>
<div class="services-section">
		<div class="container padding_size">
			
			<div class="row">
			<br>
		<div class="col-md-6">
		<img src="https://i.ibb.co/nbmVjps/Emerald-Banquet-Ticket.png" alt="Screenshot" border="0"> <br><br>

		<img src="https://i.ibb.co/Sd4WwzD/Child-Care-Ticket.png" alt="Screenshot" border="0"> <br><br>
		
		</div>
		<div class="col-md-6">
			<div class="d-flex justify-content-center" style="margin:40px 20px">
			
				<table class="table">
					<thead>
						<tr>
						<th scope="col">Ticket Type</th>
						<th scope="col">Cost</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<th>Banquet Ticket Emerald</th>
						<td>$249.00</td>
						</tr>
						<tr>
						<th>Child Care TIcket</th>
						<td>$15.00</td>
						</tr>
					</tbody>
				</table>
				<hr>
				
				<a href="/event"><h4><strong>Buy Now</strong></h4> </a>

			</div>
		</div>
        
            	<!-- single service -->
				
				<!-- single service -->
				
				<!--  single service -->
				
		</div>
	</div>
<div style="margin-bottom:20px"></div>



@endsection 