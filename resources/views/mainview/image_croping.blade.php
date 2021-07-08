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
    <link rel="canonical" href="https://www.123passportphoto.com/crop_photo.php">
    <script language="JavaScript" src="https://d2rej7jvg610l7.cloudfront.net/scripts/functions.js"></script>
    <script language="JavaScript" src="https://d2rej7jvg610l7.cloudfront.net/scripts/home.js"></script>

    <title>Crop photo - 123PassportPhoto.com</title>

    <link href="https://d2rej7jvg610l7.cloudfront.net/css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="https://d2rej7jvg610l7.cloudfront.net/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://d2rej7jvg610l7.cloudfront.net/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://d2rej7jvg610l7.cloudfront.net/dist/cropper.css">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://d2rej7jvg610l7.cloudfront.net/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
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

        .cropper-dashed.dashed-h {
            top: 10%;
            left: 20%;

            width: 60%;
            height: 64%;
        }

        .img-container {
            background-color: #f7f7f7;
            width: 100%;
            text-align: center;
        }

        .img-container {
            min-height: 200px;
            max-height: 516px;
            margin-bottom: 20px;
        }

        @media (min-width: 768px) {
            .img-container {
                min-height: 516px;
            }
        }

        .img-container>img {
            max-width: 100%;
        }

    </style>

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
                    <li><a href="upload_photo.php" class="index-upload">Upload Photo</a></li>
                    <li class="active"><a href="{{route('image_croping')}}" class="index-crop">Crop Photo</a></li>
                    <li class="disabled"><a href="#" class="index-enhancement">Enhancement</a></li>
                    <li class="disabled"><a href="#" class="index-print">Download Photo</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>


    <div class="container">
        <form method="get" action="{{route('enchancement')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="img-container">
                        {{-- {{dd('image_filename')}} --}}
                        <img id="image" src="{{asset('/images/'.$image)}}" alt="Picture">
                    </div>
                </div>
            </div>
            <input type="hidden" name="aspect-x" id="aspect-x" value="{{$aspect_ratio_x}}">
            <input type="hidden" name="aspect-y" id="aspect-y" value="{{$aspect_ratio_y}}">
            
            <input type="hidden" name="x" id="x">
            <input type="hidden" name="y" id="y">
            <input type="hidden" name="crop_width" id="crop_width">
            <input type="hidden" name="crop_height" id="crop_height">

            <input type="hidden" name="pp_width_pixel" id="pp_width_pixel" value="389">
            <input type="hidden" name="pp_height_pixel" id="pp_height_pixel" value="566">
            <input type="hidden" name="original_img" id="original_img"
                value="{{asset($image)}}">
            <input type="hidden" name="resized_img" id="resized_img"
                value="{{asset('/images/'.$image)}}">
            <input type="hidden" name="original_width" id="original_width" value="6000">
            <input type="hidden" name="original_height" id="original_height" value="4500">
            <input type="hidden" name="resized_width" id="resized_width" value="200">
            <input type="hidden" name="resized_height" id="resized_height" value="400">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="upload_photo.php" class="btn btn-default pull-left" role="button">&nbsp;&nbsp;&laquo;
                        Back&nbsp;&nbsp;&nbsp;</a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <input name="Submit1" type="submit" value="&nbsp;&nbsp;&nbsp;Next &raquo;&nbsp;&nbsp;"
                        class="btn btn-primary pull-right" />
                </div>
                <br>
                <br>
                <br>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <h4>How to crop photo:</h4>
                    <ol>
                        <li>Move and resize the crop box so that the chin and the top of the head
                            fits into the blue bars.</li>
                        <li>If you are using computer, you can use the up, down, left and
                            right arrow keys to move the photo so that the person in the
                            photo is centered horizontally.<br></li>
                    </ol>
                    <p class="text-center">
                        <img alt="How to crop photo" class="img-responsive img-center"
                            src="https://d2rej7jvg610l7.cloudfront.net/images/crop-photo.jpg">
                    </p>
                </div>
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
    <!-- Scripts -->
    <script src="https://d2rej7jvg610l7.cloudfront.net/dist/cropper.js"></script>
    <script type="text/javascript">
        $(function () {

            'use strict';

            var console = window.console || {
                log: function () {}
            };
            var aspect_x = $('#aspect-x').val();
            var aspect_y = $('#aspect-y').val();
            console.log(aspect_x/aspect_y)
            var $image = $('#image');
            var $dataX = $('#x');
            var $dataY = $('#y');
            var $dataWidth = $('#crop_width');
            var $dataHeight = $('#crop_height');
            var options = {
                aspectRatio: aspect_x/aspect_y,
                responsive: true,
                zoomable: false,
                movable: true,
                dragMode: 'none',
                viewMode: 1,
                crop: function (e) {
                    $dataX.val(Math.round(e.x));
                    $dataY.val(Math.round(e.y));
                    $dataHeight.val(Math.round(e.height));
                    $dataWidth.val(Math.round(e.width));
                }
            };

            // Cropper
            $image.on({
                'build.cropper': function (e) {
                    //console.log(e.type);
                },
                'built.cropper': function (e) {
                    //console.log(e.type);
                },
                'cropstart.cropper': function (e) {
                    //console.log(e.type, e.action);
                },
                'cropmove.cropper': function (e) {
                    //console.log(e.type, e.action);
                },
                'cropend.cropper': function (e) {
                    //console.log(e.type, e.action);
                },
                'crop.cropper': function (e) {
                    //console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);
                },
                'zoom.cropper': function (e) {
                    //console.log(e.type, e.ratio);
                }
            }).cropper(options);

            // Keyboard
            $(document.body).on('keydown', function (e) {

                if (!$image.data('cropper') || this.scrollTop > 300) {
                    return;
                }

                switch (e.which) {
                    case 37:
                        e.preventDefault();
                        $image.cropper('move', -1, 0);
                        break;

                    case 38:
                        e.preventDefault();
                        $image.cropper('move', 0, -1);
                        break;

                    case 39:
                        e.preventDefault();
                        $image.cropper('move', 1, 0);
                        break;

                    case 40:
                        e.preventDefault();
                        $image.cropper('move', 0, 1);
                        break;
                }

            });
        });

    </script>
</body>

</html>
