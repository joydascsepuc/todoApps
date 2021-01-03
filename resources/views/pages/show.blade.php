@extends('layouts.app')
@section('content')
	
	<div class="container">
		<h2>{{ $todo->title }}</h2>
		<p>{{ $todo->content }}</p>
		{{ $todo->due }}
	</div>

@endsection