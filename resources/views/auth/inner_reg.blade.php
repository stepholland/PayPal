<div class="form-group{{ $errors->has('memtype') ? ' has-error' : '' }}">

                            <label for="memtype" class="col-md-4 control-label">Membership Type</label>



                            <div class="col-md-6 margin_top">

                                <label class="form-check-label">

                                    <input type="radio"  required autofocus class="form-check-input" name="memtype" id="memtype" value="50"  @if(old('memtype') ==  50) checked="checked" @endif >Yearly Membership $50

                                </label>

                                <label class="form-check-label">

                                    <input type="radio" required autofocus class="form-check-input" name="memtype" id="memtype" value="250"  @if(old('memtype') ==  250) checked="checked" @endif >Lifetime Membership $250

                                </label>

                                @if ($errors->has('memtype'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('memtype') }}</strong>

                                    </span>

                                @endif  

                            </div>

                        </div>