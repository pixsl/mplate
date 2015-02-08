@extends('template.default')

@section('content')




    <div class="container-settings">

        <div class="settings-header">

            <a style="margin:0 auto;position: relative;display: block;text-align: center;" href="{{ URL::action('subscription') }}" id="top">
                <img id="logo" src="{{ asset('imgs/macroplatelogo.svg') }}" alt="">
            </a>

            <a href="{{ URL::action('subscription-settings') }}" id="signup" class="signupbutton">Account</a>
            <a style="position: relative;float:right;margin-right:0px" href="{{ URL::action('subscription-sign-out') }}" id="login" class="logoutbutton">Log Out</a>


        </div>


        <div class="col-lg-12">

            <div class="col-lg-offset-4 col-lg-4" style="padding-top: 20px;">

                @include('template.partials._notice')

            </div>

        </div>

        <div class="col-lg-12">

            @if(Auth::user()->subscribed())


                @if(Auth::user()->cancelled())
                    <p>Your subscription will end on {{ $user->subscription_ends_at->format('D d M Y') }}.</p>
                @endif

                <ul>
                    @if(Auth::user()->subscribed())
                        <li><a href="{{ URL::action('subscription-swap') }}">Swap Plan</a></li>
                        <li><a href="{{ URL::action('subscription-cancel') }}?_token={{ csrf_token() }}">Cancel Membership</a></li>
                    @endif

                    @if(Auth::user()->cancelled())
                        <li><a href="{{ URL::action('subscription-resume') }}?_token={{ csrf_token() }}">Resume Membership</a></li>
                    @endif

                    @if(Auth::user()->subscribed())
                        <li><a href="{{ URL::action('subscription-card') }}">Update Credit Card</a></li>

                    @endif
                    @if(Auth::user())
                        <li><a href="{{ URL::action('subscription-change-password') }}">Change Password</a></li>
                        <li><a href="{{ URL::action('subscription-change-address') }}">Change Address</a></li>
                    @endif
                </ul>

            @endif

        </div>





        <hr style="opacity:0;">

            <div class="social-thanks-container">

                <hr style="opacity: 0;">

                <ul class="social-thanks">
                    <li style="position:absolute;display:inline-block;margin-top: 0px;margin-left: -162px;">
                        <div class="fb-like" data-href="https://www.facebook.com/macroplatedelivery" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    </li>

                    <li style="position:absolute;display: inline-block;margin-left: -72px;margin-top: 0px;">
                        <a data-pin-do="buttonFollow" href="http://www.pinterest.com/macroplate/">Pinterest</a>
                        <!-- Please call pinit.js only once per page -->
                        <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
                    </li>

                    <li style="position:absolute;display: inline-block;margin-top: 0px;margin-left: 12px;">
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

        <!-- Pure Chat Snippet -->
        <script type='text/javascript'>
            (function () {	var done = false;	var script = document.createElement('script'); script.async = true;	script.type = 'text/javascript';	script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) {	if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: 'f30d2f66-386a-43a6-92be-469080dd1365', f: true }); done = true;	}	};	})();
        </script>
        <!-- End Pure Chat Snippet -->


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
