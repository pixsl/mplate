<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Macro Plate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <meta name="author" content="DFNDR" />
        <meta name="description" content="DFNDR" />
        <meta name="keywords"  content="dfndr,texting and driving, texting, driving" />
        <meta name="Resource-type" content="Document" />
        <meta name="p:domain_verify" content="c3b0cbdea667540ae1b04d4d577715c7"/>
        <link rel="stylesheet" href="{{ asset('themes/default/default.css') }}" type="text/css" media="screen" />
        <link rel="stylesheet" href="{{ asset('themes/light/light.css') }}" type="text/css" media="screen" />
        <link rel="stylesheet" href="{{ asset('themes/dark/dark.css') }}" type="text/css" media="screen" />
        <link rel="stylesheet" href="{{ asset('themes/bar/bar.css') }}" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/merchant.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/scroller.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style4.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/plantabs.css') }}" />




    <style>
    html, body, #map-canvas {
    height: 100%;
    margin: 0px;
    padding: 0px
    }
    </style>

    <!--[if IE]>
        <script type="text/javascript">
            var console = { log: function() {} };
        </script>
        <![endif]-->

        <link rel="stylesheet" href="{{ asset('bower_components/foundation/css/foundation.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

        <!-- Angular, stripe -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.0/angular.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.0/angular-animate.min.js"></script>

        <script src="{{ asset('js/modernizr.custom.63321.js') }}"></script>


        <script src="http://cdn.rawgit.com/laurihy/angular-payments/2472bc9befa256780d106a8e53a9dea12b7341ed/lib/angular-payments.js"></script>

        <!-- other angular.js modules -->
        <script src="http://pineconellc.github.io/angular-foundation/mm-foundation-tpls-0.3.1.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/spin.js/2.0.1/spin.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/angular-spinner/0.5.1/angular-spinner.js"></script>

        <!-- our code -->
        <script src="{{ asset('scripts.js') }}"></script>

        <script src="{{ asset('js/modernizr.js') }}"></script>

        <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/plans.js') }}"></script>
        <script src="{{ asset('js/jspatch.js') }}"></script>

    <script type="text/javascript">

        function yesnoCheck() {
            if (document.getElementById('yesCheck').checked) {
                document.getElementById('ifYes').style.visibility = 'visible';
            }
            else document.getElementById('ifYes').style.visibility = 'hidden';
        }

        function yesnoCheckTwo() {
            if (document.getElementById('yesCheckTwo').checked) {
                document.getElementById('ifYes-two').style.visibility = 'visible';
            }
            else document.getElementById('ifYes-two').style.visibility = 'hidden';
        }

    </script>


    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/instafeed.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/instagramLite.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/homepage.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bower_components/foundation/js/foundation.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bower_components/foundation/js/foundation.alertjs') }}"></script>

    <script>
        $(document).foundation();
    </script>


</head>
<script type="text/javascript" src="https://static.leaddyno.com/js"></script>
<script>
    LeadDyno.key = "032931a780e99bfa066c922fd8aed807d98240c0";
    LeadDyno.recordVisit();
    LeadDyno.autoWatch();
</script>
    <body ng-app="macroApp" ng-controller="macroCtrl">

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1413546398899613&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

            @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/cbpScroller.js') }}"></script>
    <script>
        new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
    </script>
    <script>
        $(document).ready(function() {
            function close_accordion_section() {
                $('.accordion .accordion-section-title').removeClass('active');
                $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
            }

            $('.accordion-section-title').click(function(e) {
                // Grab current anchor value
                var currentAttrValue = $(this).attr('href');

                if($(e.target).is('.active')) {
                    close_accordion_section();
                }else {
                    close_accordion_section();

                    // Add active class to section title
                    $(this).addClass('active');
                    // Open up the hidden content panel
                    $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
                }

                e.preventDefault();
            });
        });
    </script>

    <script type="text/javascript">

        $("#dropdown").on("click", function(e){
            e.preventDefault();

            if($(this).hasClass("open")) {
                $(this).removeClass("open");
                $(this).children("ul").slideUp("fast");
            } else {
                $(this).addClass("open");
                $(this).children("ul").slideDown("fast");
            }
        });

    </script>


    @yield('scripts')
    </body>
</html>