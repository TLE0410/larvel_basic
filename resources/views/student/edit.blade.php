<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{$student->name}}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css" media="screen">
		span {
			width: 100px;
			float: left;
		}

	</style>

</head>
<body>
	<a href="/student" title="" class="alert-link alert"> &#60 back </a>

	
	<form action="/student/{{ $student->id }}" method="post" accept-charset="utf-8">
		@method('PATCH')
		<div class="row py-3 px-3 border rounded">
		
			<div class="col-12">
				<span class="text-muted">Name:</span>
				<input type="text" name="name" value="{{$student->name}}" class="rounded col-3">
				@error('name')
					<p class="text-danger">{{ $message }}</p>
				@enderror	

			</div>
			
			<div class="col-12">
				<span class="text-muted">Email: </span>
				<input type="text" name="email" value="{{$student->email}}" class="rounded col-3">
				@error('email')
					<p class="text-danger">{{ $message }}</p>
				@enderror
			</div>
			<div class="col-12" class="text-muted">
				<span class="text-muted">Company: </span>
				{{$student->company->name}}
			</div>	

			<div class="col-12 py-3">
				@csrf
				
				<button type="submit" class="alert-link">SAVE</button>
			</div>
		</div>	

		
	</form>
</body>
</html>