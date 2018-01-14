@extends('layouts.header_company')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form action="{{ url('/insert_job') }}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label for="job_name">Insert job here</label>
					<input type="text" class="form-control" name="job_name" id="job_name">
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>
@endsection