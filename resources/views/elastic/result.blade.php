@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
    	
		  <div class="col-md-8 col-md-offset-2">

          <h3>Your ElasticSearch</h3>

		    <form class="input-group" role="search" action="{{ route('elastic.result') }}">

              <input type="text" name="query" class="form-control" placeholder="Search elastic...">

              <span class="input-group-btn">

                <button class="btn btn-primary" type="submit">Go!</button>

              </span>

            </form><!-- /search form -->

		  </div><!-- /col-md-8 col-md-offset-2 -->

    </div>

    <br>

    <div class="row">

    	<div class="col-md-8 col-md-offset-2">

            @if (!$posts->count())

            Your elastic search '{{ Request::input('query') }}' did not match any documents. Try searching with proper keywords.

            @else

                @foreach($posts as $post)

                    <div class="panel panel-default">

                        <div class="panel-heading"><h3>{{$post->title}}</h3></div>

                        <div class="panel-body">    

                            {{$post->body}}

                        </div>

                    </div>

                @endforeach

            @endif

        </div>
    	
    </div>  
    
</div>

@endsection

