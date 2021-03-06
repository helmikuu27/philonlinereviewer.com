<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Philippines Online Reviewer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Online Reviewer for Aspiring Filipino Professionals.">
    <meta name="keywords" content="Online reviewer, LET reviewer, CPA reviewer, NAPOLCOM reviewer, Civil Service reviewer, reviewer, Philippines reviewer"
    <!-- Bootstrap -->	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/iframe.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>  
	<div class="container header">
	<nav class="navbar-inner">
			<div class="header">
				<div class="navbar-header">
				  <a href="{{ URL::to('/') }}"><img src = 'img/logo.png' width="100%" alt="Philippines Online Reviewer"/></h1></a>
				</div>				
			</div>
			<div class="ads-header">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- ads-top-top -->
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
	<div class="container exam"> <!--container-->					
		<div class="row"><!--start of row-->
			<div class="col-md-8">
				@foreach($data as $key => $value)				
				<?php
				$date = date('Y-m-d H:i:s');
				$id=$value->id;
				$exam=$value->exam;
				$update =DB::table('users')->where('id', $id)->update(array(
						'score' => 0,
						'item' => 0,
						'updated_at'=> $date));
						
				$i = $value->item;
				$o = $value->score;
				$percent = ( $o / $i) * 100;									
				$percent = round($percent);	
				?>
				
				<br/>
				<h4>You scored {{$value->score}} out of {{$value->item}} which is equevalent to <?php echo $percent; ?>%!</h4>
										
				
				@endforeach
				<br/>
					
				<p>Think you can do better? <a href="{{ URL::to('/') }}">Try again</a>.</p>				
			
				<form action="addscore" role="form" method="post">
					
					<div class="form-group">
					<label for="">Name</label>
					<input type="text" name="name" id="" class="form-control">
					</div>
					<input type="hidden" id="disable" class="form-control" value="{{$percent}}" name="score" />	
					<input type="hidden" id="disable" class="form-control" value="{{$exam}}" name="exam" />					
					<div class="form-group">
					<label for="">School</label>
					<input type="text" name="school" id="" class="form-control">
					</div>						
					<div class="col-md-6 noleft">			
					<input type="submit" Value="Share your score" class="btn btn-primary">
					</div>
				</form>
			</div>
			<div class="col-md-4">
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
	<div class=" container footer">
		<footer>
		&copy;<?php echo date("Y") ?> <a>Philippines Online Reviewer</a> All rights reserved. 
		</footer>				
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.0.js"></script>		
  </body>
</html>