@extends('layouts.app')

@section('content')

<div class="container"  style='margin-top: 40px'>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


            <div class="panel panel-default">
            <div class="panel-heading"><center style="color: blue; font-weight: 700;">Lifetime Membership: $250, Annual Membership: $25</center></div>
                <div class="strap"style="font-weight:700; color:#314504; width:100%; height=100%; background-color:coral; margin-bottom:20px; padding:2px 40%">General Information
</div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}">
                       {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input style="border-color: salmon;" id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="mname" type="text" class="form-control" name="mname" value="{{ old('mname') }}"  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" style="border-color: salmon;" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-sm-2 form-check-inline">
                            <label class="form-check-label">
                                    <input type="radio"  required autofocus class="form-check-input" name="gender" id="gender" value="male"  @if(old('gender') ===  "male") checked="checked" @endif > Male                           </label>
                            </div>
                            <div class="col-sm-2  form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio"  required autofocus class="form-check-input" name="gender" id="gender" value="female"  @if(old('gender') ===  "female") checked="checked" @endif > Female 
                                </label>
                            </div>
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                               @endif
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input style="border-color: salmon;" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input style="border-color: salmon;" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input style="border-color: salmon;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="card-header" style="font-weight:700; color:#314504; width:100%; height=100%; background-color:coral; margin-bottom:20px; padding:2px 30%">Personal Information</div>
                       
                        <div class="form-group row">
                            <label for="school" class="col-md-4 col-form-label text-md-right">{{ __('Medical School') }}</label>
                            <div class="col-md-6">
                                <input style="border-color: salmon;" id="school" type="text" class="form-control" name="school" value="{{ old('school') }}" required>
                            </div>
                        </div>


                        <div class="form-group row" style="display:none">
                            <label for="speciality" class="col-md-4 col-form-label text-md-right">Speciality</label>
                            <div class="col-md-6">
                                <select class="form-control" name="speciality" id="spciality" value="NaN">
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

                        <div class="form-group row">
                            <label for="add1" class="col-md-4 col-form-label text-md-right">{{ __('Mailing Address') }}</label>
                            <div class="col-md-6">
                                <input style="border-color: salmon;" id="add1" type="text" class="form-control{{ $errors->has('add1') ? ' is-invalid' : '' }}" name="add1" value="{{ old('add1') }}" required autofocus>
                                @if ($errors->has('add1'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('add1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="add2" class="col-md-4 col-form-label text-md-right">{{ __('Mailing Address 2') }}</label>

                            <div class="col-md-6">
                                <input id="add2" type="text" class="form-control" name="add2" value="{{ old('add2') }}"  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                            <div class="col-md-6">
                                <input style="border-color: salmon;" id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>
                            <div class="col-md-6">
                                <input style="border-color: salmon;" id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip" class="col-md-4 col-form-label text-md-right">{{ __('Zip') }}</label>
                            <div class="col-md-6">
                                <input style="border-color: salmon;" id="zip" type="text" class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" name="zip" value="{{ old('zip') }}" required autofocus>
                                @if ($errors->has('zip'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input style="border-color: salmon;" id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        @if($errors->any())
        <div class="row collapse">
            <ul class="alert-box warning radius">
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
