@extends('layout.app');

@section('body')
<br>
<div class="col-lg-8 col-lg-offset-2 jumbotron">
	<a href="" class="btn btn-info">Home</a>
	<center><h2>Todo lists</h2></center>
	<ul class="list-group">
		
		<li class="list-group-item">
			{{ $todo->title }}
			<span class="pull-right">{{$todo->created_at->diffForHumans()}}</span><br>
			{{ $todo->body }}
		</li>
		
	</ul>


</div>
@endsection