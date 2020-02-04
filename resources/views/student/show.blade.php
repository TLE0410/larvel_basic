<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $student->name }}</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css" media="screen">
		span{
			width: 100px;
			float: left;
		}
	</style>
</head>
<body>
	<a href="/student" title="" class="alert-link alert"> &#60 back </a>

	<div class="row py-3 px-3 border rounded">
		
		<div class="col-12">
			<span class="text-muted">Name: </span>{{$student->name}}
		</div>	
		<div class="col-12">
			<span class="text-muted">Email: </span>
			{{$student->email}}
		</div>
		<div class="col-12" class="text-muted">
			<span class="text-muted">Company: </span>
			{{$student->company->name}}
		</div>	
	</div>	

	<a href="{{ $student->id }}/edit" title="" class="alert alert-link">edit</a>
</body>
</html>