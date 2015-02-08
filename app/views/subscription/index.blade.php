@extends('template.default')

@section('content')

    <div id="scrolltotop"></div>

    <header>
        <div class="header-container clearfix">
            <a href="{{ URL::action('subscription') }}" id="top">
                <img id="logo" src="{{ asset('imgs/macroplatelogo.svg') }}" alt="">
            </a>

            <nav>
                <a href="" id="toptwo">Home</a>
                <a href="" id="macros">About</a>
                <a href="" id="cities">Cities</a>
                <a href="" id="plans">Plans</a>
                <a href="" id="faq">FAQ</a>
                <a href="">Blog</a>
            </nav>

            @if(Auth::check())
                <nav id="buttons-logged-in">
                    <a href="{{ URL::action('subscription-sign-out') }}" id="login" class="logoutbutton">Log Out</a>

                    <a href="{{ URL::action('subscription-settings') }}" id="signup" class="signupbutton">Account</a>

                </nav>


            @else
                <nav id="buttons">
                    <a href="{{ URL::action('subscription-sign-in') }}" id="login" class="loginbutton">Log In</a>

                    <a href="{{ URL::action('subscription-join') }}" id="signup" class="signupbutton">Sign Up</a>
                </nav>
            @endif


        </div>
    </header><!-- /header -->


    <div class="container-two">


        <div class="boxtwo">
            <div class="textbox">

                <h2>Welcome!</h2>

                <p>Order expertly prepared meals that will guide you towards your goal.</p>


                <div class="download" style="margin-left: 95px;">
                    <a href="{{ URL::action('subscription-join') }}" class="downloadbutton">Sign Up</a>
                </div>

            </div>

        </div>
        <img src="imgs/macroplatecoverphoto.jpg">





    </div>

    </div>

    <div>


        <div id="scrolltomacros"></div>


        <div id="cbp-so-scroller" class="cbp-so-scroller">
            <section class="cbp-so-section">
                <figure class="cbp-so-side cbp-so-side-left">
                    <img class="bigger" src="imgs/plate-chicken.png" style="margin-top: 40px;" alt="img01">
                </figure>
                <article class="cbp-so-side cbp-so-side-right">
                    <h2 class="top"><b>Macros.</b> Just the right amount.</h2>
                    <p class="top">Your macronutrient ratio can vary depending on individual goals, body composition, metabolic efficiency and fitness regimen. It's important to find and commit to the macronutrient ratio that is suitable for you! At Macro-Plate, we're focused on preparing meals that will guide you toward your goals.</p>
                    <p>
                    <ul class="macrobreakdown">
                        <li><h1>All of our meals feature</h1></li>
                        <li><h4>450-550 Calories</h4></li>
                        <li><h4>Complex carbohydrates</h4></li>
                        <li><h4>Lean proteins</h4></li>
                        <li><h4>Essential fats</h4></li>
                        <li><h4>Dietary fiber</h4></li>
                        <li><h4>Low sodium</h4></li>
                    </ul>
                    </p>

                </article>

            </section>
            <section class="cbp-so-section">


                <article class="cbp-so-side cbp-so-side-left">
                    <h2 class="bottom"><b>Fresh.</b> In every way.</h2>
                    <p class="bottom">The freshest produce is selected for Macro-Plate meals. You will notice that our ingredients change along with the seasons, as we strive to bring you the highest quality produce from local farms.</p>
                </article>
                <figure class="cbp-so-side cbp-so-side-right">
                    <img src="imgs/plate-two.png" alt="img01">
                </figure>
            </section>

            <section class="cbp-so-section">
                <figure class="cbp-so-side cbp-so-side-left">
                    <img src="imgs/fresh-produce.png" style="margin-top: -45px;" alt="img01">
                </figure>
                <article class="cbp-so-side cbp-so-side-right">
                    <h2 class="top"><b>Macros.</b> Just the right amount.</h2>
                    <p class="top">Each meal we prepare is made with a specific person in mind. If there are 50 steaks on the grill, we know which one is yours. We measure each meal down to a 1/100 of a gram, allowing our clients to relax and rest assured that they are receiving the proper amount of nutrients daily.</p>
                </article>

            </section>
            <section class="cbp-so-section">


                <article class="cbp-so-side cbp-so-side-right">
                    <h2 class="bottom"><b>Fresh.</b> In every way.</h2>
                    <p class="bottom">Each meal we prepare is made with a specific person in mind. If there are 50 steaks on the grill, we know which one is yours. We measure each meal down to a 1/100 of a gram, allowing our clients to relax and rest assured that they are receiving the proper amount of nutrients daily.</p>

                </article>
                <figure class="cbp-so-side cbp-so-side-right">
                    <img src="imgs/fresh1.png" alt="img01">
                </figure>
            </section>



        </div>


        <!-- PRICE TABLE -->
        <div class="container-six" style="background-color: #fff;">
            <div class="row">
                <div class="col-lg-3 steps">
                    <img src="imgs/pick-a-plan.svg" alt="Generic placeholder image" style="width:200px; height: 140px;">
                    <h2 class="top-spacer-small subtract-bottom">1. Choose a Plan</h2>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-3 steps">
                    <img src="imgs/prep.svg" alt="Generic placeholder image" style="width:200px; height: 140px;">
                    <h2 class="top-spacer-small subtract-bottom">2. We Prep</h2>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-3 steps">
                    <img src="imgs/delivery.svg" alt="Generic placeholder image" style="width:200px; height: 140px;">
                    <h2 class="top-spacer-small subtract-bottom">3. We Deliver</h2>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-3 steps">
                    <img src="imgs/reheat.svg" alt="Generic placeholder image" style="width:200px; height: 140px;">
                    <h2 class="top-spacer-small subtract-bottom">4. Heat & Enjoy</h2>
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->

        </div>
        <div class="container-two" style="margin-top:20px;">
            <div class="container">
                <div class="textboxfour">
                    <h1 style="text-align: center">THE NITTY GRITTY</h1>
                    <p style="text-align: center">(Found here - not in our food)</p>

                    <h2 style="text-align: center">What are Macros?</h2>

                    <p style="text-align: center">Macros, short for macronutrients, are nutrients that provide us with energy (commonly identified as calories). The prefix “Macro” derives its meaning from the Greek root “Makro,” meaning big or large. This root is used because these nutrients are required by our bodies in large amounts. There are 3 types of Macros: Carbs, proteins, and fats.</h2>
                    </p>

                </div>

            </div>
        </div>

        <div class="container-three">
            <img src="imgs/macrospage.png">

        </div>








        <div id="scrolltoplans"></div>

        <div class="container-two" style="margin-top: 0px;padding-bottom: 70px;background-color: #f9f9f9;">
            <div class="boxthree" ng-controller="MyCtrl">
                <div class="textboxfour">
                    <h1 style="text-align: center">Plans & Pricing</h1>
                </div>
                <div class="products-box">
                    <div>
                        <a ui-sref="traditional-prices" style="display: block;">
                            <div ng-class="{activetab:isActive('/traditional-prices')}" class="col-lg-3 producto">
                                <h2 class="top-spacer-small subtract-bottom">Traditional</h2>
                            </div><!-- /.col-lg-4 -->
                        </a>
                        <a ui-sref="high-protein-prices" style="display: block;">
                            <div ng-class="{activetab:isActive('/high-protein-prices')}" class="col-lg-3 producto">
                                <h2 class="top-spacer-small subtract-bottom">High Protein</h2>
                            </div><!-- /.col-lg-4 -->
                        </a>
                        <a ui-sref="high-carb-prices" style="display: block;">
                            <div ng-class="{activetab:isActive('/high-carb-prices')}" class="col-lg-3 producto">
                                <h2 class="top-spacer-small subtract-bottom">High Carb</h2>
                            </div><!-- /.col-lg-4 -->
                        </a>
                        <a ui-sref="custom-prices" style="display: block;">
                            <div ng-class="{activetab:isActive('/custom')}" class="col-lg-3 producto">
                                <h2 class="top-spacer-small subtract-bottom">Custom</h2>
                            </div><!-- /.col-lg-4 -->
                        </a>
                        <div ui-view="prices" class="prices-box"></div>

                    </div><!-- /.row -->
                </div>

                <div class="order-now">
                    <span>Order today!</span></span><a href="{{ URL::action('subscription-join') }}" id="order" class="downloadbutton">Sign Up</a>
                </div>
            </div>

        </div>

        <div id="instafeed"></div>





    </div>

    <div id="scrolltofaq"></div>


    <div class="container-two" style="margin-top:0px;">
        <div class="container">
            <div class="textboxfour">
                <h1 style="text-align: center">FAQ</h1>
                <p style="text-align: center">Frequently Asked Questions</p>

                <h3>Ordering</h3>
                <div class="accordion">
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-1"><span class="icon-plus"></span><p>Is there a sign up deadline?</p></a>

                        <div id="accordion-1" class="accordion-section-content">
                            <p>We want you to start receiving your meals as soon as possible; but since our food is prepared fresh without any preservatives, it's important we have a deadline to ensure the highest quality possible.</p>
                            <hr>
                            <p class="small-top"><img src="imgs/greendot.svg" />If you place your order Monday 6pm - Friday 6pm, your plan begins the following Monday.</p>
                            <p class="small"><img src="imgs/orangedot.svg" />If you place your order Friday 6pm - Monday 6pm, your plan begins the following Wednesday.</p>
                            <p class="small"><img src="imgs/graydot.svg" />If you order any <b>6 or 7 day plan</b> between Monday 6pm and Wendesday 6pm, you are eligible to begin receiving meals on Friday the same week.</p>

                            <img src="imgs/deliverydeadlines.svg" style="margin-top: 20px;width: 800px" />
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-2"><span class="icon-plus"></span><p>Can I sign up more than one person at a time?</p></a>

                        <div id="accordion-2" class="accordion-section-content">
                            <p>Since each person's meal plan is prepared specifically for them, we require one person per account. Every client will have a username and password to manage their account.</p>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-3"><span class="icon-plus"></span><p>Can I pause or suspend my service and resume at a later date?</p></a>

                        <div id="accordion-3" class="accordion-section-content">
                            <p>Yes, Macro-Plate service can be suspended within 48 hours of notice. You may also freeze your account by emailing customerservice@macro-plate.com. Include your client ID, the date you would like your last delivery and the date to resume delivery.</p>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-4"><span class="icon-plus"></span><p>What are my payment options?</p></a>

                        <div id="accordion-4" class="accordion-section-content">
                            <p>Macro-Plate is a weekly service that requires payment with a credit or debit card. Payments are processed on Fridays for the following week. Your billing frequency will be weekly.</p>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-5"><span class="icon-plus"></span><p>Does Macro-Plate have a referral program?</p></a>

                        <div id="accordion-5" class="accordion-section-content">
                            <p>Yes we do! You will receive a referral credit of one free day towards your meal plan for each person you refer that signs up for any one of our meal plans. It's our way to thank our current member for referring friends, acquaintances and family. To guarantee your account receives the proper credit for the referrals, the person you refer must include your name or client ID in the 'referred by' section during the registration process.</p>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                </div><!--end .accordion-->
                <br />

                <h3>Meals</h3>
                <div class="accordion">
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-6"><span class="icon-plus"></span><p>How do I heat my meals?</p></a>

                        <div id="accordion-6" class="accordion-section-content">
                            <p>Meals are already cooked and conveniently packaged in microwave-safe containers, all you need to do is heat and eat. To heat meals in the microwave, lift onside of the lid and heat for 60-90 seconds (may vary depending your machine).</p>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-7"><span class="icon-plus"></span><p>How do I know when to eat which meal?</p></a>

                        <div id="accordion-7" class="accordion-section-content">
                            <p>Each meal we produce comes with the full macronutrient info with the specific ingredients displayed clearly on each package. You should be consuming macro plate meal every 3-4 hour depending on your health and fitness goals.</p>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-8"><span class="icon-plus"></span><p>What if I have an allergy?</p></a>

                        <div id="accordion-8" class="accordion-section-content">
                            <p>We take food allergies seriously. During the registration process, there will be a field for you to list your allergy and/or allergies so that we can make certain that we can appropriately accommodate your needs.</p>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                </div><!--end .accordion-->
                <br />

                <h3>Delivery</h3>
                <div class="accordion">
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-11"><span class="icon-plus"></span><p>Is there a sign up deadline?</p></a>

                        <div id="accordion-11" class="accordion-section-content">
                            <p>We want you to start receiving your meals as soon as possible; but since our food is prepared fresh without any preservatives, it's important we have a deadline to ensure the highest quality possible.</p>
                            <p class="small-top"><img src="imgs/greendot.svg" />If you place your order Monday 6pm - Friday 6pm, your plan begins the following Monday.</p>
                            <p class="small"><img src="imgs/orangedot.svg" />If you place your order Friday 6pm - Monday 6pm, your plan begins the following Wednesday.</p>
                            <p class="small"><img src="imgs/graydot.svg" />If you order any <b>6 or 7 day plan</b> between Monday 6pm and Wendesday 6pm, you are eligible to begin receiving meals on Friday the same week.</p>

                            <img src="imgs/deliverydeadlines.svg" style="margin-top: 20px;width: 800px" />
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-12"><span class="icon-plus"></span><p>Can I sign up more than one person at a time?</p></a>

                        <div id="accordion-12" class="accordion-section-content">
                            <p>Since each personals meal plan is specific for each individual we require one person per account. Every client will have to username and password to manage their account.</p>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-13"><span class="icon-plus"></span><p>What are Macros?</p></a>

                        <div id="accordion-13" class="accordion-section-content">
                            <p>Macros, short for macronutrients, are nutrients that provide us with energy (commonly identified as calories). The prefix “Macro” derives its meaning from the Greek root “Makro,” meaning big or large. This root is used because these nutrients are required by our bodies in large amounts. There are 3 types of Macros: Carbs, proteins, and fats.</p>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-14"><span class="icon-plus"></span><p>What are Macros?</p></a>

                        <div id="accordion-14" class="accordion-section-content">
                            <p>Macros, short for macronutrients, are nutrients that provide us with energy (commonly identified as calories). The prefix “Macro” derives its meaning from the Greek root “Makro,” meaning big or large. This root is used because these nutrients are required by our bodies in large amounts. There are 3 types of Macros: Carbs, proteins, and fats.</p>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                    <div class="accordion-section">
                        <a class="accordion-section-title" href="#accordion-15"><span class="icon-plus"></span><p>Where does Macro-Plate deliver?</p></a>

                        <div id="accordion-15" class="accordion-section-content">
                            <p>We are currently delivering exclusively to the Los Angeles area. If you would like to make sure that we deliver to your area, please email info@macro-plate.com or use the 'Chat with us' widget on the bottom right of your screen. If you are outside of our delivery area, please send an email to info@macro-plate.com to be put on our waiting list and as soon as we're serving your area we’ll let you know.</p>
                        </div><!--end .accordion-section-content-->
                    </div><!--end .accordion-section-->
                </div><!--end .accordion-->
                <br /><br />
                <ul class="social">
                    <li style="position: absolute;display: inline-block;">
                        <div class="fb-like" data-href="https://www.facebook.com/macroplatedelivery" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    </li>

                    <li style="position: absolute;display: inline-block;margin-left: 90px;margin-top: 3px;">
                        <a data-pin-do="buttonFollow" href="http://www.pinterest.com/macroplate/">Pinterest</a>
                        <!-- Please call pinit.js only once per page -->
                        <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
                    </li>

                    <li style="position: absolute;display: inline-block;margin-top: 5px;margin-left: 175px;">
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

    </div>


    <!-- Pure Chat Snippet -->
    <script type='text/javascript'>
        (function () {	var done = false;	var script = document.createElement('script'); script.async = true;	script.type = 'text/javascript';	script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) {	if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: 'f30d2f66-386a-43a6-92be-469080dd1365', f: true }); done = true;	}	};	})();
    </script>
    <!-- End Pure Chat Snippet -->

@stop