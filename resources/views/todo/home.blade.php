@extends('layout.app');

@section('body')
<br>
<div class="col-lg-8 col-lg-offset-2 jumbotron">
	<a href="todo/create" class="btn btn-info">Add New</a>
	<center><h2>Todo lists</h2></center>
	<ul class="list-group">
		@foreach($todos as $todo)
  			<li class="list-group-item">
  				{{ $todo->title }}
  				<span class="pull-right">{{$todo->created_at->diffForHumans()}}</span><br>
   				{{ $todo->body }}

   			
  			</li>
  		@endforeach
	</ul>
</div>

@endsection