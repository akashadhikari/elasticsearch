@extends('layouts.app')

@section('content')

<div class="container">

	
	<h1>Add a new post</h1>

	<form role="form" action="{{ route('posts.store') }}" method="post">

	  <div class="form-group">

	    <label for="inputsm">Title of the post</label>
    	<input class="form-control input-sm" id="title" type="text">
	    <small id="textHelp" class="form-text text-muted">Eg: Machine Learning: A probabilistic perspective.</small>

	  </div>
	  
	  <div class="form-group">

	    <label for="inputsm">Your article content</label>
	    <textarea class="form-control" id="body" rows="3"></textarea>

	  </div>

	  
	  <button type="submit" class="btn btn-primary">Submit</button>

	  <input type="hidden" name="_token" value="{{ Session::token() }}">

	</form>

	{{-- <div class="row">

	    <div class="col-lg-6">

	        <form class="form-vertical" role="form" method="post" action="{{ route('posts.store') }}">

	            <div class="form-group">
	                <label for="text" class="control-label">Your text address</label>
	                <input type="text" name="text" class="form-control" id="text" value="">
	            </div>

	            <div class="form-group">
	                <label for="body" class="control-label">Choose a body</label>
	                <input type="textarea" name="body" class="form-control" id="body" value="">
	            </div>

	            <div class="form-group">
	                <button type="submit" class="btn btn-default">Post</button>
	            </div>

	            <input type="hidden" name="_token" value="{{ Session::token() }}">

	        </form>

	    </div>

	</div> --}}


@endsection