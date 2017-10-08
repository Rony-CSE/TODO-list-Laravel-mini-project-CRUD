@extends('layout.app')

@section('body')
<br>
<div class="col-lg-8 col-lg-offset-2 jumbotron">
	<a href="/todo" class="btn btn-info">Home</a>
	<center><h2>{{ $item->title }}</h2></center>
	<ul class="list-group">
		
		<li class="list-group-item">
			{{ $item->body }}
			<span class="pull-right">{{$item->created_at->diffForHumans()}}</span><br>
			
		</li>
		
	</ul>


</div>
@endsection