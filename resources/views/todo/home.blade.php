@extends('layout.app')

@section('body')

<br>
<div class="col-lg-8 col-lg-offset-2 jumbotron">
	<a href="todo/create" class="btn btn-info">Add New</a>
	<center><h2>Todo lists</h2></center>
	<ul class="list-group col-lg-10">
		@foreach($todos as $todo)
  			<li class="list-group-item">
  				<a href="{{'/todo/'.$todo->id}}">{{ $todo->title }}</a>
  				<span class="pull-right">{{$todo->created_at->diffForHumans()}}</span><br>
  			</li>
  		@endforeach
	</ul>
  <ul class="list-group col-lg-2">
    @foreach($todos as $todo)
        <li class="list-group-item">
          <a href="{{'/todo/'.$todo->id.'/edit'}}">Edit</a>
        </li>
      @endforeach
  </ul>
</div>

@endsection