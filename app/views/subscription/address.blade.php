@extends('template.default')

@section('content')




    <div class="container-eight">

        <a style="margin:0 auto;position: relative;display: block;text-align: center;" href="{{ URL::action('subscription') }}" id="top">
            <img id="logo" src="{{ asset('imgs/macroplatelogo.svg') }}" alt="">
        </a>
        <div class="boxtwo">
            <div class="textbox-thanks">

                <h3>Update Your Delivery Info</h3>

                <div style="padding-top: 20px;min-height: 100vh;text-align: center;width:100%; display: block; position: relative;margin-left: auto;margin-right: auto;">

                    <form action="{{ URL::action('subscription-change-address-post') }}" class="login-form" method="post" id="subscription-form">


                        <div class="row">

                            <div class="col-xs-12 col-sm-offset-3 col-sm-3 col-md-offset-3 col-md-3 col-lg-offset-3 col-lg-6">
                                <input ng-model="address" name="address" type="text" autocapitalize="off" autocorrect="off" placeholder="Address"{{ (Input::old('address')) ? ' value="' . e(Input::old('address')) . '"' : '' }}>
                                @if($errors->has('address'))
                                    <p class="error-mess">{{ $errors->first('address') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5 col-sm-offset-3 col-sm-3 col-md-offset-3 col-md-3 col-lg-offset-3 col-lg-3">
                                <input ng-model="city" name="city" type="text" autocapitalize="on" autocorrect="off" placeholder="City"{{ (Input::old('city')) ? ' value="' . e(Input::old('city')) . '"' : '' }}>
                                @if($errors->has('city'))
                                    <p class="error-mess">{{ $errors->first('city') }}</p>
                                @endif
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-1">
                                <input ng-model="state" name="state" type="text" autocapitalize="on" placeholder="State"{{ (Input::old('state')) ? ' value="' . e(Input::old('state')) . '"' : '' }}>
                                @if($errors->has('state'))
                                    <p class="error-mess">{{ $errors->first('state') }}</p>
                                @endif
                            </div>
                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2">
                                <input ng-model="zipCode" name="zip_code" type="text" placeholder="Zip Code"{{ (Input::old('zip_code')) ? ' value="' . e(Input::old('zip_code')) . '"' : '' }}>
                                @if($errors->has('zip_code'))
                                    <p class="error-mess">{{ $errors->first('zip_code') }}</p>
                                @endif
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-3 col-lg-6">
                                <textarea rows="5" style="min-height: 100px;overflow: scroll;" type='text' id='delivery_notes' name='delivery_notes' placeholder="Enter Delivery Notes Here"{{ (Input::old('delivery_notes')) ? ' value="' . e(Input::old('delivery_notes')) . '"' : '' }}></textarea><br>
                            </div>
                        </div>



                        <div class="col-xs-12 col-sm-offset-3 col-sm-3 col-md-offset-3 col-md-3 col-lg-offset-4 col-lg-4">
                            <div class="access-code-input" style="position: relative; margin-top: 0px;">

                                <h3 style="color:#000;font-family:'Open Sans',sans-serif;font-weight:300;font-size:1.5em;margin-bottom: 10px;">Is there an entrance code?</h3>


                                <input type="radio" onclick="javascript:yesnoCheck();" class="css-checkbox" id="noCheck" name="yesno" checked="checked"><label for="noCheck" class="css-label radGroup1 radGroup1">No</label>

                                <input type="radio" onclick="javascript:yesnoCheck();" class="css-checkbox" id="yesCheck" name="yesno"><label for="yesCheck" class="css-label radGroup1 radGroup1">Yes</label>

                                <div class="col-lg-3" id="ifYes" style="color: #fff;margin-top: -5px;position: relative;visibility:hidden;display:inline;width: 50%;float: right;">
                                    <input type='text' value="" id='entrance_code' name='entrance_code' placeholder="Entrance Code"><br>
                                </div>

                            </div>
                        </div>

                                <div class="col-lg-12">
                                    <button style="margin-top: 10px" class="downloadbutton">Update Address</button>


                                </div>

                    </form>

                </div>

            </div>


        </div>



    </div>


@stop