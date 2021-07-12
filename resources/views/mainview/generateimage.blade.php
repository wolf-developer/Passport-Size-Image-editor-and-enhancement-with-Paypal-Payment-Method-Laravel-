
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
    <link rel="canonical" href="https://www.123passportphoto.com/select-photo.php">
    <script language="JavaScript" src="https://d2rej7jvg610l7.cloudfront.net/scripts/functions.js"></script>
    <script language="JavaScript" src="/scripts/select-photo.js"></script>

    <title>Download photo - 123PassportPhoto.com</title>
    
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
            <a class="pull-left" href="#"><img alt="123PassportPhoto" src="https://d2rej7jvg610l7.cloudfront.net/images/web-logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="disabled"><a href="./" class="index-country">Select Country</a></li>
            <li class="disabled"><a href="{{route('upload')}}" class="index-upload">Upload Photo</a></li>            
            <li class="disabled"><a href="{{route('image_croping')}}" class="index-crop">Crop Photo</a></li>            
            <li class="disabled"><a href="{{route('enchancement')}}" class="index-enhancement">Enhancement</a></li>            
            <li class="active"><a href="#" class="index-print">Download Photo</a></li>          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
		<h2>Download photo for printing</h2>
		<br>
		<img style='border: 1px solid #888888;' src="{{asset($image1)}}" class='img-responsive' width='600' height='400'>		</div>
	  </div>
	  <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
        	<br>
        	<p class="pull-right"><a style="cursor: pointer;" onclick="showPremiumCode()">Have a premium code</a></p>
        	<div id="premium_code_panel" style="display:none">
			<input name="premium_code" id="premium_code" type="text" class="form-control"  placeholder="Enter premium code" value="" />
			<span id="premium_code_msg"></span><br />
			</div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
			<p class="pull-left">
			Photo paper size:</p>
					<select name="paper_size" id="paper_size" class="form-control">
					<option selected="" value="4R">4R (4x6 inch or 10.2 x 15.2 cm)</option>
					<option value="100x150">10 x 15 cm</option>
					<option value="3R">3R (3.5 x 5 inch)</option>
					<option value="5R">5R (5 x 7 inch)</option>
					<option value="L">L (89 x 127 mm or 3.5 x 5 inch)</option>
					<option value="2L">2L (127 x 178 mm or 5 x 7 inch)</option>
					<option value="A4">A4 (21 x 29.7 cm)</option>
					<option value="A5">A5 (14.85 x 21 cm)</option>
					<option value="Letter">Letter (8.5 x 11 inch)</option>
					<option value="Legal">Legal (8.5 x 14 inch)</option>
					</select>
				<br>
			<input name="nextbutton" type="button" value="Download printable photo" class="btn btn-lg btn-primary center-block btn-block" onclick="selectPrintablePhoto()" /><br>
			<br>
			<br>
			<br>
			<h2>Download single digital photo for online submission</h2>
			<br>
			<img style='border: 1px solid #888888;' src="{{asset($image1)}}" class='img-fluid'><br><br>
			<input name="nextbutton1" type="button" value="Download single digital photo for online submission" class="btn btn-lg btn-primary center-block btn-block" onclick="selectDigitalPhoto();" /> 
			<br>
		</div>
	  </div>
	  <div class="row">
	    <div class="col-md-6 col-lg-6" >
	    	<a href="{{('../enchancement_view')}}" class="btn btn-default pull-left" role="button">&nbsp;&nbsp;&laquo; Back&nbsp;&nbsp;&nbsp;</a>
	    	<br>
	    </div>
	    <div class="col-md-6 col-lg-6">
	    
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
