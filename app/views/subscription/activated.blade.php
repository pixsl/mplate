@extends('template.default')

@section('content')




    <div class="container-eight">

        <a style="margin:0 auto;position: relative;display: block;text-align: center;" href="{{ URL::action('subscription') }}" id="top">
            <img id="logo" src="{{ asset('imgs/macroplatelogo.svg') }}" alt="">
        </a>
        <div class="boxtwo">
            <div class="textbox-thanks">

                <h2>Your Account Has Been Activated!</h2>

                <p>Log in below.</p>

                <div style="padding-top: 40px;min-height: 100vh;text-align: center;width:300px; display: block; position: relative;margin-left: auto;margin-right: auto;">

                    <form method="post" action="{{ URL::action('subscription-sign-in-post') }}">
                        <input type="text" name="email" placeholder="Email"{{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }} />
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                        <input type="password" name="password" placeholder="Password" />
                        @if($errors->has('password'))
                            {{ $errors->first('password') }}
                        @endif
                        <div class="row">
                            <div class="terms-checkbox">
                                <input type="checkbox" name="remember" id="remember" class="css-checkbox check" value="terms"/><label for="remember" class="css-label radGroup1 radGroup1">Remember Me</label>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="submit downloadbutton">Log In</button>

                        {{ Form::token() }}
                    </form>
                </div>

            </div>


        </div>



    </div>



@stop