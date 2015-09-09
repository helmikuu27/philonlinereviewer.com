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
	<div class="container exam"> <!--container-->
	
		<div class="row"><!--start of row-->
			<div class="col-md-8">
			<div class="col-lg-12 col-md-12 col-sm-12">					
				<!-- will be used to show any messages -->
				@if (Session::has('message'))
					<p class="alert alert-info">{{ Session::get('message') }}</p>
				@endif
				@if (Session::has('error'))
					<p class="alert alert-error">{{ Session::get('error') }}</p>
				@endif	
			</div>
			<?php			
			$name= Config::get('civilgenerator.some_key');
			
			$timer = Session::get('time');	
								
			$ucheck = DB::table('users')->where('user', $name)->first();
			$item=($ucheck->item);
				$val1 = $item;
				$val2 = 129;
				$percent = ( $val1 / $val2) * 100;									
				$percent = round($percent);	
								
			If ($item <= 129){
				$checkmate = DB::select("select test from $name where status = ?", array(''));
				if($checkmate){
					if (DB::connection()->getDriverName() == 'mysql') 
						{
						$random = DB::table($name)->where('status','')->first(); 
							$id=($random->id);	
							$test=($random->test);			  
							$opt1=($random->option1);
							$opt2=($random->option2);
							$opt3=($random->option3);
							$opt4=($random->option4);
							$opt5=($random->option5);	
							
						$o=Session::put('id', ($id));
						echo "<div class ='item'>".$id.".</div>";				
						echo "<div class ='text'>".$test."</div>";
						$update = DB::update("update $name set status = 1 where id = ?", array($id));
						}
					}else{
					echo "<script>window.parent.location = 'civil-finish'</script>";			
					exit;
					}
			}else{
			echo "<script>window.parent.location = 'civil-finish'</script>";			
			exit;
			}
			?>
	<script src='http://code.jquery.com/jquery-1.11.0.min.js'></script>
	<script>
	function checkthis()
	{	   
	$('#btn').prop('disabled', false);	
	}
	document.getElementById('inlineframe').contentWindow.checkthis();
	</script>		
	<form name='opt' action='civil' role='form' method='post'>			
		<label class='block'><span style="color: #214478;">A</span>  <input type='radio' name='ans' value='A' onclick='checkthis();'> <?php echo $opt1; ?></label>
		<label class='block'><span style="color: #214478;">B</span>  <input type='radio' name='ans' value='B' onclick='checkthis();'> <?php echo $opt2; ?></label>
		<label class='block'><span style="color: #214478;">C</span>  <input type='radio' name='ans' value='C' onclick='checkthis();'> <?php echo $opt3; ?></label>
		<label class='block'><span style="color: #214478;">D</span>  <input type='radio' name='ans' value='D' onclick='checkthis();'> <?php echo $opt4; ?></label>
		<label class='block'><span style="color: #214478;">E</span>  <input type='radio' name='ans' value='E' onclick='checkthis();'> <?php echo $opt5; ?></label>
	<div class='row top'>
		<div class='col-md-6'>
		<button class='btn' id='btn' disabled>Submit</button>	
		</div>
	</div>
	</form>

	<div class="timer">				
		<div class="row">
			<div class="col-md-1">
				<img src="img/book.png"/>
			</div>
			<div class="col-md-2">
				<p>Question</p>
			</div>
		</div>
			
		<div class="row">
				<div class="col-md-12">
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percent; ?>%;">				
						</div>
						<div class="sr-only"><?php echo $percent; ?>Complete</div>
					</div>
				</div>				
		</div>
	</div>			
			
			
			
							
			
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