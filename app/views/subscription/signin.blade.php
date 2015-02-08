@extends('template.default')

@section('content')



    <div class="container-eight">

        <a style="margin:0 auto;position: relative;display: block;text-align: center;" href="{{ URL::action('subscription') }}" id="top">
            <img id="logo" src="{{ asset('imgs/macroplatelogo.svg') }}" alt="">
        </a>
        <div class="container">

            <div class="col-lg-12">

                <div class="col-lg-offset-4 col-lg-4">

                    @include('template.partials._notice')

                </div>


            </div>


            <div style="padding-top: 50px;text-align: center;width:300px; display: block; position: relative;margin-left: auto;margin-right: auto;">

                <h1 style="position: relative;font-family:'Open Sans',sans-serif;font-weight: 300;color: #000;text-align: center;margin-top: 0px;margin-bottom: 30px;">Log In</h1>

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

                <a href="{{ URL::route('subscription-forgot-password') }}" class="logoutbutton">Forgot Password</a>
            </div>

        </div>
    </div>

@section('scripts')


    <script src="https://js.stripe.com/v2"></script>

    <script src="{{ asset('js/stripe.js') }}"></script>

    <script type="text/javascript">
        $(function(){

            var clearAlert = setTimeout(function(){
                $('.alert-box.' + props.type + ' .close').click();
            }, 3000);

            $(document).on("click", ".alert-box a.close").trigger("click.fndtn.alert");

            $(document).on("click", ".alert-box a.close", function(event){
                clearTimeout(clearAlert);
            });

            $(document).on("click", ".alert-box a.close", function(event) {
                event.preventDefault();
                $(this).closest(".alert-box").fadeOut(function(event){
                    $(this).remove();
                });
            });

        });
    </script>


@stop