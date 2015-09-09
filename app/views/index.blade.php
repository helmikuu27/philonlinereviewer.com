<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Philippines Online Reviewer</title>	
    <meta name="description" content="The Online Reviewer for Aspiring Filipino Professionals.">
    <meta name="keywords" content="Online reviewer, LET reviewer, CPA reviewer, NAPOLCOM reviewer, Civil Service reviewer, reviewer, Philippines reviewer">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Online Reviewer for Aspiring Filipino Professionals.">
    <meta name="keywords" content="Online reviewer, LET reviewer, CPA reviewer, NAPOLCOM reviewer, Civil Service reviewer, reviewer, Philippines reviewer"
    <!-- Bootstrap -->	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body> 
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=402227956552509";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="container header">
	
	<nav class="navbar-inner">
			<div class="header">
				<div class="navbar-header">
				  <a href="{{ URL::to('/') }}"><img src = 'img/logo.png' width="100%" alt="Philippines Online Reviewer"/></h1></a>
				</div>				
			</div>
			<div class="ads-header">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- renta-top-result -->
						<ins class="adsbygoogle"
							 style="display:inline-block;width:468px;height:60px"
							 data-ad-client="ca-pub-2642834291231304"
							 data-ad-slot="4333051568"></ins>
						<script>						
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
			</div>			
    </nav>
	</div>
	<div class="container bordergray"></div>		
	<div class="container bordergreen"></div>
	<div class="container mainindex"> <!--container-->
		@include('includes.header')
		<div class="row"><!--start of row-->
			<div class="col-md-8">
				<h3>Review Online for Free</h3>
				<p>
				Philippines Online Reviewer is a free online reviewer that aims to help all the examinees of the professional licensure examinations of the Philippines.
				It is designed to increase your chances of passing a licensure exam by providing you an adequate questions that will finely tune and align your knowledge to this kind
				of examination. 
				</p>					
			
			<div class="buttons">
				<div class="col-md-6 noleft">
				<a class="btn" href="{{ URL::to('LET-examination') }}">LET REVIEWER</a>
				</div>
				<div class="col-md-6 noleft">
				<a class="btn" href="{{ URL::to('Civil-exam') }}">CIVIL SERVICE REVIEWER</a>
				</div>
			</div>
			
			<div class="buttons">
				<div class="col-md-6 noleft">
				<a class="btn" href="{{ URL::to('nursing-exam') }}">NURSING REVIEWER</a>
				</div>
				<div class="col-md-6 noleft">
				<a class="btn" href="{{ URL::to('napolcom-exam') }}">NAPOLCOM REVIEWER</a>
				</div>
			</div>
			
			<div class="scorer">
				<h3>Top Scorers</h3>
					<ul class="nav nav-tabs" role="tablist">
						<li><a href="#LET" data-toggle="tab">LET</a></li>
						<li><a href="#CIVIL" data-toggle="tab">CIVIL SERVICE</a></li>
						<li><a href="#NURSING" data-toggle="tab">NURSING</a></li>
						<li><a href="#NAPOLCOM" data-toggle="tab">NAPOLCOM</a></li>						
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="LET">
							@include('includes.lettopscorer')	      
						</div>
						<div class="tab-pane fade" id="CIVIL">
							@include('includes.civiltopscorer')	
						</div>
						<div class="tab-pane fade" id="NURSING">
							<h4>Not yet available.</h4>
						</div>
						<div class="tab-pane fade" id="NAPOLCOM">
							<h4>Not yet available.</h4>
						</div>																						
					</div>
					
			</div>
			<div class="info">
				<h3>News & Other Info</h3>
				<!-- /*Requirements */-->
				<p><b>Requirements: Philippine Public School Teacher</b></p>
				<p>What are the basic requirements in applying for public
				school teacher in the Philippines? This question is one of the most common inquiries on the internet about public school teacher. <a href="{{ URL::to('Requirements-Philippine-Public-School-Teacher') }}">Read more..</a></p>
				<!-- /*civil service */-->
				<p><b>Civil Service Exam: Tips and other Information</b></p>
				<p>CSC Professional Eligibility in the Philippines is one of the requirements to be working to many government offices and agencies like GSIS, SSS, BIR etc. 
				The complete requirements to take the Civil Service Exam for Professional and Sub-professional levels are the following:. <a href="{{ URL::to('tips-civil-service-examination') }}">Read more..</a></p> 				
				
			</div>
			<div class="fb-comments" data-href="http://www.philonlinereviewer.com" data-width="700"></div>
			</div>
			<div class="col-md-4 ads">
				<script type="text/javascript"><!--
				  google_ad_client = "ca-pub-2642834291231304";
				  /* expired links square */
				  google_ad_slot = "5246031149";
				  google_ad_width = 300;
				  google_ad_height = 250;
				  //-->
				</script>
				<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>	
				
				<script type="text/javascript"><!--
				  google_ad_client = "ca-pub-2357695622202045";
				  /* expired links square */
				  google_ad_slot = "5246031149";
				  google_ad_width = 300;
				  google_ad_height = 250;
				  //-->
				</script>
				<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
				
				<script type="text/javascript"><!--
				  google_ad_client = "ca-pub-2357695622202045";
				  /* expired links square */
				  google_ad_slot = "5246031149";
				  google_ad_width = 300;
				  google_ad_height = 250;
				  //-->
				</script>
				<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
			</div>
		</div><!--end of row-->		
	
	
	</div><!--end of container-->
	<div class="container footer">
		<footer>
		&copy;<?php echo date("Y") ?> <a>Philippines Online Reviewer</a> All rights reserved. 
		</footer>				
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.0.js"></script>
	<script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
	<script type="text/javascript">  
	  (function() {  
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;  
		po.src = 'https://apis.google.com/js/plusone.js';  
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);  
	  })();  
	</script>
  </body>
</html>