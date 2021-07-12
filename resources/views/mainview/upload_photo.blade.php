<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="" />
    <meta name="author" content="">
    <link rel="icon" href="https://d2rej7jvg610l7.cloudfront.net/images/favicon.ico">
    <link rel="canonical" href="https://www.123passportphoto.com/upload_photo.php">
    <script language="JavaScript" src="https://d2rej7jvg610l7.cloudfront.net/scripts/functions.js"></script>
    <script language="JavaScript" src="https://d2rej7jvg610l7.cloudfront.net/scripts/upload_photo.js"></script>

    <title>Upload photo for China Visa - 123PassportPhoto.com</title>

    <link href="https://d2rej7jvg610l7.cloudfront.net/css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="https://d2rej7jvg610l7.cloudfront.net/assets/css/bootstrap.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://d2rej7jvg610l7.cloudfront.net/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <style>
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

    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- static navbar -->
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
                        src="https://d2rej7jvg610l7.cloudfront.net/images/web-logo.png"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="./" class="index-country">Select Country</a></li>
                    <li class="active"><a href="{{route('upload')}}" class="index-upload">Upload Photo</a></li>
                    <li class="disabled"><a href="{{route('image_croping')}}" class="index-crop">Crop Photo</a></li>
                    <li class="disabled"><a href="#" class="index-enhancement">Enhancement</a></li>
                    <li class="disabled"><a href="#" class="index-print">Download Photo</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        <h3>Upload photo for China (&#20013;&#22269;) Visa</h3>
        <div style="DISPLAY: inline; width: 100%; height: 100%" id="photo_browse_layer">
            <form method="POST" name="form" action="{{route('uploadimage')}}" enctype="multipart/form-data"
                onsubmit="return checkForm();">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="alert alert-info">
                            <strong>Tip:</strong> The file size should be smaller that 10MB and the photo size should be
                            smaller than 4000 x 3000. The system processes only .jpg or .jpeg files.
                        </div>
                        <div>
                            <div class="center-block">
                                <strong>Please select your photo:</strong><br><br>
                                <label class="btn btn-lg btn-block btn-primary">
                                    Browse... <input type="file" accept=".jpg,.jpeg" name="file" id="file"
                                        style="display: none;">
                                </label>
                            </div>
                            <br><br>
                        </div>
                        <input type="hidden" name="country" value="CN">
                        <input type="hidden" name="type" value="Visa">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="alert alert-info">
                            <h4>How to take passport photo:</h4>
                            <p>
                                <ul class="info-list">
                                    <li>Take photo in front of a white background.</li>
                                    <li>Neutral facial expression: a. do not open mouth; b. open eyes.</li>
                                    <li>No glasses; No Hat.</li>
                                    <li>Don't cover eyebrows with hair.</li>
                                </ul>
                            </p>
                            <p class="text-center">
                                <img class="img-responsive img-center" alt="Take passport photo"
                                    src="https://d2rej7jvg610l7.cloudfront.net/images/take-passport-photo.jpg">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="./" class="btn btn-default pull-left" role="button">&nbsp;&nbsp;&laquo;
                            Back&nbsp;&nbsp;&nbsp;</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="container" style="DISPLAY: none; width: 100%; height: 220px" id="waiting_layer">
            <div class="row text-center">
                Uploading photo... Please wait. <br><br>
                <img alt="" border="0" src="https://d2rej7jvg610l7.cloudfront.net/images/wait3.gif" width="300"
                    height="24" />
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
    </div> <!-- /container -->

    <script src="https://d2rej7jvg610l7.cloudfront.net/assets/js/jquery.min.js"></script>
    <script src="https://d2rej7jvg610l7.cloudfront.net/assets/js/bootstrap.min.js"></script>
    <script src="https://d2rej7jvg610l7.cloudfront.net/js/ie10-viewport-bug-workaround.js"></script>
    <script>
        $("#file").change(function () {
            submitForm();
        });

    </script>
</body>

</html>
