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
			$ids = Session::get('id');
			$timer = Session::get('time');	
											
			$ucheck = DB::table('users')->where('user', $name)->first();
			$item=($ucheck->item);
				$val1 = $item;
				$val2 = 129;
				$percent = ( $val1 / $val2) * 100;									
				$percent = round($percent);	
				
			$random = DB::table($name)->where('id', $ids)->first(); 
			
				$id=($random->id);	
				$test=($random->test);			  
				$opt1=($random->option1);
				$opt2=($random->option2);
				$opt3=($random->option3);
				$opt4=($random->option4);
				$opt5=($random->option5);	
							
				
				echo "<div class ='item'>".$id.".</div>";				
				echo "<div class ='text'>".$test."</div>";
				$answer = Session::get('check');				
				
				if($answer =="A"){echo "<label class='block'><span style='color: #214478;'>A</span>  <span style='color: #214478;'>A</span>  <input type='radio' value='A' checked>$opt1</label>";}
				else{echo "<label class='block'><span style='color: #214478;'>A</span>  <input type='radio' value='A' disabled>$opt1</label>";}
				if($answer =="B"){echo "<label class='block'><span style='color: #214478;'>B</span>  <input type='radio' value='B' checked>$opt2</label>";}
				else{echo "<label class='block'><span style='color: #214478;'>B</span>  <input type='radio' value='B' disabled>$opt2</label>";}
				if($answer =="C"){echo "<label class='block'><span style='color: #214478;'>C</span>  <input type='radio' value='C' checked>$opt3</label>";}
				else{echo "<label class='block'><span style='color: #214478;'>C</span>  <input type='radio' value='C' disabled>$opt3</label>";}
				if($answer =="D"){echo "<label class='block'><span style='color: #214478;'>D</span>  <input type='radio' value='D' checked>$opt4</label>";}
				else{echo "<label class='block'><span style='color: #214478;'>D</span>  <input type='radio' value='D' disabled>$opt4</label>";}
				if($answer =="E"){echo "<label class='block'><span style='color: #214478;'>E</span>  <input type='radio' value='E' checked>$opt5</label>";}
				else{echo "<label class='block'><span style='color: #214478;'>E</span>  <input type='radio' value='E' disabled>$opt5</label>";}
			?>				
	
			<div class='row top'>
				<div class='col-md-6'>
				<a class="btn" href="{{ URL::to('civil-examination') }}">Next Question</a>
				</div>
			</div>


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
		<div class="col-md-4">
			
			@if (Session::has('error'))													
			<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">If you've think that the given answer is incorrect, please submit the correct answer for this question.</h3>
					</div>								
				<div class="panel-body">																													
				<form name='opt' action='civil-suggest' role='form' method='post'>														
					<label class='block'><input type='radio' name='ans' value='A' onclick='checkthis();'> <?php echo $opt1; ?></label>
					<label class='block'><input type='radio' name='ans' value='B' onclick='checkthis();'> <?php echo $opt2; ?></label>
					<label class='block'><input type='radio' name='ans' value='C' onclick='checkthis();'> <?php echo $opt3; ?></label>
					<label class='block'><input type='radio' name='ans' value='D' onclick='checkthis();'> <?php echo $opt4; ?></label>
					<label class='block'><input type='radio' name='ans' value='E' onclick='checkthis();'> <?php echo $opt5; ?></label>
					<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
					<script>
					tinymce.init({selector:'textarea'});
					</script>
					<textarea class="form-control" id="text-area" name="textarea" rows="5" maxlength="1000" placeholder="Your message.."></textarea>									
											
					<div class="controls">
						<button type="submit" class="btn btn-success" name="submit" rel="tooltip" title="first tooltip">Submit</button>
					</div>																			
					</form>							
				</div>	
			</div>
			@else
			<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Suggestion Result</h3>
					</div>								
				<div class="panel-body">																																													
					@foreach($info as $key => $value)
					<label class='block'>Option 1<span class='panel-scr pull-right'> {{$value->A}}</span></label>
					<label class='block'>Option 2<span class='panel-scr pull-right'> {{$value->B}}</span></label>
					<label class='block'>Option 3<span class='panel-scr pull-right'> {{$value->C}}</span></label>
					<label class='block'>Option 4<span class='panel-scr pull-right'> {{$value->D}}</span></label>
					<label class='block'>Option 5<span class='panel-scr pull-right'> {{$value->E}}</span></label>																		
					@endforeach						
				</div>	
			</div>
			@endif	
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
  </body>
</html>