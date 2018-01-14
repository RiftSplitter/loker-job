@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form action="{{ url('/register_company') }}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label for="company_name">What is your company name?</label>
					<input type="text" class="form-control" name="company_name" id="company_name">
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>

@endsection