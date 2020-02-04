<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $title ?? ' '}}</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css" media="screen">
		ul{
			list-style-type: none;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-12">
			@yield('top')
		</div>
	</div>
	<div class="row">
		<div class="col-1">
			
		</div>
		<div class="col-11">
			@yield('content')
		</div>
	</div>
	</body>
</html>
