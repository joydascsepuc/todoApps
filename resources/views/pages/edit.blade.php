@extends('layouts.app')
@section('content')
	
	<div class="row">

		<div class="col-2"></div>
		<div class="col-8">
			<form class="form" action="/todo/{{ $todo->id }}" method="post">
				@csrf
				@method('PUT')
				<label for="title">Title</label>
				<input type="text" class="form-control" name="title" id="title" value="{{ $todo->title }}">
				<label for="content">Content</label>
				<input type="text" class="form-control" name="content" id="content" value="{{ $todo->content }}">
				<label for="due">Due</label>
				<input type="text" class="form-control" name="due" id="due" value="{{ $todo->due }}">
				<br>
				<button class="btn btn-primary" type="submit">Update Data</button>
			</form>
		</div>
		<div class="col-2"></div>

	</div>

@endsection