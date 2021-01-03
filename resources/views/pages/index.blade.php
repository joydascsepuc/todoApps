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
			    </tr>
			<?php $i++;?>
			@endforeach
		  </tbody>
		</table>
	@endif;

@endsection