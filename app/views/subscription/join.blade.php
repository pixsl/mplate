@extends('template.default')


@section('content')
<div class="checkout-bg">

    <div id="main-container">
        <div class="top-of-checkout">
            <a href="{{ URL::action('home') }}"><img id="checkout-logo" style="margin-left:15px;position: relative;display: block;height: 70px;" src="{{ asset('imgs/macro-man-logo.svg') }}" /></a>
            <img id="checkout-logo" style="margin-left: 80px;position: relative;margin-top:-70px;float: left;display: block;height: 70px;" src="{{ asset('imgs/healthy-eating-outlines.svg') }}" />
            <div class="need-help">
                <p>Having trouble? Call us at <b style="color:#bcbcbc">800-555-4949</b></p>
            </div>
        </div>

        <div id="main" ng-app>
            <img style="position: relative; margin-left: auto;margin-right: auto; text-align: center;margin-top: 0px;opacity: 0.4;display: block;" src="{{ asset('imgs/bottomshadow.png') }}" />

            <form class="login-form" id="subscription-form" method="POST" action="{{ URL::action('subscription-join') }}">

                @if($errors->has('zip_code'))
                    <div class="error-notice">
                        <div class="oaerror warning">
                            <strong>Sorry :(</strong> - {{ $errors->first('zip_code') }}
                        </div>
                    </div>
                @endif

                @if($errors->has('coupon_code'))
                    <div class="error-notice">
                        <div class="oaerror danger">
                            <strong>Error</strong> - {{ $errors->first('coupon_code') }}
                        </div>
                    </div>
                @endif

                @if($errors->has('first_name'))
                    <div class="error-notice">
                        <div class="oaerror danger">
                            <strong>Error</strong> - {{ $errors->first('first_name') }}
                        </div>
                    </div>
                @endif
                @if($errors->has('last_name'))
                    <div class="error-notice">
                        <div class="oaerror danger">
                            <strong>Error</strong> - {{ $errors->first('last_name') }}
                        </div>
                    </div>
                @endif
                @if($errors->has('phone'))
                    <div class="error-notice">
                        <div class="oaerror danger">
                            <strong>Error</strong> - {{ $errors->first('phone') }}
                        </div>
                    </div>
                @endif
                @if($errors->has('email'))
                    <div class="error-notice">
                        <div class="oaerror danger">
                            <strong>Error</strong> - {{ $errors->first('email') }}
                        </div>
                    </div>
                @endif
                @if($errors->has('password'))
                    <div class="error-notice">
                        <div class="oaerror danger">
                            <strong>Error</strong> - {{ $errors->first('password') }}
                        </div>
                    </div>
                @endif
                @if($errors->has('password_again'))
                    <div class="error-notice">

                        <div class="oaerror danger">
                            <strong>Error</strong> - {{ $errors->first('password_again') }}
                        </div>
                    </div>
                @endif

                    <fieldset>
                        <legend>Personal Info</legend>

                        <h1 style="font-weight: 300;margin-bottom:30px;text-align: center;display: block;">Personal Info</h1>


                        <div class="row">

                            <div class="col-xs-12 col-sm-offset-3 col-sm-3 col-md-offset-3 col-md-3 col-lg-offset-3 col-lg-3">
                                <input ng-model="firstName" name="first_name" type="text" autocapitalize="on" autocorrect="off" placeholder="First Name"{{ (Input::old('first_name')) ? ' value="' . e(Input::old('first_name')) . '"' : '' }}>
                                @if($errors->has('first_name'))
                                    <p class="error-mess">{{ $errors->first('first_name') }}</p>
                                @endif
                            </div>

                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <input ng-model="lastName" name="last_name" type="text" autocapitalize="on" autocorrect="off" placeholder="Last Name"{{ (Input::old('last_name')) ? ' value="' . e(Input::old('last_name')) . '"' : '' }}>
                                @if($errors->has('last_name'))
                                    <p class="error-mess">{{ $errors->first('last_name') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-offset-3 col-sm-3 col-md-offset-3 col-md-3 col-lg-offset-3 col-lg-3">
                                <input ng-model="phone" name="phone" type="text" placeholder="Phone Number"{{ (Input::old('phone')) ? ' value="' . e(Input::old('phone')) . '"' : '' }}>
                                @if($errors->has('phone'))
                                    <p class="error-mess">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <input name="email" type="text" autocapitalize="off" autocorrect="off" placeholder="Email"{{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}>
                                @if($errors->has('email'))
                                    <p class="error-mess">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-offset-3 col-sm-3 col-md-offset-3 col-md-3 col-lg-offset-3 col-lg-3">
                                <input name="password" type="password" placeholder="Password">
                                @if($errors->has('password'))
                                    <p class="error-mess">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <input name="password_again" type="password" placeholder="Password Again">
                                @if($errors->has('password_again'))
                                    <p class="error-mess">{{ $errors->first('password_again') }}</p>
                                @endif
                            </div>
                        </div>

                        <hr>
                    </fieldset>

                <fieldset>
                    <legend>Choose Plan</legend>



                        <h1 style="font-weight: 300;text-align: center;display: block;">Choose a Plan</h1>



                        <div class="cd-tabs-plans">
                            <nav>
                                <ul class="cd-tabs-navigation-plans">
                                    <li><a data-content="traditional" class="selected" href="#0">Traditional</a></li>
                                    <li><a data-content="high-pro" href="#0">High Protein</a></li>
                                    <li><a data-content="high-carb" href="#0">High Carb</a></li>
                                </ul> <!-- cd-tabs-navigation -->
                            </nav>

                            <ul class="cd-tabs-content-plans">
                                <li data-content="traditional" class="selected" style="padding-top: 10px;">

                                    <h3 style="font-family:'Open Sans';font-weight: 300;font-size:2em;text-align: center;display: block;">Traditonal Plans</h3>
                                    <hr>

                                    <div class="products-price-box">
                                        <div class="row">
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">On The Go</h3>

                                                <p class="header">2 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio1" class="css-checkbox" value="trad-2-5"/><label for="radio1" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio2" class="css-checkbox" value="trad-2-6"/><label for="radio2" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio3" class="css-checkbox" value="trad-2-7"/><label for="radio3" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">Standard</h3>

                                                <p class="header">3 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio4" class="css-checkbox" value="trad-3-5"/><label for="radio4" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio5" class="css-checkbox" value="trad-3-6"/><label for="radio5" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio6" class="css-checkbox" value="trad-3-7"/><label for="radio6" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">Performance</h3>

                                                <p class="header">4 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio7" class="css-checkbox" value="trad-4-5"/><label for="radio7" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio8" class="css-checkbox" value="trad-4-6"/><label for="radio8" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio9" class="css-checkbox" value="trad-4-7"/><label for="radio9" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">Athlete</h3>

                                                <p class="header">5 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio10" class="css-checkbox" value="trad-5-5"/><label for="radio10" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio11" class="css-checkbox" value="trad-5-6"/><label for="radio11" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio12" class="css-checkbox" value="trad-5-7"/><label for="radio12" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                        </div><!-- /.row -->


                                    </div>
                                </li> <!-- li-traditional -->

                                <li data-content="high-pro" style="padding-top: 10px;">

                                    <h3 style="font-family:'Open Sans';font-weight: 300;font-size:2em;text-align: center;display: block;">High Protein Plans</h3>
                                    <hr>
                                    <div class="products-price-box">
                                        <div class="row">
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">On The Go</h3>

                                                <p class="header">2 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio13" class="css-checkbox" value="high-pro-2-5"/><label for="radio13" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio14" class="css-checkbox" value="high-pro-2-6"/><label for="radio14" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio15" class="css-checkbox" value="high-pro-2-7"/><label for="radio15" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">Standard</h3>

                                                <p class="header">3 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio16" class="css-checkbox" value="high-pro-3-5"/><label for="radio16" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio17" class="css-checkbox" value="high-pro-3-6"/><label for="radio17" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio18" class="css-checkbox" value="high-pro-3-7"/><label for="radio18" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">Performance</h3>

                                                <p class="header">4 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio19" class="css-checkbox" value="high-pro-4-5"/><label for="radio19" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio20" class="css-checkbox" value="high-pro-4-6"/><label for="radio20" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio21" class="css-checkbox" value="high-pro-4-7"/><label for="radio21" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">Athlete</h3>

                                                <p class="header">5 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio22" class="css-checkbox" value="high-pro-5-5"/><label for="radio22" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio23" class="css-checkbox" value="high-pro-5-6"/><label for="radio23" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio24" class="css-checkbox" value="high-pro-5-7"/><label for="radio24" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                        </div><!-- /.row -->


                                    </div>
                                </li> <!-- li-high-pro -->

                                <li data-content="high-carb" style="padding-top: 10px;">
                                    <h3 style="font-family:'Open Sans';font-weight: 300;font-size:2em;text-align: center;display: block;">High Carb Plans</h3>
                                    <hr>
                                    <div class="products-price-box">
                                        <div class="row">
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">On The Go</h3>

                                                <p class="header">2 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio25" class="css-checkbox" value="high-carb-2-5"/><label for="radio25" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio26" class="css-checkbox" value="high-carb-2-6"/><label for="radio26" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio27" class="css-checkbox" value="high-carb-2-7"/><label for="radio27" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">Standard</h3>

                                                <p class="header">3 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio28" class="css-checkbox" value="high-carb-3-5"/><label for="radio28" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio29" class="css-checkbox" value="high-carb-3-6"/><label for="radio29" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio30" class="css-checkbox" value="high-carb-3-7"/><label for="radio30" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">Performance</h3>

                                                <p class="header">4 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio31" class="css-checkbox" value="high-carb-4-5"/><label for="radio31" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio32" class="css-checkbox" value="high-carb-4-6"/><label for="radio32" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio33" class="css-checkbox" value="high-carb-4-7"/><label for="radio33" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                            <div class="col-lg-3 prices-table" style="padding-top: 10px;">

                                                <h3 class="top-spacer-small subtract-bottom">Athlete</h3>

                                                <p class="header">5 meals a day</p>
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio34" class="css-checkbox" value="high-carb-5-5"/><label for="radio34" class="css-label radGroup1 radGroup1">Five Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio35" class="css-checkbox" value="high-carb-5-6"/><label for="radio35" class="css-label radGroup1 radGroup1">Six Day Plan ($79/week)</label>
                                                <br />
                                                <hr>
                                                <input style="bottom:10px;" type="radio" ng-model="plan" name="plan" id="radio36" class="css-checkbox" value="high-carb-5-7"/><label for="radio36" class="css-label radGroup1 radGroup1">Seven Day Plan ($79/week)</label>
                                                <br />
                                                <hr>

                                            </div><!-- /.col-lg-4 -->
                                        </div><!-- /.row -->


                                    </div>
                                </li> <!-- li-high-carb -->

                            </ul> <!-- cd-tabs-content-plans -->
                        </div> <!-- cd-tabs-plans -->

                        <div class="row">

                            <div class="large-6 columns">
                                <label>

                                </label>
                            </div>
                        </div>

                    <hr>
                </fieldset>

                <fieldset>
                    <legend>Allergies & Dislikes</legend>

                    <h1 style="font-weight: 300;margin-bottom:30px;text-align: center;display: block;">Allergies & Dislikes</h1>

                    <div class="cd-tabs">
                        <nav>
                            <ul class="cd-tabs-navigation">
                                <li><a data-content="dairy" class="selected" href="#0">Dairy</a></li>
                                <li><a data-content="eggs" href="#0">Eggs</a></li>
                                <li><a data-content="fish" href="#0">Fish</a></li>
                                <li><a data-content="fruit" href="#0">Fruit</a></li>
                                <li><a data-content="nuts" href="#0">Nuts/Seeds</a></li>
                                <li><a data-content="pork" href="#0">Pork</a></li>
                                <li><a data-content="poultry" href="#0">Poultry</a></li>
                                <li><a data-content="meat" href="#0">Red Meat</a></li>
                                <li><a data-content="sauces" href="#0">Sauces/Spices</a></li>
                                <li><a data-content="shellfish" href="#0">Shellfish</a></li>
                                <li><a data-content="soy" href="#0">Soy</a></li>
                                <li><a data-content="veggies" href="#0">Veggies</a></li>
                                <li><a data-content="grains" href="#0">Whole Grains</a></li>
                            </ul> <!-- cd-tabs-navigation -->
                        </nav>

                        <ul class="cd-tabs-content">
                            <li data-content="dairy" class="selected">

                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-offset-4 col-lg-2">
                                                <input type="checkbox" value="1" name="cheese" id="cheese" class="css-checkbox" /><label for="cheese" class="css-label">Cheese</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                                <input type="checkbox" value="1" name="yogurt" id="yogurt" class="css-checkbox" /><label for="yogurt" class="css-label">Greek Yogurt</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </li>

                            <li data-content="eggs">

                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-offset-3 col-lg-2">
                                                <input type="checkbox" value="1" name="egg_white" id="egg_white" class="css-checkbox" /><label for="egg_white" class="css-label">Egg Whites</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                                                <input type="checkbox" value="1" name="egg_whole" id="egg_whole" class="css-checkbox" /><label for="egg_whole" class="css-label">Egg Whole</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                                                <input type="checkbox" value="1" name="frittata" id="frittata" class="css-checkbox" /><label for="frittata" class="css-label">Frittata</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </li>

                            <li data-content="fish">

                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="ahi_tuna" id="ahi_tuna" class="css-checkbox" /><label for="ahi_tuna" class="css-label">Ahi Tuna</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="cod" id="cod" class="css-checkbox" /><label for="cod" class="css-label">Cod</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="grouper" id="grouper" class="css-checkbox" /><label for="grouper" class="css-label">Grouper</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="haddock" id="haddock" class="css-checkbox" /><label for="haddock" class="css-label">Haddock</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="mahi_mahi" id="mahi_mahi" class="css-checkbox" /><label for="mahi_mahi" class="css-label">Mahi Mahi</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="salmon" id="salmon" class="css-checkbox" /><label for="salmon" class="css-label">Salmon</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="tuna" id="tuna" class="css-checkbox" /><label for="tuna" class="css-label">Tuna</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </li>

                            <li data-content="fruit">
                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="apples" id="apples" class="css-checkbox" /><label for="apples" class="css-label">Apples</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="apricots" id="apricots" class="css-checkbox" /><label for="apricots" class="css-label">Apricots</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="blackberries" id="blackberries" class="css-checkbox" /><label for="blackberries" class="css-label">Blackberries</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="blueberries" id="blueberries" class="css-checkbox" /><label for="blueberries" class="css-label">Blueberries</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="coconut" id="coconut" class="css-checkbox" /><label for="coconut" class="css-label">Coconut</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="grapefruit" id="grapefruit" class="css-checkbox" /><label for="grapefruit" class="css-label">Grapefruit</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="kiwi" id="kiwi" class="css-checkbox" /><label for="kiwi" class="css-label">Kiwi</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="mango" id="mango" class="css-checkbox" /><label for="mango" class="css-label">Mangos</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="peaches" id="peaches" class="css-checkbox" /><label for="peaches" class="css-label">Peaches</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="pineapple" id="pineapple" class="css-checkbox" /><label for="pineapple" class="css-label">Pineapple</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="raisins" id="raisins" class="css-checkbox" /><label for="raisins" class="css-label">Raisins</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="raspberries" id="raspberries" class="css-checkbox" /><label for="raspberries" class="css-label">Raspberries</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="strawberries" id="strawberries" class="css-checkbox" /><label for="strawberries" class="css-label">Strawberries</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-content="nuts">

                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="almonds" id="almonds" class="css-checkbox" /><label for="almonds" class="css-label">Almonds</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="cashews" id="cashews" class="css-checkbox" /><label for="cashews" class="css-label">Cashews</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="peanuts" id="peanuts" class="css-checkbox" /><label for="peanuts" class="css-label">Peanuts</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="pecans" id="pecans" class="css-checkbox" /><label for="pecans" class="css-label">Pecans</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="pistachios" id="pistachios" class="css-checkbox" /><label for="pistachios" class="css-label">Pistachios</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="sesame" id="sesame" class="css-checkbox" /><label for="sesame" class="css-label">Sesame Seeds</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="sunflower_seed_butter" id="sunflower_seed_butter" class="css-checkbox" /><label for="sunflower_seed_butter" class="css-label">Sunflower Seed Butter</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-content="pork">
                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-offset-3 col-lg-2">
                                                <input type="checkbox" value="1" name="ham" id="ham" class="css-checkbox" /><label for="ham" class="css-label">Ham</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                                                <input type="checkbox" value="1" name="pork" id="pork" class="css-checkbox" /><label for="pork" class="css-label">Pork</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                                                <input type="checkbox" value="1" name="pork_bacon" id="pork_bacon" class="css-checkbox" /><label for="pork_bacon" class="css-label">Pork Bacon</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-content="poultry">
                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="chicken_breast" id="chicken_breast" class="css-checkbox" /><label for="chicken_breast" class="css-label">Chicken Breast</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="chicken_sausage" id="chicken_sausage" class="css-checkbox" /><label for="chicken_sausage" class="css-label">Chicken Sausage</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="ground_chicken" id="ground_chicken" class="css-checkbox" /><label for="ground_chicken" class="css-label">Ground Chicken</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="ground_turkey" id="ground_turkey" class="css-checkbox" /><label for="ground_turkey" class="css-label">Ground Turkey</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="turkey_bacon" id="turkey_bacon" class="css-checkbox" /><label for="turkey_bacon" class="css-label">Turkey Bacon</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="turkey_breast" id="turkey_breast" class="css-checkbox" /><label for="turkey_breast" class="css-label">Turkey Breast</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="turkey_sausage" id="turkey_sausage" class="css-checkbox" /><label for="turkey_sausage" class="css-label">Turkey Sausage</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-content="meat">
                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="ground_beef" id="ground_beef" class="css-checkbox" /><label for="ground_beef" class="css-label">Ground Beef</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="ground_bison" id="ground_bison" class="css-checkbox" /><label for="ground_bison" class="css-label">Ground Bison</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="ground_sirloin" id="ground_sirloin" class="css-checkbox" /><label for="ground_sirloin" class="css-label">Ground Sirloin</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="tenderloin" id="tenderloin" class="css-checkbox" /><label for="tenderloin" class="css-label">Tenderloin</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-content="sauces">
                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="cilantro" id="cilantro" class="css-checkbox" /><label for="cilantro" class="css-label">Cilantro</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="marinara" id="marinara" class="css-checkbox" /><label for="marinara" class="css-label">Marinara</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="mustard" id="mustard" class="css-checkbox" /><label for="mustard" class="css-label">Mustard</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="spicy" id="spicy" class="css-checkbox" /><label for="spicy" class="css-label">Spicy</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-content="shellfish">
                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="crab" id="crab" class="css-checkbox" /><label for="crab" class="css-label">Crab</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="lobster" id="lobster" class="css-checkbox" /><label for="lobster" class="css-label">Lobster</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="scallops" id="scallops" class="css-checkbox" /><label for="scallops" class="css-label">Scallops</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="shrimp" id="shrimp" class="css-checkbox" /><label for="shrimp" class="css-label">Shrimp</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-content="soy">
                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-offset-3 col-lg-2">
                                                <input type="checkbox" value="1" name="edamame" id="edamame" class="css-checkbox" /><label for="edamame" class="css-label">Edamame</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                                                <input type="checkbox" value="1" name="soy_sauce" id="soy_sauce" class="css-checkbox" /><label for="soy_sauce" class="css-label">Soy Sauce</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                                                <input type="checkbox" value="1" name="tofu" id="tofu" class="css-checkbox" /><label for="tofu" class="css-label">Tofu</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-content="veggies">
                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="artichoke" id="artichoke" class="css-checkbox" /><label for="artichoke" class="css-label">Artichoke</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="asparagus" id="asparagus" class="css-checkbox" /><label for="asparagus" class="css-label">Asparagus</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="avocado" id="avocado" class="css-checkbox" /><label for="avocado" class="css-label">Avocado</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="beets" id="beets" class="css-checkbox" /><label for="beets" class="css-label">Beets</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="bokchoy" id="bokchoy" class="css-checkbox" /><label for="bokchoy" class="css-label">BokChoy</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="broccoli" id="broccoli" class="css-checkbox" /><label for="broccoli" class="css-label">Broccoli</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="brussels_spouts" id="brussels_spouts" class="css-checkbox" /><label for="brussels_spouts" class="css-label">Brussels Spouts</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="cabbage" id="cabbage" class="css-checkbox" /><label for="cabbage" class="css-label">Cabbage</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="carrots" id="carrots" class="css-checkbox" /><label for="carrots" class="css-label">Carrots</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="cauliflower" id="cauliflower" class="css-checkbox" /><label for="cauliflower" class="css-label">Cauliflower</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="corn" id="corn" class="css-checkbox" /><label for="corn" class="css-label">Corn</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="cucumbers" id="cucumbers" class="css-checkbox" /><label for="cucumbers" class="css-label">Cucumbers</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="eggplant" id="eggplant" class="css-checkbox" /><label for="eggplant" class="css-label">Eggplant</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="green_beans" id="green_beans" class="css-checkbox" /><label for="green_beans" class="css-label">Green Beans</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="kale" id="kale" class="css-checkbox" /><label for="kale" class="css-label">Kale</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="olives" id="olives" class="css-checkbox" /><label for="olives" class="css-label">Olives</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="onions" id="onions" class="css-checkbox" /><label for="onions" class="css-label">Onions</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="peas" id="peas" class="css-checkbox" /><label for="peas" class="css-label">Peas</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="peppers" id="peppers" class="css-checkbox" /><label for="peppers" class="css-label">Peppers</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="pickles" id="pickles" class="css-checkbox" /><label for="pickles" class="css-label">Pickles</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="sea_weed" id="sea_weed" class="css-checkbox" /><label for="sea_weed" class="css-label">Seaweed</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="spaghetti_squash" id="spaghetti_squash" class="css-checkbox" /><label for="spaghetti_squash" class="css-label">Spaghetti Squash</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="spinach" id="spinach" class="css-checkbox" /><label for="spinach" class="css-label">Spinach</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="squash" id="squash" class="css-checkbox" /><label for="squash" class="css-label">Squash</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="sweet_potato" id="sweet_potato" class="css-checkbox" /><label for="sweet_potato" class="css-label">Sweet Potato</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="tomato" id="tomato" class="css-checkbox" /><label for="tomato" class="css-label">Tomato</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="zucchini" id="zucchini" class="css-checkbox" /><label for="zucchini" class="css-label">Zucchini</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-content="grains">
                                <div class="col-lg-12">
                                    <div class="dislikes">
                                        <div class="row">
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="brown_rice" id="brown_rice" class="css-checkbox" /><label for="brown_rice" class="css-label">Brown Rice</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="couscous" id="couscous" class="css-checkbox" /><label for="couscous" class="css-label">Couscous</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="orzo" id="orzo" class="css-checkbox" /><label for="orzo" class="css-label">Orzo</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="quinoa" id="quinoa" class="css-checkbox" /><label for="quinoa" class="css-label">Quinoa</label>
                                            </div>
                                            <div style="margin-bottom:5px;" class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                                <input type="checkbox" value="1" name="wheat_pasta" id="wheat_pasta" class="css-checkbox" /><label for="wheat_pasta" class="css-label">Wheat Pasta</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul> <!-- cd-tabs-content -->
                    </div> <!-- cd-tabs -->

                    <hr>
                </fieldset>
                <fieldset>
                    <legend>Delivery Info</legend>

                    <h1 style="font-weight: 300;margin-bottom:30px;text-align: center;display: block;">Delivery Info</h1>


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
                        <textarea rows="5" style="min-height: 100px;overflow: scroll;" value="" type='text' id='delivery_notes' name='delivery_notes' placeholder="Enter Delivery Notes Here"></textarea><br>
                        </div>
                    </div>



                        <div class="col-xs-12 col-sm-offset-3 col-sm-3 col-md-offset-3 col-md-3 col-lg-offset-4 col-lg-4">
                            <div class="access-code-input" style="position: relative; margin-top: 0px;">

                                <h3 style="font-family:'Open Sans',sans-serif;font-weight:300;margin-bottom: 10px;">Is there an entrance code?</h3>


                                <input type="radio" onclick="javascript:yesnoCheck();" class="css-checkbox" id="noCheck" name="yesno" checked="checked"><label for="noCheck" class="css-label radGroup1 radGroup1">No</label>

                                <input type="radio" onclick="javascript:yesnoCheck();" class="css-checkbox" id="yesCheck" name="yesno"><label for="yesCheck" class="css-label radGroup1 radGroup1">Yes</label>

                                <div class="col-lg-3" id="ifYes" style="color: #fff;margin-top: -5px;position: relative;visibility:hidden;display:inline;width: 50%;float: right;">
                                    <input type='text' value="" id='entrance_code' name='entrance_code' placeholder="Entrance Code"><br>
                                </div>

                            </div>
                        </div>

                    <hr>

                </fieldset>
                    <fieldset>
                        <legend>Review & Checkout</legend>

                        <h1 style="font-weight: 300;margin-bottom:30px;text-align: center;display: block;">Review & Checkout</h1>

                        <div class="row">
                                    <div class="col-lg-offset-4 col-lg-4 card-input wave-texture">

                                        <div class="stripe-errors panel hide"></div>


                                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-12" style="z-index: 999999999999999999999999999;">

                                            <div>
                                                <input name="number" type="text" data-stripe="number" placeholder="Card Number">
                                                @if($errors->has('number'))
                                                    {{ $errors->first('number') }}
                                                @endif
                                            </div>

                                        </div>

                                        <div style="z-index: 99999999999999999999;" class="col-xs-4 col-sm-3 col-md-3 col-lg-4">
                                            <input name="exp-month" type="number" data-stripe="exp-month" placeholder="MM">
                                            @if($errors->has('exp-month'))
                                                {{ $errors->first('exp-month') }}
                                            @endif
                                        </div>
                                        <div style="z-index: 99999999999999999999;" class="col-xs-4 col-sm-3 col-md-3 col-lg-4">
                                            <input name="exp-year" type="number" data-stripe="exp-year" placeholder="YY">
                                            @if($errors->has('exp-year'))
                                                {{ $errors->first('exp-year') }}
                                            @endif
                                        </div>
                                        <div style="z-index: 99999999999999999999;" class="col-xs-4 col-sm-3 col-md-3 col-lg-4">
                                            <input name="cvc" type="number" data-stripe="cvc" placeholder="CVC">
                                            @if($errors->has('cvc'))
                                                {{ $errors->first('cvc') }}
                                            @endif
                                        </div>

                                            <div class="col-lg-5">

                                                <h3 style="border-bottom: 1px solid #c4c4c4;font-size: 0.9em;font-family:'Open Sans',sans-serif;font-weight:600;margin-top: 5px;color:#6b6b6b;">Want a discount?</h3>
                                            </div>
                                            <div class="col-lg-7">

                                                <input type="text" id="coupon_code" name="coupon_code" value="" placeholder="Enter Promo Code"/>
                                                @if($errors->has('coupon_code'))
                                                    {{ $errors->first('coupon_code') }}
                                                @endif

                                            </div>


                                    </div>


                        </div>

                        <div class="row">

                            <div class="col-lg-offset-3 col-lg-6">
                                <hr>

                                <div id="terms" class="col-lg-12 terms">
                                    Terms and conditions

                                    Thank you for being a valued client!

                                    In an effort to provide you with the highest level of service and to ensure your ongoing satisfaction, we need to inform you about our policies.</p>

                                    Home deliveries In the los angeles area will arrive between 12:00 am and 7:00 am.

                                    Bag Policy:

                                    Our food containers are BPA-free, 100% recyclable, and yours to keep. However, cooler bags and ice packs must be returned. Please be sure to place the cooler bag containing the ice packs outside prior to your next scheduled delivery so our driver can retrieve it. There is a NON-REFUNDABLE $20.00 charge assessed for unreturned materials within a 7-day period.</p>

                                    <h3>Changes, Freezes, and Cancellation to Your Account:</h3>
                                    <p>If you wish to make any changes to your meal plan, place a service freeze, or cancel your account, you must do so no later than Wednesdays at 6:00 pm. After this deadline has passed, the next delivery or pick up is considered confirmed. If you have chosen to select your own meals even before this deadline, delivery is also considered confirmed and no changes can be made to your account for that week. Any changes made after the cutoff will become effective the following week.</p>

                                    <h3>Same-Day Notification Policy:</h3>
                                    <p>If for any reason, you have a discrepancy with your order (i.e. did not receive order, missing or incorrect items, etc.) please contact us the SAME DAY of your delivery/pickup so we can resolve the issue in a timely manner. If you do not contact us by 8:00 pm on your scheduled delivery/pickup date, we will not be able to correct the issue.</p>

                                    <h3>Billing:</h3>
                                    <p>All accounts are automatically billed to your credit or debit card every Friday morning for the upcoming week of service based on the a weekly billing frequency.</p>

                                    <h3>Refund Policy:</h3>
                                    <p>All charges are non-refundable. Unfortunately, there can be no exceptions because of the advanced planning necessary for meal production and delivery scheduling. Once your payment has been processed, there are no refunds or credits. As a member, you are responsible for providing adequate notice for all account updates including, but not limited to, meal packages, billing information, service freezes, and cancellations.</p>

                                    <h3>Food Allergies and/or Food-based Medical Conditions</h3>
                                    <p>If you have any life-threatening food allergies or medical conditions that are food-related, we strongly recommend you discontinue service immediately. Fresh Meal Plan will not assume any liability for adverse reactions to foods consumed.</p>

                                    <p>YOU MUST CONSULT YOUR DOCTOR IF YOU ARE ON MEDICATION; FURTHERMORE, MEAL PLANS ARE NOT MEANT TO REPLACE OR SUPERSEDE DOCTOR-PRESCRIBED DIET PLANS.</p>

                                    <h3>Medication/Doctor-Prescribed Diet Plans:</h3>
                                    <p>If you are taking medication, you must consult your physician before you start our meal programs.  Fitness Kitchen’s programs do not replace a physician’s advice; if you are using our meal plans as part of a doctor-prescribed diet, you shall be ultimately responsible for ensuring compliance with such diet.  Furthermore, if you have diabetes or other medical conditions of any kind, you shall be responsible for maintaining your diet to ensure compliance with the requirements of such conditions. Our meal recommendations shall not be deemed medical advice.</p>

                                    <h3>Food Sensitivities and Allergies:</h3>
                                    <p>YOU ARE RESPONSIBLE FOR DETERMINING WHETHER ANY FOOD ALLERGIES MAY OCCUR. Although we will provide ingredient lists as and when requested, Fitness Kitchen is not responsible for any allergic or other adverse reactions you might have to our food.</p>

                                </div>

                            </div>

                        </div>
                        <br>

                        <div class="row">
                            <div class="col-lg-offset-3 col-lg-6 terms-checkbox">
                                <input type="checkbox" name="terms" id="checkbox" class="css-checkbox check" value="terms"/><label for="checkbox" class="css-label radGroup1 radGroup1">I accept the Terms & Conditions</label>
                            </div>
                        </div>

                        <div class="clearfix">

                            <div style="padding-top:15px;margin-left: auto;margin-right: auto;margin-top:30px;text-align: center;">
                                <button class="submit" type="button" disabled>Make Payment</button>

                                <p style="font-family:'open sans',sans-serif;width: 300px;font-weight: 400; font-size: 12px;margin: 0 auto;text-align: center;">If 'Make Payment' button is disabled,</p><p style="font-family:'open sans',sans-serif;width: 300px;font-weight: 400; font-size: 12px;margin: 0 auto;text-align: center;">make sure you have accepted the terms above.</p>
                            </div>
                        </div>

                        <hr>

                    </fieldset>


                {{ Form::token() }}

            </form>
        </div>

    </div>
    <br />
    <br />
    <br />
    <div class="already-have">
        <p>Already have an account? </p><a href="{{ URL::action('subscription-sign-in') }}" id="login" class="loginbuttontwo">Log In</a>

    </div>
    <br />
    <br />
    <br />


    <div class="social-thanks-container">



        <ul class="social-join">
            <li style="position:absolute;display:inline-block;margin-top: 0px;margin-left: 5px;">
                <div class="fb-like" data-href="https://www.facebook.com/macroplatedelivery" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
            </li>

            <li style="position:absolute;display: inline-block;margin-left:95px;margin-top: 3px;">
                <a data-pin-do="buttonFollow" href="http://www.pinterest.com/macroplate/">Pinterest</a>
                <!-- Please call pinit.js only once per page -->
                <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
            </li>

            <li style="position:absolute;display: inline-block;margin-top: 5px;margin-left: 179px;">
                <a href="https://twitter.com/macroplate" class="twitter-follow-button" data-show-count="false">Follow @macroplate</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </li>
            <li style="margin-top: 40px;"><a href="" id="topthree">Home</a></li>
            <li style="margin-top: 40px;"><a href="" id="macrostwo">About</a></li>
            <li style="margin-top: 40px;"><a href="" id="citiestwo">Cities</a></li>
            <li style="margin-top: 40px;"><a href="" id="planstwo">Plans</a></li>
            <li style="margin-top: 40px;"><a href="" id="faqtwo">FAQ</a></li>
            <li style="margin-top: 40px;"><a href="">Blog</a></li>

        </ul>

    </div>




</div>


@stop

@section('scripts')


    <script src="https://js.stripe.com/v2"></script>

    <script type="text/javascript">
        $('.check:button').click(function () {
            var checked = !$(this).data('checked');
            $('input:checkbox').prop('checked', checked);
            $('.submit:button').prop('disabled', !checked)
            $(this).data('checked', checked);
            if (checked == true) {
                $(this).val('Uncheck All');
            } else if (checked == false) {
                $(this).val('Check All');
            }
        });

        $('input:checkbox').change(function () {
            $('.submit:button').prop('disabled', $('input:checkbox:checked').length == 0)
        })

        $('.submit:button').click(function () {
            var array = $('input:checkbox:checked').map(function () {
                return this.value
            }).get();
            console.log(array, array.join())
        })
    </script>

    <script type="text/javascript" src="{{ asset('formToWizard.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#subscription-form").formToWizard({ submitButton: 'submit' })
        });
    </script>
    <script src="{{ asset('js/stripe.js') }}"></script>
@stop