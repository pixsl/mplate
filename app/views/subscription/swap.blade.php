@extends('template.default')

@section('content')




    <div class="container-eight">

        <a style="margin:0 auto;position: relative;display: block;text-align: center;" href="{{ URL::action('subscription') }}" id="top">
            <img id="logo" src="{{ asset('imgs/macroplatelogo.svg') }}" alt="">
        </a>
        <div class="boxtwo">
            <div class="textbox-thanks">


                <form action="{{ URL::action('subscription-swap') }}" method="post" id="swap-form" class="login-form">



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


                    <hr>
                    <button class="submit" type="button">Make Payment</button>
                </form>


            </div>

            </div>


        </div>



    </div>



@section('scripts')
    <script src="https://js.stripe.com/v2"></script>
    <script src="{{ asset('js/stripe.js') }}"></script>
@stop