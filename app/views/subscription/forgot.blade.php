@extends('template.default')

@section('content')




    <div class="container-eight">

        <a style="margin:0 auto;position: relative;display: block;text-align: center;" href="{{ URL::action('subscription') }}" id="top">
            <img id="logo" src="{{ asset('imgs/macroplatelogo.svg') }}" alt="">
        </a>
        <div class="boxtwo">
            <div class="textbox-thanks">

                <h3>Recover Password</h3>
                @include('template.partials._notice')


                <div style="padding-top: 20px;min-height: 100vh;text-align: center;width:100%; display: block; position: relative;margin-left: auto;margin-right: auto;">

                    <form action="{{ URL::action('subscription-forgot-password-post') }}" method="post" id="subscription-form">
                        <div class="row">


                            <div class="col-lg-offset-4 col-lg-4">

                                <div class="stripe-errors panel hide"></div>


                                <div style="z-index: 99999999999999999999;" class="col-xs-12 col-lg-12" >
                                    <input name="email" type="text" placeholder="Email"{{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}>
                                    @if($errors->has('email'))
                                        <p class="error-mess">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>

                                <div class="col-lg-12">
                                    <button style="margin-top: 10px" class="downloadbutton">Recover</button>
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