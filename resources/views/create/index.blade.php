@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Personal Information</div>

                <div class="panel-body">

                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('address.store', auth()->user()->id)}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <label for="photo" class="col-md-4 control-label">Upload Photo</label>

                            <div class="col-md-6">
                            <input type="file" class="form-control" id="photo" aria-describedby="fileHelp">
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender <em style="color: red; font-size:18px">*</em></label>

                            <div class="col-md-6  form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio"  required autofocus class="form-check-input" name="gender" id="gender" value="male"  @if(old('gender') ===  "male") checked="checked" @endif >Male &nbsp;&nbsp;&nbsp;
                                </label>
                            </div>
                            <div class="col-md-6  form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio"  required autofocus class="form-check-input" name="gender" id="gender" value="female"  @if(old('gender') ===  "female") checked="checked" @endif >Female &nbsp;&nbsp;&nbsp;
                                </label>
                            </div>
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif  
                        </div>

                        <div class="form-group{{ $errors->has('medschool') ? ' has-error' : '' }}">
                            <label for="medschool" class="col-md-4 control-label">Medical School<em style="color: red; font-size:18px">*</em></label>

                            <div class="col-md-6">
                                <input id="medschool" type="text" class="form-control" name="medschool" value="{{ old('medschool') }}" required autofocus>

                                @if ($errors->has('medschool'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medschool') }}</strong>
                                    </span>
                                @endif  
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gradyear') ? ' has-error' : '' }}">
                            <label for="gradyear" class="col-md-4 control-label">Graduation Year<em style="color: red; font-size:18px">*</em></label>

                            <div class="col-md-6">
                                <input id="gradyear" type="date" class="form-control" name="gradyear" value="{{ old('gradyear') }}" required autofocus>

                                @if ($errors->has('gradyear'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gradyear') }}</strong>
                                    </span>
                                @endif  
                            </div>
                        </div>


                        <div class="form-group">
                        <label for="speciality" class="col-md-4 control-label">Primary Speciality</label>

                            <div class="col-md-6">
                                <select class="form-control" name="speciality" id="spciality" value="{{old('speciality')}}">
                                    <option>Please Select</option>
                                    <option value="Academic">Academic</option>
                                    <option value="Research Appointments">Research Appointments</option>
                                    <option value="Aerospace Medicine">Aerospace Medicine</option>
                                    <option value="Allergy and Immunology">Allergy and Immunology</option>
                                    <option value="Anesthesiology">Anesthesiology</option>
                                    <option value="Colon and Rectal Surgery">Colon and Rectal Surgery</option>
                                    <option value="Dermatology">Dermatology</option>
                                    <option value="Emergency Medicine">Emergency Medicine</option>
                                    <option value="Family Medicine">Family Medicine</option>
                                    <option value="General Preventive Medicine">General Preventive Medicine</option>
                                    <option value="Internal Medicine">Internal Medicine</option>
                                    <option value="Medical Genetics">Medical Genetics</option>
                                    <option value="Neurological Surgery">Neurological Surgery</option>
                                    <option value="Neurology">Neurology</option>
                                    <option value="Nuclear Medicine">Nuclear Medicine</option>
                                    <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                                    <option value="Occupational Medicine">Occupational Medicine</option>
                                    <option value="Ophthalmology">Ophthalmology</option>
                                    <option value="Orthopaedic Surgery">Orthopaedic Surgery</option>
                                    <option value="Otolaryngology">Otolaryngology</option>
                                    <option value="Pathology-Anatomic and Clinical">Pathology-Anatomic and Clinical</option>
                                    <option value="Pediatrics">Pediatrics</option>
                                    <option value="Physical Medicine and Rehabilitation">Physical Medicine and Rehabilitation</option>
                                    <option value="Plastic Surgery">Plastic Surgery</option>
                                    <option value="Plastic Surgery-Integrated">Plastic Surgery-Integrated</option>
                                    <option value="Preventive Medicine">Preventive Medicine</option>
                                    <option value="Psychiatry">Psychiatry</option>
                                    <option value="Public Health">Public Health</option>
                                    <option value="Radiation Oncology">Radiation Oncology</option>
                                    <option value="Radiology-Diagnostic">Radiology-Diagnostic</option>
                                    <option value="Surgery-General">Surgery-General</option>
                                    <option value="Thoracic Surgery">Thoracic Surgery</option>
                                    <option value="Thoracic Surgery-Integrated">Thoracic Surgery-Integrated</option>
                                    <option value="Urology">Urology</option>
                                    <option value="Vascular Surgery-Integrated">Vascular Surgery-Integrated</option>
                                </select>

                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('add1') ? ' has-error' : '' }}">
                            <label for="add1" class="col-md-4 control-label">Address 1<em style="color: red; font-size:18px">*</em></label>

                            <div class="col-md-6">
                                <input id="add1" type="text" class="form-control" name="add1" value="{{ old('add1') }}" required autofocus>

                                @if ($errors->has('add1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('add1') }}</strong>
                                    </span>
                                @endif  
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="add2" class="col-md-4 control-label">Address 2</label>

                            <div class="col-md-6">
                                <input id="add2" type="text" class="form-control" name="add2" value="{{ old('add2') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City<em style="color: red; font-size:18px">*</em></label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State<em style="color: red; font-size:18px">*</em></label>

                            <div class="col-md-6">
                                <select name="state"  class="form-control" id="state" required autofocus><!-- <select name="state" size="1" onblur="validateState(this)" class="selectfull" id="state">--> 
                                    <option value="" selected="selected">Please Select</option>
                                    <option value="AL">Alabama(AL)</option>
                                    <option value="AK">Alaska(AK)</option>
                                    <option value="AZ">Arizona(AZ)</option>
                                    <option value="AR">Arkansas(AR)</option>
                                    <option value="CA">California(CA)</option>
                                    <option value="CO">Colorado(CO)</option>
                                    <option value="CT">Connecticut(CT)</option>
                                    <option value="DE">Delaware(DE)</option>
                                    <option value="DC">District of Columbia(DC)</option>
                                    <option value="FL">Florida(FL)</option>
                                    <option value="GA">Georgia(GA)</option>
                                    <option value="HI">Hawaii(HI)</option>
                                    <option value="ID">Idaho(ID)</option>
                                    <option value="IL">Illinois(IL)</option>
                                    <option value="IN">Indiana(IN)</option>
                                    <option value="IA">Iowa(IA)</option>
                                    <option value="KS">Kansas(KS)</option>
                                    <option value="KY">Kentucky(KY)</option>
                                    <option value="LA">Louisiana(LA)</option>
                                    <option value="ME">Maine(ME)</option>
                                    <option value="MD">Maryland(MD)</option>
                                    <option value="MA">Massachusetts(MA)</option>
                                    <option value="MI">Michigan(MI)</option>
                                    <option value="MN">Minnesota(MN)</option>
                                    <option value="MS">Mississippi(MS)</option>
                                    <option value="MO">Missouri(MO)</option>
                                    <option value="MT">Montana(MT)</option>
                                    <option value="NE">Nebraska(NE)</option>
                                    <option value="NV">Nevada(NV)</option>
                                    <option value="NH">New Hampshire(NH)</option>
                                    <option value="NJ">New Jersey(NJ)</option>
                                    <option value="NM">New Mexico(NM)</option>
                                    <option value="NY">New York(NY)</option>
                                    <option value="NC">North Carolina(NC)</option>
                                    <option value="ND">North Dakota(ND)</option>
                                    <option value="OH">Ohio(OH)</option>
                                    <option value="OK">Oklahoma(OK)</option>
                                    <option value="OR">Oregon(OR)</option>
                                    <option value="PA">Pennsylvania(PA)</option>
                                    <option value="PR">Puerto Rico(PR)</option>
                                    <option value="RI">Rhode Island(RI)</option>
                                    <option value="SC">South Carolina(SC)</option>
                                    <option value="SD">South Dakota(SD)</option>
                                    <option value="TN">Tennessee(TN)</option>
                                    <option value="TX">Texas(TX)</option>
                                    <option value="UT">Utah(UT)</option>
                                    <option value="VT">Vermont(VT)</option>
                                    <option value="VA">Virginia(VA)</option>
                                    <option value="WA">Washington(WA)</option>
                                    <option value="WV">West Virginia(WV)</option>
                                    <option value="WI">Wisconsin(WI)</option>
                                    <option value="WY">Wyoming(WY)</option>
                                </select>



                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif  
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-4 control-label">Zip<em style="color: red; font-size:18px">*</em></label>

                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}" required autofocus>

                                @if ($errors->has('zip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif  
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone<em style="color: red; font-size:18px">*</em></label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif  
                            </div>
                        </div>  
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
@endsection