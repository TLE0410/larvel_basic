@extends('layout.layout')

@section('top')
	@include('navigation.top-nav')
@endsection

@section('content')
	@section('info')
		<p class="text-info">All student:</p>
	@endsection
	@section('other_link')
		<a href="student/create" title="create">Create a new student</a>
	@endsection

	@yield('other_link')
	@yield('info')

	
	
	@if(isset($students))
		 	<ul>
		 		@foreach ($students as $student)
		 			<li><a href="student/{{ $student->id }}">{{$student->name}} <span class="text-muted">({{ $student->company->name }}</span>)</a></li>
		 		@endforeach
		 	</ul>
	@endif
@endsection