
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
    <link rel="canonical" href="https://www.123passportphoto.com/enhancement.php">
    <script language="JavaScript" src="https://d2rej7jvg610l7.cloudfront.net/scripts/functions.js"></script>
    <script language="JavaScript" src="https://d2rej7jvg610l7.cloudfront.net/scripts/home.js"></script>

    <title>Enhancement - 123PassportPhoto.com</title>
    
    <link href="https://d2rej7jvg610l7.cloudfront.net/css/main.css" rel="stylesheet">

  <link rel="stylesheet" href="https://d2rej7jvg610l7.cloudfront.net/assets/css/bootstrap.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://d2rej7jvg610l7.cloudfront.net/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<style>
.index-country {
  height:50px;
  background:url(https://d2rej7jvg610l7.cloudfront.net/images/index_bg.png) no-repeat 15px 0;
  padding:15px 15px 10px 40px !important;
}

.index-upload {
  height:50px;
  background:url(https://d2rej7jvg610l7.cloudfront.net/images/index_bg.png) no-repeat 15px -50px;
  padding:15px 15px 10px 40px !important;
}

.index-crop {
  height:50px;
  background:url(https://d2rej7jvg610l7.cloudfront.net/images/index_bg.png) no-repeat 15px -100px;
  padding:15px 15px 10px 40px !important;
}

.index-enhancement {
  height:50px;
  background:url(https://d2rej7jvg610l7.cloudfront.net/images/index_bg.png) no-repeat 15px -150px;
  padding:15px 15px 10px 40px !important;
}

.index-print {
  height:50px;
  background:url(https://d2rej7jvg610l7.cloudfront.net/images/index_bg.png) no-repeat 15px -200px;
  padding:15px 15px 10px 40px !important;
}
</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
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

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <!-- static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="pull-left" href="./"><img alt="123PassportPhoto" src="https://d2rej7jvg610l7.cloudfront.net/images/web-logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="./" class="index-country">Select Country</a></li>
            <li><a href="upload_photo.php" class="index-upload">Upload Photo</a></li>            <li><a href="crop_photo.php" class="index-crop">Crop Photo</a></li>            <li class="active"><a href="enhancement.php" class="index-enhancement">Enhancement</a></li>            <li><a href="select-photo.php" class="index-print">Download Photo</a></li>          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	
    <div class="container">
    <h3>Enhancement</h3>
    <p>Tap to select the best photo. We will generate the final photo based on your selection.</p>
     <div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 text-center">
				<h4>Original</h4>
				<a href="{{route('generateimage','original')}}">
				<img class="thumbnail center-block" alt="" src="{{$image1}}" />
				</a>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center">
				<h4>Enhancement 1</h4>
				<a href="{{route('generateimage','enhancement1')}}">
				<img class="thumbnail center-block" alt="" src="{{$image2}}" />
				</a>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center">
				<h4>Enhancement 2</h4>
				<a href="{{route('generateimage','enhancement2')}}">
				<img class="thumbnail center-block" alt="" src="{{$image3}}" />
				</a>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center">
				<h4>Enhancement 3</h4>
				<a href="{{route('generateimage','enhancement3')}}">
				<img class="thumbnail center-block" alt="" src="{{$image4}}" />
				</a>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center">
				<h4>Enhancement 4</h4>
				<a href="{{route('generateimage','enhancement4')}}">
				<img class="thumbnail center-block" alt="" src="{{$image5}}" />
				</a>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center">
				<h4>Enhancement 5</h4>
				<a href="{{route('generateimage','enhancement5')}}">
				<img class="thumbnail center-block" alt="" src="{{$image6}}" />
				</a>
			</div>
	  </div>
	  
		<div class="row">
		  <div class="col-6 col-sm-6 col-md-6 col-lg-6" >
		  	<a href="crop_photo.php" class="btn btn-default pull-left" role="button">&nbsp;&nbsp;&laquo; Back&nbsp;&nbsp;&nbsp;</a>
		  </div>
		  <div class="col-6 col-sm-6 col-md-6 col-lg-6">
		    <a href="{{route('generateimage','original')}}" class="btn btn-primary pull-right" role="button">&nbsp;&nbsp;&nbsp;Next &raquo;&nbsp;&nbsp;</a>
		  </div>
		</div>
      <hr>
      <footer>
        2008-2019 &copy; 123PassportPhoto
        <div class="pull-right">
        	<a href="about.php">About</a> | <a href="contact.php">Contact Us</a> | <a href="resend-premium-code.php">Resend Premium Code</a> | <a href="./blog/">Blog</a> | <a href="tos.php">Terms</a> | <a href="privacy.php">Privacy</a>
        </div>
      </footer>
   </div> <!-- /container -->

    <script src="https://d2rej7jvg610l7.cloudfront.net/assets/js/jquery.min.js"></script>
    <script src="https://d2rej7jvg610l7.cloudfront.net/assets/js/bootstrap.min.js"></script>
    <script src="https://d2rej7jvg610l7.cloudfront.net/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
