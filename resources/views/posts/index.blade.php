@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
    	
		  <div class="col-md-8 col-md-offset-2">

		    <div class="input-group">

		      <input type="text" class="form-control" placeholder="Search for...">

		      <span class="input-group-btn">

		        <button class="btn btn-primary" type="button">Go!</button>

		      </span>

		    </div><!-- /input-group -->

		  </div><!-- /col-md-8 col-md-offset-2 -->

    </div>

    <br>

    <div class="row">

    	<div class="col-md-8 col-md-offset-2">

        @foreach($posts as $post)

            <div class="panel panel-default">

                <div class="panel-heading"><h3>{{$post->title}}</h3></div>

                <div class="panel-body">    

                    {{$post->body}}

                </div>

            </div>

         @endforeach

        </div>
    	
    </div>
    
</div>

@endsection

