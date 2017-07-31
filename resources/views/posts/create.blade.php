@extends('layouts.app')

@section('content')

<div class="container">

	<h1>Add a new post</h1>

	<hr>

	<form role="form" action="{{ route('posts.store') }}" method="post">

	  <div class="form-group">

	    <label for="title">Title of the post</label>

    	<input type="text" class="form-control" id="title" name="title">

	    <small id="textHelp" class="form-text text-muted">Eg: Machine Learning: A probabilistic perspective.</small>

	  </div>
	  
	  <div class="form-group">

	    <label for="body">Your article content</label>

	    <textarea class="form-control" id="body" rows="3" name="body"></textarea>

	  </div>

	  
	  <button type="submit" class="btn btn-primary">Submit</button>

	  <input type="hidden" name="_token" value="{{ Session::token() }}">

	</form>

@endsection