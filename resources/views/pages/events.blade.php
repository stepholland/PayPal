@extends('layouts.app')

@section('title')

{{$title}}

@endsection

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" type="text/css">
<style>
  .input-group{
    margin-top: 50%;
  }
  @media only screen and (max-width: 600px) {
    .input-group{
      margin-top: 0%;
      margin-bottom: 60px;
    }
}
</style>
<div class="container margin_top">

    <div class="col-sm-1"></div>

    <div class = "col-sm-10">

      @if(session('message'))
           <h2 style="color:green;text-align:center">{{session('message')}}!</h2>
      @endif
      @if(session('errorMessage'))
           <h2 style="color:red;text-align:center">{{session('errorMessage')}}!</h2>
      @endif
    </div>


</div>
<div class="services-section">
		<form class="container padding_size" action="{{url('event')}}" method="post">
      @csrf
			<div class="row">
    		<div class="col-md-4 col-md-offset-3">
      		<img src="{{asset('/img/tickets/emerald.png')}}" alt="Screenshot" border="0"> <br><br>
        </div>
      	<div class="col-md-2">
          <div class="input-group qtybuttons">
            <div class="input-group-btn">
              <button class="btn btn-warning qtyminus" type="button"  data="emerald">
                <i class="fa fa-minus"></i>
              </button>
            </div>
             <input type="text" id="emerald" name="emerald" value="1" class="form-control" placeholder="" readonly>
             <div class="input-group-btn">
               <button class="btn btn-success qtyplus" type="button"  data="emerald">
                 <i class="fa fa-plus"></i>
               </button>
             </div>
           </div>
        </div>
		   </div>
			<div class="row">
    		<div class="col-md-4 col-md-offset-3">
      		<img src="{{asset('/img/tickets/turquoise.png')}}" alt="Screenshot" border="0"> <br><br>
        </div>
      	<div class="col-md-2">
          <div class="input-group qtybuttons">
            <div class="input-group-btn">
              <button class="btn btn-warning qtyminus" type="button"  data="turquoise">
                <i class="fa fa-minus"></i>
              </button>
            </div>
             <input type="text" id="turquoise" name="turquoise" value="0" class="form-control" placeholder="" readonly>
             <div class="input-group-btn">
               <button class="btn btn-success qtyplus" type="button"  data="turquoise">
                 <i class="fa fa-plus"></i>
               </button>
             </div>
           </div>
        </div>
		   </div>
			<div class="row">
    		<div class="col-md-4 col-md-offset-3">
      		<img src="{{asset('/img/tickets/banquet.png')}}" alt="Screenshot" border="0"> <br><br>
        </div>
      	<div class="col-md-2">
          <div class="input-group qtybuttons">
            <div class="input-group-btn">
              <button class="btn btn-warning qtyminus" type="button"  data="banquet">
                <i class="fa fa-minus"></i>
              </button>
            </div>
             <input type="text" id="banquet" name="banquet" value="0" class="form-control" placeholder="" readonly>
             <div class="input-group-btn">
               <button class="btn btn-success qtyplus" type="button"  data="banquet">
                 <i class="fa fa-plus"></i>
               </button>
             </div>
           </div>
        </div>
		   </div>
			<div class="row">
    		<div class="col-md-4 col-md-offset-3">
      		<img src="{{asset('/img/tickets/child.png')}}" alt="Screenshot" border="0"> <br><br>
        </div>
      	<div class="col-md-2">
          <div class="input-group qtybuttons">
            <div class="input-group-btn">
              <button class="btn btn-warning qtyminus" type="button"  data="child">
                <i class="fa fa-minus"></i>
              </button>
            </div>
             <input type="text" id="child" name="child" value="0" class="form-control" placeholder="" readonly>
             <div class="input-group-btn">
               <button class="btn btn-success qtyplus" type="button"  data="child">
                 <i class="fa fa-plus"></i>
               </button>
             </div>
           </div>
        </div>
		   </div>
       <div class="row">
     		<div class="col-md-4 col-md-offset-3">
         <input type="submit" id="submitForm" class="btn btn-success btn-lg" value="Buy">
        </div>
       </div>
		</form>
	</div>
<div style="margin-bottom:20px"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
$('.qtyplus').click(function(){
  var field=$(this).attr('data');
  var data=$('#'+field).val();
  $('#'+field).val(parseInt(data)+1);
});
$('.qtyminus').click(function(){
  var field=$(this).attr('data');
  var data=$('#'+field).val();
  if(parseInt(data)>0){
    $('#'+field).val(parseInt(data)-1);
  }
});
$("#submitForm").click(function(e){
  var emerald=$("input[name='emerald']").val();
  var turquoise=$("input[name='turquoise']").val();
  var banquet=$("input[name='banquet']").val();
  var child=$("input[name='child']").val();
  if(emerald=='0'&& turquoise=='0'&& banquet=='0'&& child=='0'){
    e.preventDefault();
    Swal.fire({
      type: 'error',
      title: 'Oops...',
      text: 'Choose at least one ticket'
    });
  }
})

</script>
@endsection
