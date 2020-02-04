@extends('layout.layout')

@section('top')
	<a href="/student" title="" class="alert alert-link">Home</a>
@endsection

@section('content')
@if(session('status'))
	<div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif

	<form action="/store" method="post" accept-charset="utf-8">
		<div class="form-group">
			<span class="text-secondary">Name:</span>
			<input type="text" name = "name" placeholder="Enter your name" class = "form-control col-3">
		</div>
		@if($errors->first('name')) 
			<div class="text text-danger">
				{{ $errors->first('name') }}				
			</div>
		@endif
		<div class="form-group">
			<span class="text-secondary">Password:</span>
			<input type="password" name="password" placeholder="Enter your password" class="form-control col-3">
		</div>
		@error('password')
			<div class="text-danger">
				{{ $message }}
			</div>
		@enderror
		
		<div class="form-group">
			<span class="text-secondary">Email:</span>
			<input type="email" name="email" placeholder="Enter your email" class="form-control col-3">
		</div>
		@error('email')
			<div class="text-danger">
				{{ $message }}
			</div>
		@enderror

		<div class="form-group">
			<select name="companyId">
				@foreach ($companies as $company)
					<option value="{{$company->companyId}}">{{ $company->name }}</option>
				@endforeach
			</select>
		</div>
		@error('companyId')
			<div class="text-danger">
				{{ $message }}
			</div>
		@endif

		<div class="form-group">
		
			<select name="active" >
				<option value="1">Active</option>
				<option value="0">InActive</option>
			</select>
			@error('active')
				<span class="text-danger">{{ $message }}</span>
			@enderror
		</div>	

		@csrf
		
		<div class="form-group">
			<button type="submit" class="btn-primary btn">Create</button>
		</div>
	</form>
@endsection