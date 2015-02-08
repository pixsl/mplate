@extends('template.default')

@section('content')




    <div class="container-eight">

        <a style="margin:0 auto;position: relative;display: block;text-align: center;" href="{{ URL::action('subscription') }}" id="top">
            <img id="logo" src="{{ asset('imgs/macroplatelogo.svg') }}" alt="">
        </a>
        <div class="boxtwo">
            <div class="textbox-thanks">

                <h2>Thank You For Your Order!</h2>

                <p>You will receive a confirmation email shortly.</p>
                <p>Use the link in that email to activate your account.</p>

                <div class="social-thanks-container">

                    <hr style="opacity: 0;">
                    <ul class="social-thanks">
                        <li style="position:absolute;display:inline-block;margin-top: -3px;margin-left: -162px;">
                            <div class="fb-like" data-href="https://www.facebook.com/macroplatedelivery" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                        </li>

                        <li style="position:absolute;display: inline-block;margin-left: -72px;margin-top: 0px;">
                            <a data-pin-do="buttonFollow" href="http://www.pinterest.com/macroplate/">Pinterest</a>
                            <!-- Please call pinit.js only once per page -->
                            <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
                        </li>

                        <li style="position:absolute;display: inline-block;margin-top: 1px;margin-left: 12px;">
                            <a href="https://twitter.com/macroplate" class="twitter-follow-button" data-show-count="false">Follow @macroplate</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        </li>

                    </ul>

                    <ul class="lower-nav">
                        <li><a href="" id="topthree">Home</a></li>
                        <li><a href="" id="macrostwo">About</a></li>
                        <li><a href="" id="citiestwo">Cities</a></li>
                        <li><a href="" id="planstwo">Plans</a></li>
                        <li><a href="" id="faqtwo">FAQ</a></li>
                        <li><a href="">Blog</a></li>
                    </ul>

                </div>

            </div>


        </div>



    </div>



@stop