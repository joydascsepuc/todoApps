@extends('layouts.app')
@section('content')
	
	<a href="{{ route('homePage') }}" class="btn btn-primary">Go Back</a>
	<div class="container">
		<h2>{{ $todo->title }}</h2>
		<p>{{ $todo->content }}</p>
		{{ $todo->due }}
	</div>

@endsection