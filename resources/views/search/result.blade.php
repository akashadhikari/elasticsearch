@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
    	
		  <div class="col-md-8 col-md-offset-2">

		    <form class="input-group" role="search" action="{{ route('search.result') }}">

              <input type="text" name="query" class="form-control" placeholder="Search for...">

              <span class="input-group-btn">

                <button class="btn btn-primary" type="submit">Go!</button>

              </span>

            </form><!-- /search form -->

		  </div><!-- /col-md-8 col-md-offset-2 -->

    </div>

    <br>

    <div class="row">

    	<div class="col-md-8 col-md-offset-2">

        {{-- @foreach($posts as $post) --}}

            <div class="panel panel-default">

                <div class="panel-heading"><h3>Title</h3></div>

                <div class="panel-body">    

                    Body

                </div>

            </div>

        {{-- @endforeach --}}

        </div>
    	
    </div>
    
</div>

@endsection

