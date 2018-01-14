@extends('layouts.header_company')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading" style="text-align: center;">
					Job List
				</div>	

				<div class="panel-body">
					@if(count($jobs) > 0 )
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Job Name</th>
								</tr>
							</thead>

							<tbody>
								@foreach($jobs as $j)
									<tr>
										<td>{{ $j->job_name }}</td>
									</tr>
								@endforeach 								
							</tbody>
						</table>
					@else
						<p>
							There's no job yet
						</p>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection