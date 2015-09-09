<!DOCTYPE html>
<html>
<head>
	<title>Add Test!</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

<h4>Create a Test</h24>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}
<div class="row">
	<div class="col lg-6">
		<form action="add" role="form" method="post">
			<div class="col-sm-12">
				<script src="js/nicEdit-latest.js" type="text/javascript"></script>				
				<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>	
				<textarea class="form-control" rows="3" name="test" ></textarea>
			</div>
			
			<div class="form-group">
			<label for="">Answer</label>
			<input type="text" name="ans" id="" class="form-control">
			</div>
			<div class="form-group">
			<label for="">Option1</label>
			<input type="text" name="opt1" id="" class="form-control">
			</div>
			<div class="form-group">
			<label for="">Option2</label>
			<input type="text" name="opt2" id="" class="form-control">
			</div>
			<div class="form-group">
			<label for="">Option3</label>
			<input type="text" name="opt3" id="" class="form-control">
			</div>
			<div class="form-group">
			<label for="">Option4</label>
			<input type="text" name="opt4" id="" class="form-control">
			</div>
			
			
			<input type="submit" Value="Add" class="btn btn-primary">
		</form>
	</div>
</div>
</div>
</body>
</html>