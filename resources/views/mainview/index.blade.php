<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}">
    <title>Create Passport Photos Online for Free</title>
    <script>
        function checkForm() {
            if (document.form.country.value == "NIL") {
                alert("Please selection a country.");
                document.form.country.focus();
                return false;
            }

            return true;
        }

        function updatePhotoType() {
            var xmlHttp;
            var country_code = document.form.country.value;

            if (country_code == "NIL") {
                document.getElementById("photo_type_info").innerHTML = "&nbsp;";
                return true;
            }

            document.getElementById("photo_type_info").innerHTML =
                "&nbsp;&nbsp;&nbsp;<font color='#FFFFFF'><span style='background-color: #FF3300'>&nbsp;Updating photo type infomation... </span></font>";

            try {
                // Firefox, Opera 8.0+, Safari
                xmlHttp = new XMLHttpRequest();
            } catch (e) {
                // Internet Explorer
                try {
                    xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                    try {
                        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e) {
                        alert("Your browser does not support AJAX!");
                        return false;
                    }
                }
            }
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.readyState == 4) {
                    document.getElementById("photo_type_info").innerHTML = xmlHttp.responseText;
                }
            }
            xmlHttp.open("GET", "get_photo_type.php?country_code=" + country_code + "&sid=" + Math.random(), true);
            xmlHttp.send(null);
        }

    </script>

    <style>
        body {
            padding-bottom: 40px;
            color: #5a5a5a
        }

        ol.info-list {
            padding: 5px 0px 0px 30px;
            margin: 0px
        }

        ol.info-list li {
            padding-left: 0px;
            padding-top: 0px;
            padding-bottom: 5px
        }

        ul.tick-list2 {
            list-style-type: none;
            padding: 5px 0px 0px 5px;
            margin: 0px
        }

        ul.tick-list2 li {
            background-image: url('https://d2rej7jvg610l7.cloudfront.net/images/green-tick2.png');
            background-repeat: no-repeat;
            background-position: 0px 5px;
            padding-left: 25px;
            padding-top: 4px;
            padding-bottom: 5px
        }

        h3 {
            margin-top: 0px;
            margin-bottom: 20px
        }

        .center-alignment {
            text-align: center
        }

        .img-responsive {
            margin: 0 auto
        }

        @-webkit-viewport {
            width: device-width
        }

        @-moz-viewport {
            width: device-width
        }

        @-ms-viewport {
            width: device-width
        }

        @-o-viewport {
            width: device-width
        }

        @viewport {
            width: device-width
        }

        html {
            font-family: sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        nav {
            display: block
        }

        a {
            background-color: transparent
        }

        strong {
            font-weight: 700
        }

        img {
            border: 0
        }

        button,
        input,
        select {
            margin: 0;
            font: inherit;
            color: inherit
        }

        button {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        button,
        input[type=submit] {
            -webkit-appearance: button
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        input {
            line-height: normal
        }

        input[type=radio] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            font-size: 10px
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff
        }

        button,
        input,
        select {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        a {
            color: #337ab7;
            text-decoration: none
        }

        img {
            vertical-align: middle
        }

        .img-responsive {
            display: block;
            max-width: 100%;
            height: auto
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        h2,
        h3 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit
        }

        h2,
        h3 {
            margin-top: 20px;
            margin-bottom: 10px
        }

        h2 {
            font-size: 30px
        }

        h3 {
            font-size: 24px
        }

        p {
            margin: 0 0 10px
        }

        .lead {
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: 300;
            line-height: 1.4
        }

        @media (min-width:768px) {
            .lead {
                font-size: 21px
            }
        }

        .text-left {
            text-align: left
        }

        ol,
        ul {
            margin-top: 0;
            margin-bottom: 10px
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width:768px) {
            .container {
                width: 750px
            }
        }

        @media (min-width:992px) {
            .container {
                width: 970px
            }
        }

        @media (min-width:1200px) {
            .container {
                width: 1170px
            }
        }

        .row {
            margin-right: -15px;
            margin-left: -15px
        }

        .col-md-4,
        .col-md-6,
        .col-md-8,
        .col-sm-12,
        .col-xs-12 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        .col-xs-12 {
            float: left
        }

        .col-xs-12 {
            width: 100%
        }

        @media (min-width:768px) {
            .col-sm-12 {
                float: left
            }

            .col-sm-12 {
                width: 100%
            }
        }

        @media (min-width:992px) {

            .col-md-4,
            .col-md-6,
            .col-md-8 {
                float: left
            }

            .col-md-8 {
                width: 66.66666667%
            }

            .col-md-6 {
                width: 50%
            }

            .col-md-4 {
                width: 33.33333333%
            }

            .col-md-offset-4 {
                margin-left: 33.33333333%
            }
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700
        }

        input[type=radio] {
            margin: 4px 0 0;
            margin-top: 1px\9;
            line-height: normal
        }

        select[size] {
            height: auto
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 21px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
        }

        .form-control::-moz-placeholder {
            color: #999;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #999
        }

        .form-control::-webkit-input-placeholder {
            color: #999
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px
        }

        .btn-primary {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4
        }

        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c
        }

        .btn-info {
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da
        }

        .btn-warning {
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236
        }

        .btn-lg {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 6px
        }

        .btn-block {
            display: block;
            width: 100%
        }

        input[type=submit].btn-block {
            width: 100%
        }

        .collapse {
            display: none
        }

        .nav {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .nav>li {
            position: relative;
            display: block
        }

        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 15px 10px 40px
        }

        .nav>li.disabled>a {
            color: #777
        }

        .nav>li>a>img {
            max-width: none
        }

        .navbar {
            position: relative;
            min-height: 50px;
            margin-bottom: 20px;
            border: 1px solid transparent
        }

        @media (min-width:768px) {
            .navbar {
                border-radius: 4px
            }
        }

        @media (min-width:768px) {
            .navbar-header {
                float: left
            }
        }

        .navbar-collapse {
            padding-right: 15px;
            padding-left: 15px;
            overflow-x: visible;
            -webkit-overflow-scrolling: touch;
            border-top: 1px solid transparent;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1)
        }

        @media (min-width:768px) {
            .navbar-collapse {
                width: auto;
                border-top: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .navbar-collapse.collapse {
                display: block !important;
                height: auto !important;
                padding-bottom: 0;
                overflow: visible !important
            }

            .navbar-static-top .navbar-collapse {
                padding-right: 0;
                padding-left: 0
            }
        }

        .container>.navbar-collapse,
        .container>.navbar-header {
            margin-right: -15px;
            margin-left: -15px
        }

        @media (min-width:768px) {

            .container>.navbar-collapse,
            .container>.navbar-header {
                margin-right: 0;
                margin-left: 0
            }
        }

        .navbar-static-top {
            z-index: 1000;
            border-width: 0 0 1px
        }

        @media (min-width:768px) {
            .navbar-static-top {
                border-radius: 0
            }
        }

        .navbar-toggle {
            position: relative;
            float: right;
            padding: 9px 10px;
            margin-top: 8px;
            margin-right: 15px;
            margin-bottom: 8px;
            background-color: transparent;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px
        }

        .navbar-toggle .icon-bar {
            display: block;
            width: 22px;
            height: 2px;
            border-radius: 1px
        }

        .navbar-toggle .icon-bar+.icon-bar {
            margin-top: 4px
        }

        @media (min-width:768px) {
            .navbar-toggle {
                display: none
            }
        }

        .navbar-nav {
            margin: 7.5px -15px
        }

        .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 20px
        }

        @media (min-width:768px) {
            .navbar-nav {
                float: left;
                margin: 0
            }

            .navbar-nav>li {
                float: left
            }

            .navbar-nav>li>a {
                padding-top: 15px;
                padding-bottom: 15px
            }
        }

        .navbar-default {
            background-color: #f8f8f8;
            border-color: #e7e7e7
        }

        .navbar-default .navbar-nav>li>a {
            color: #777
        }

        .navbar-default .navbar-nav>.active>a {
            color: #555;
            background-color: #e7e7e7
        }

        .navbar-default .navbar-nav>.disabled>a {
            color: #ccc;
            background-color: transparent
        }

        .navbar-default .navbar-toggle {
            border-color: #ddd
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: #888
        }

        .navbar-default .navbar-collapse {
            border-color: #e7e7e7
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px
        }

        .alert-info {
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bce8f1
        }

        .container:after,
        .container:before,
        .nav:after,
        .nav:before,
        .navbar-collapse:after,
        .navbar-collapse:before,
        .navbar-header:after,
        .navbar-header:before,
        .navbar:after,
        .navbar:before,
        .row:after,
        .row:before {
            display: table;
            content: " "
        }

        .container:after,
        .nav:after,
        .navbar-collapse:after,
        .navbar-header:after,
        .navbar:after,
        .row:after {
            clear: both
        }

        .center-block {
            display: block;
            margin-right: auto;
            margin-left: auto
        }

        .pull-left {
            float: left !important
        }

        @-ms-viewport {
            width: device-width
        }

        .btn {
            cursor: pointer;
        }

        .btn-primary:focus,
        .btn-primary.focus {
            color: #fff;
            background-color: #286090;
            border-color: #122b40;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #286090;
            border-color: #204d74;
        }

        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

        .btn-success:focus,
        .btn-success.focus {
            color: #fff;
            background-color: #449d44;
            border-color: #255625;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #449d44;
            border-color: #398439;
        }

        .btn-info:focus,
        .btn-info.focus {
            color: #fff;
            background-color: #31b0d5;
            border-color: #1b6d85;
        }

        .btn-info:hover {
            color: #fff;
            background-color: #31b0d5;
            border-color: #269abc;
        }

        .btn-warning {
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236;
        }

        .btn-warning:focus,
        .btn-warning.focus {
            color: #fff;
            background-color: #ec971f;
            border-color: #985f0d;
        }

        .btn-warning:hover {
            color: #fff;
            background-color: #ec971f;
            border-color: #d58512;
        }

        .btn-warning:active,
        .btn-warning.active,
        .open>.dropdown-toggle.btn-warning {
            color: #fff;
            background-color: #ec971f;
            border-color: #d58512;
        }

        .form-control:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        }

        .form-control::-moz-placeholder {
            color: #999;
            opacity: 1;
        }

        .form-control:-ms-input-placeholder {
            color: #999;
        }

        .form-control::-webkit-input-placeholder {
            color: #999;
        }

        select.form-control {
            height: 40px;
            line-height: 40px;
        }

        .navbar-default .navbar-nav>li>a:hover,
        .navbar-default .navbar-nav>li>a:focus {
            color: #333;
            background-color: transparent;
        }

        .nav>li.disabled>a:hover,
        .nav>li.disabled>a:focus {
            cursor: not-allowed;
        }

        .pull-right {
            float: right !important;
        }

        .index-country {
            height: 50px;
            background: url(https://d2rej7jvg610l7.cloudfront.net/images/index_bg.png) no-repeat 15px 0;
            padding: 15px 15px 10px 40px !important;
        }

        .index-upload {
            height: 50px;
            background: url(https://d2rej7jvg610l7.cloudfront.net/images/index_bg.png) no-repeat 15px -50px;
            padding: 15px 15px 10px 40px !important;
        }

        .index-crop {
            height: 50px;
            background: url(https://d2rej7jvg610l7.cloudfront.net/images/index_bg.png) no-repeat 15px -100px;
            padding: 15px 15px 10px 40px !important;
        }

        .index-enhancement {
            height: 50px;
            background: url(https://d2rej7jvg610l7.cloudfront.net/images/index_bg.png) no-repeat 15px -150px;
            padding: 15px 15px 10px 40px !important;
        }

        .index-print {
            height: 50px;
            background: url(https://d2rej7jvg610l7.cloudfront.net/images/index_bg.png) no-repeat 15px -200px;
            padding: 15px 15px 10px 40px !important;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 10px;
            border: 0;
            border-top: 1px solid #eee;
        }

    </style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-39560430-1']);
        _gaq.push(['_setDomainName', '123passportphoto.com']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="pull-left" href="./"><img alt="123PassportPhoto"
                        src="{{asset('assets/images/web-logo.png')}}"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#" class="index-country">Select Country</a></li>
                    <li @if($step < 1) class="disabled" @endif> <a href= @if($step >= 1) "{{route('upload')}}" @else "#" @endif class="index-upload">Upload Photo</a></li>
                    <li @if($step < 2) class="disabled" @endif> <a href= @if($step >= 2) "{{route('image_croping')}}" @else "#" @endif class="index-upload">Crop Photo</a></li>
                    <li class="disabled"><a href="#" class="index-enhancement">Enhancement</a></li>
                    <li class="disabled"><a href="#" class="index-print">Download Photo</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <p class="center-alignment">
            <img alt="How 123PassportPhoto works" class="img-responsive" height="210"
                src="{{asset('assets/images/how-it-works.jpg')}}" width="600"><br></p>
        <form method="GET" action="{{route('upload')}}" name="form" onsubmit="return checkForm()" target="_self">
            <div class="alert alert-info">
                <h3>Select country/region and photo type, then click Start:</h3>
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <select class="form-control" size="1" name="country" onchange="updatePhotoType()">
                            <option value='US'>United States</option>
                            <option value='GB'>United Kingdom</option>
                            <option value='IE'>Ireland</option>
                            <option value='AU'>Australia</option>
                            <option value='SG'>Singapore</option>
                            <option value='NZ'>New Zealand</option>
                            <option value='EU'>European Union (EU)</option>
                            <option value='SCH'>Schengen</option>
                            <option value='AL'>Albania</option>
                            <option value='AR'>Argentina</option>
                            <option value='AT'>Austria</option>
                            <option value='BD'>Bangladesh (&#2476;&#2494;&#2434;&#2482;&#2494;&#2470;&#2503;&#2486;)
                            </option>
                            <option value='BY'>Belarus (&#1041;&#1077;&#1083;&#1072;&#1088;&#1091;&#769;&#1089;&#1100;)
                            </option>
                            <option value='BE'>Belgium</option>
                            <option value='BR'>Brazil (Brasil)</option>
                            <option value='BG'>Bulgaria (&#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1080;&#1103;)
                            </option>
                            <option value='KH'>Cambodia (Kampuchea)</option>
                            <option value='CA'>Canada</option>
                            <option value='CN'>China (&#20013;&#22269;)</option>
                            <option value='CO'>Colombia</option>
                            <option value='CR'>Costa Rica</option>
                            <option value='HR'>Croatia (Hrvatska)</option>
                            <option value='CY'>Cyprus (&#922;&#965;&#960;&#961;&#959;&#962;)</option>
                            <option value='CZ'>Czech Republic (&#268;esko)</option>
                            <option value='DK'>Denmark (Danmark)</option>
                            <option value='EE'>Estonia (Eesti)</option>
                            <option value='FI'>Finland (Suomi)</option>
                            <option value='FR'>France</option>
                            <option value='DE'>Germany (Deutschland)</option>
                            <option value='GH'>Ghana</option>
                            <option value='GR'>Greece (&#39;E&#955;&#955;&#945;&#962;)</option>
                            <option value='HK'>Hong Kong</option>
                            <option value='HU'>Hungary</option>
                            <option value='IN'>India</option>
                            <option value='ID'>Indonesia</option>
                            <option value='IR'>Iran (&#1575;&#1740;&#1585;&#1575;&#1606;)</option>
                            <option value='IL'>Israel (&#1497;&#1513;&#1512;&#1488;&#1500;)</option>
                            <option value='IT'>Italy (Italia)</option>
                            <option value='JM'>Jamaica</option>
                            <option value='JP'>Japan (&#26085;&#26412;)</option>
                            <option value='KE'>Kenya</option>
                            <option value='LB'>Lebanon (&#1604;&#1576;&#1606;&#1575;&#1606;)</option>
                            <option value='MY'>Malaysia</option>
                            <option value='MX'>Mexico</option>
                            <option value='MA'>Morocco (&#1575;&#1604;&#1605;&#1594;&#1585;&#1576;)</option>
                            <option value='MM'>Myanmar (Burma)</option>
                            <option value='NL'>Netherlands (Nederland)</option>
                            <option value='NG'>Nigeria</option>
                            <option value='NO'>Norway (Norge)</option>
                            <option value='PK'>Pakistan (&#1662;&#1575;&#1705;&#1587;&#1578;&#1575;&#1606;)</option>
                            <option value='PA'>Panama</option>
                            <option value='PE'>Peru</option>
                            <option value='PH'>Philippines (Pilipinas)</option>
                            <option value='PL'>Poland (Polska)</option>
                            <option value='PT'>Portugal</option>
                            <option value='RO'>Romania</option>
                            <option value='RU'>Russia (&#1056;&#1086;&#1089;&#1089;&#1080;&#1103;)</option>
                            <option value='SA'>Saudi Arabia (&#1575;&#1604;&#1605;&#1605;&#1604;&#1603;&#1577;
                                &#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577;
                                &#1575;&#1604;&#1587;&#1593;&#1608;&#1583;&#1610;&#1577;)</option>
                            <option value='ZA' selected>South Africa</option>
                            <option value='KR'>South Korea (&#54620;&#44397;)</option>
                            <option value='ES'>Spain</option>
                            <option value='SE'>Sweden (Sverige)</option>
                            <option value='CH'>Switzerland (Schweiz)</option>
                            <option value='SY'>Syria (&#1587;&#1608;&#1585;&#1610;&#1575;)</option>
                            <option value='TW'>Taiwan (&#21488;&#28771;)</option>
                            <option value='TZ'>Tanzania</option>
                            <option value='TH'>Thailand
                                (&#3619;&#3634;&#3594;&#3629;&#3634;&#3603;&#3634;&#3592;&#3633;&#3585;&#3619;&#3652;&#3607;&#3618;)
                            </option>
                            <option value='TT'>Trinidad and Tobago</option>
                            <option value='TR'>Turkey</option>
                            <option value='UA'>Ukraine (&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1072;)</option>
                            <option value='UZ'>Uzbekistan (O&#39;zbekiston)</option>
                            <option value='VE'>Venezuela</option>
                            <option value='VN'>Vietnam (Vi&#7879;t Nam)</option>
                            <option value='ZW'>Zimbabwe</option>
                        </select>
                        <br />
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12 text-left">
                        <span id="photo_type_info">
                            <input type='radio' name='type' id='Passport' value='Passport' checked><label class='lead'
                                for='Passport'>&nbsp;Passport (2 x 2 inch)</label> </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
                        <input class="btn btn-lg btn-primary center-block btn-block" name="Submit1" type="submit"
                            value="Start &raquo;" />
                    </div>
                </div>
            </div>
        </form>

        <div>
            <h3>Quick Links</h3>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 center-block">
                    <a href="upload_photo.php?country=US&amp;type=Passport" class="btn btn-success center-block"
                        role="button">&nbsp;&nbsp;Make US Passport/Visa Photo &raquo;&nbsp;&nbsp;&nbsp;</a>
                    <br>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 center-block">
                    <a href="upload_photo.php?country=GB&amp;type=Passport" class="btn btn-info center-block"
                        role="button">&nbsp;&nbsp;Make UK Passport/Visa Photo &raquo;&nbsp;&nbsp;&nbsp;</a>
                    <br>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 center-block">
                    <a href="upload_photo.php?country=AU&amp;type=Passport" class="btn btn-warning center-block"
                        role="button">&nbsp;&nbsp;Make Australian Passport/Visa Photo &raquo;&nbsp;&nbsp;&nbsp;</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h2>Why 123PassportPhoto?</h2>
                <ul class="tick-list2">
                    <li class="info-list"><strong>Save money:</strong> You don't need
                        to pay so much for your passport photo. With
                        123PassportPhoto service, you can make your own
                        passport photos and print it yourself.</li>
                    <li class="info-list"><strong>Save time:</strong>
                        Just take a photo using digital camera, then
                        upload and create passport photo with 3 steps.
                        It takes less than 5 minutes to be ready for download. </li>
                    <li class="info-list"><strong>White background enhancement:</strong>
                        Our premium feature can help you to adjust the
                        photo so that you can get a white background
                        passport photo. Most countries prefer white
                        background passport photos.</li>
                    <li class="info-list"><strong>Ultra high resolution photo:</strong>
                        123PassportPhoto generates passport photos
                        suitable for 600 dpi printing.</li>
                    <li class="info-list"><strong>We support 50+
                            countries</strong> such as USA, UK, Ireland,
                        Australia, Canada, France, Germany, Japan, South
                        Africa, Brazil, China, Singapore, Russia, Hong
                        Kong, Netherlands, Argentina and more.</li>
                </ul>
                <h2>General Passport Photo Requirements</h2>
                <ul class="info-list">
                    <li>Neutral facial expression: a. do not open mouth; b. open eyes.</li>
                    <li>No glasses; No Hat.</li>
                    <li>Don't cover eyebrows with hair.</li>
                </ul>
                <p>Find more information on
                    <a href="passport-photo-guidelines.php">requirements
                        and photo taking tips here</a>.</p>
                <h2>How to Download Photos Using Color Printer</h2>
                <ol class="info-list">
                    <li>Download the 4R sheet with multiple photos.</li>
                    <li>Check the requirements and use
                        correct 4R photographic paper (matte, semi-matt or
                        glossy paper).</li>
                    <li>Print the 4R sheet with no
                        margins. Make sure the 4R picture fit exactly on the
                        4R photo paper.</li>
                    <li>Cut the 4R sheet along
                        the gray lines and you will get multiple photos.</li>
                </ol>
            </div>
            <div class="col-md-6">
                <h2>Steps to create passport photos</h2>
                <ol class="info-list">
                    <li>Select country and ID photo type, and click
                        Start.</li>
                    <li>Upload photo. In order to correctly make passport photo, the picture size should be
                        smaller than 10MB, and the dimensions
                        should be smaller than 4000 x 3000 pixels. The
                        system accepts only .JPG or .JPEG files. The
                        Crop page opens when the photo is uploaded.</li>
                    <li>Crop photo to the correct passport photo
                        size dimension.</li>
                    <li>If you need white background enhancement,
                        select an enhancement.</li>
                    <li>Click the Next button, you will get a
                        printable passport picture which is suitable to be
                        printed on 4R (4x6") photo paper.</li>
                    <li>Save the 4R sheet and print it using a
                        photo printer or print it at any photo center.</li>
                </ol>
                <h2>How to Take Baby Passport Photos</h2>
                <ol class="info-list">
                    <li>Lay white or light color baby quilt or blanket in a bright room or other places with good
                        lighting.</li>
                    <li>Lay the baby on the quilt or blanket.</li>
                    <li>Ensure baby is looking straight at the
                        camera with eyes open, mouth closed and not
                        smiling.</li>
                </ol>
                <p>See
                    <a href="make-baby-passport-photos.php">more
                        tips on taking baby passport photos here</a>.</p>
                <h2>Passport Photo Size Requirements</h2>
                <ul class="info-list">
                    <li>
                        <a href="photo-requirements.php?country_code=US&amp;type=Passport">United States Passport Photos
                            Size Requirements</a></li>
                    <li>
                        <a href="photo-requirements.php?country_code=GB&amp;type=Passport">United Kingdom Passport
                            Photsos Size Requirements</a></li>
                    <li>
                        <a href="photo-requirements.php?country_code=AU&amp;type=Passport">Australia Passport Photos
                            Size Requirements</a></li>
                </ul>
                <p>Find <a href="passport-photo-requirements.php">passport photo requirements for more
                        countries here</a>.</p>
                <h2>Quick Links to Make Passport Photos</h2>
                <ul class="info-list">
                    <li><a href="us-passport-photos.php">Make US Passport Photos</a></li>
                    <li><a href="uk-passport-photos.php">Make UK Passport Photos</a></li>
                    <li><a href="australia-passport-photos.php">Make Australia Passport Photos</a></li>
                </ul>
                <p><a href="passport-photo-tutorials.php">More tutorials on making passport photos</a></p>
            </div>
        </div>

        <hr>
        <footer>
            2008-2019 &copy; 123PassportPhoto
            <div class="pull-right">
                <a href="about.php">About</a> | <a href="contact.php">Contact Us</a> | <a
                    href="resend-premium-code.php">Resend Premium Code</a> | <a href="./blog/">Blog</a> | <a
                    href="tos.php">Terms</a> | <a href="privacy.php">Privacy</a>
            </div>
        </footer>
    </div>

    <script src="https://d2rej7jvg610l7.cloudfront.net/assets/js/jquery.min.js" defer></script>
    <script async src="https://d2rej7jvg610l7.cloudfront.net/assets/js/bootstrap.min.js" defer></script>
</body>

</html>
