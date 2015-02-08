@extends('template.default')

@section('content')




    <div class="container-eight">

        <a style="margin:0 auto;position: relative;display: block;text-align: center;" href="{{ URL::action('subscription') }}" id="top">
            <img id="logo" src="{{ asset('imgs/macroplatelogo.svg') }}" alt="">
        </a>
        <div class="boxtwo">
            <div class="textbox-thanks">

                <h3>Update Your Card</h3>

                <div style="padding-top: 20px;min-height: 100vh;text-align: center;width:100%; display: block; position: relative;margin-left: auto;margin-right: auto;">

                    <form action="{{ URL::action('subscription-card') }}" method="post" id="subscription-form">
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


                                <div class="col-lg-12">
                                    <button style="margin-top: 10px" class="downloadbutton">Update Card</button>


                                </div>



                            </div>

                        </div>
                        {{ Form::token() }}
                    </form>

                </div>

            </div>


        </div>



    </div>



@section('scripts')
    <script src="https://js.stripe.com/v2"></script>
    <script src="{{ asset('js/stripe.js') }}"></script>
@stop