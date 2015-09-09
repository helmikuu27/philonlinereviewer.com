	<div class="col-md-12 scorer"> 
		<div class="table-responsive">
			<table class="table table-bordered table-hover tablesorter">
				<thead>
					<tr>										
					<th width=40%>Name</th>
					<th width=40%>Exam</th>
					<th width=20%>Score</th>
					<!--<th width=40%>School</th>	-->									
					</tr>
				</thead>
				<tbody>	
				@foreach($data as $key => $value)	
					<tr>																		
					<th>{{ Str::title($value->name)}}</th>
					<th>{{ Str::title($value->exam)}}</th>
					<th>{{ $value->score}} %</th>
					<!--<th>{{ Str::upper($value->school)}}</th>	-->																						
					</tr>	
				@endforeach
				</tbody>																								
			</table>
								 
		</div>								
							
						
    </div> <!-- /container -->

