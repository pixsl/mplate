<style>
    .downloadbutton {
        background: #66b83d;
        color: #fff;
        text-shadow: 0 0 1px rgba(0,0,0,.3);
        -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.3) ,0 1px 0 rgba(000, 000, 000, 0.15);
        -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.3), 0 1px 0 rgba(000, 000, 000, 0.15);
        box-shadow: inset 0 1px 0 rgba(255,255,255,.3), 0 1px 0 rgba(000, 000, 000, 0.15);
        -webkit-border-top-left-radius: 5px;
        -moz-border-radius-topleft: 5px;
        border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topright: 5px;
        border-top-right-radius: 5px;
        -webkit-border-bottom-right-radius: 5px;
        -moz-border-radius-bottomright: 5px;
        border-bottom-right-radius: 5px;
        -webkit-border-bottom-left-radius: 5px;
        -moz-border-radius-bottomleft: 5px;
        border-bottom-left-radius: 5px;
        text-indent: 0;
        border: 1px solid #008811;
        -o-transition: .5s;
        -ms-transition: .5s;
        -moz-transition: .5s;
        -webkit-transition: .5s;
        transition: .5s;
        font-family: 'Varela Round',sans-serif;
        padding-left: 20px;
        letter-spacing: .0325em;
        padding-right: 20px;
        z-index: 999999;
        padding-top: 7px;
        padding-bottom: 7px;
        font-size: 18px;
        font-weight: bold;
        text-decoration: none;
        text-align: center;
    }

    .downloadbutton:hover {
        border: 1px solid #008811;
        color: #fff;
        -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.3), 0 1px 0 rgba(000, 000, 000, 0.35);
        -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.3), 0 1px 0 rgba(000, 000, 000, 0.35);
        box-shadow: inset 0 1px 0 rgba(255,255,255,.3), 0 1px 0 rgba(000, 000, 000, 0.35);
        text-decoration: none;
        background-color: #76c74d;
        color: #fff;
    }
</style>
<body style="margin: 0">
<div style="width: 100%;display:block;position: relative;margin: 0;">

    <div id="top" style="padding: 20px;color: #fff;width: 100%;position: relative;display: block;background-color: #66b83d;">
        Hello, {{ $first_name }}<br><br>

        Looks like you requested a new password. You'll need to use the following link to activate the password.

        New Temporary Password: {{ $password }} <br><br>
    </div>

    <div id="bottom" style="border-top:1px solid #438c1f; border-bottom: 1px solid #d8d8d8;padding: 20px;color: #000;width: 100%;position: relative;display: block;background-color: #eaeaea;">

        <a href="{{ $link }}" id="order" class="downloadbutton">Activate</a>

    </div>






</div>


</body>