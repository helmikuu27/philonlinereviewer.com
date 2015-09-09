<!DOCTYPE html>
<html>
<head>
	<title>Add Test!</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">



<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}
<div class="row">
	<div class="col lg-6">
		<form action="add" role="form" method="post">
			
			<div class="form-group">
			<label for="">Name</label>
			<input type="text" name="name" id="" class="form-control">
			</div>
			<div class="form-group">
			<label for="">Score</label>
			<input type="text" name="score" id="" class="form-control">
			</div>
			<div class="form-group">
			<label for="">Exam</label>
			<input type="text" name="exam" id="" class="form-control">
			</div>
			<div class="form-group">
			<label for="">School</label>
			<input type="text" name="school" id="" class="form-control">
			</div>
			
			
			<input type="submit" Value="Add" class="btn btn-primary">
		</form>
	</div>
</div>
</div>
</body>
</html>