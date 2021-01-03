@extends('layouts.app')
@section('content')
	
	<div class="row">

		<div class="col-2"></div>
		<div class="col-8">
			<form class="form" action="/todo" method="post">
				@csrf
				<label for="title">Title</label>
				<input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
				<label for="content">Content</label>
				<input type="text" class="form-control" name="content" id="content" value="{{ old('content') }}">
				<label for="due">Due</label>
				<input type="text" class="form-control" name="due" id="due" value="{{ old('due') }}">
				<br>
				<button class="btn btn-primary" type="submit">Store Data</button>
			</form>
		</div>
		<div class="col-2"></div>

	</div>

@endsection