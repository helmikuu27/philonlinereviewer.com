	<div class="col-md-12 scorer"> 
		<div class="table-responsive">
			<table class="table table-bordered table-hover tablesorter">
				<thead>
					<tr>										
					<th width=25%>Name</th>										
					<th>Score</th>
					<th>School</th>										
					</tr>
				</thead>
				<tbody>	
				@foreach($civil as $key => $value)	
					<tr>																		
					<th>{{ Str::title($value->name)}}</th>										
					<th>{{ $value->score}} %</th>
					<th>{{ Str::upper($value->school)}}</th>																							
					</tr>	
				@endforeach
				</tbody>																								
			</table>
								 
		</div>								
							
						
    </div> <!-- /container -->

