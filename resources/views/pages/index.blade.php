@extends('layouts.app')
@section('content')
	
	@if(count($todos)>0)
		<table class="table text-center">
		  <thead>
		    <tr>
		      <th scope="col">Serial</th>
		      <th scope="col">Title</th>
		      <th scope="col">Content</th>
		      <th scope="col">Due</th>
		      <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i=1; ?>
			@foreach($todos as $todo)
			    <tr>
			      <th><?php echo $i;?></th>
			      <td><a href="/todo/{{$todo->id}}">{{ $todo->title }}</a></td>
			      <td>{{ $todo->content }}</td>
			      <td>{{ $todo->due }}</td>
			      <td>
			      	<a href="todo/{{$todo->id}}/edit" class="btn btn-primary float-left btn-sm">Edit</a>
			      	<form method="post" action="/todo/{{ $todo->id }}">
			      		@csrf
			      		@method('DELETE')
			      		<button type="submit" class="btn btn-danger btn-sm">Delete</button>
			      	</form>
			      </td>
			    </tr>
			<?php $i++;?>
			@endforeach
		  </tbody>
		</table>
	@endif;

@endsection