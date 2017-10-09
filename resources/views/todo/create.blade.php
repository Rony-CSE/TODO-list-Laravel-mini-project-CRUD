@extends('layout.app')

@section('body')

<br>
	<div class="col-lg-8 col-lg-offset-2 jumbotron">
		<a href="/todo" class="btn btn-info">Back</a>

		<center><h2>{{ ucfirst(substr(Route::currentRouteName(),5)) }} item</h2></center>

		<form class="form-horizontal" action="/todo/@yield('editId')" method="post">

      {{ csrf_field() }}
      @section('editMethod')
        @show

      <fieldset>
        <div class="form-group">
          <div class="col-lg-12">
            <input type="text" name="title" class="form-control" value="@yield('editTitle')" placeholder="List Title"><br>
          </div>
          <div class="col-lg-12">
            <textarea class="form-control" name="body" rows="5" id="textArea" placeholder="List Body">@yield('editBody')</textarea>
            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span><br>
            <button type="reset" class="btn btn-danger">Cancel</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>   
      </fieldset>
    </form>

@include('todo.partials.errors')
	</div>

@endsection