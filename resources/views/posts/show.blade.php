@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

    	<div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading"><h3>{{$post->title}}</h3></div>

                <div class="panel-body">

                    {{$post->body}}

                    <hr>

                    <b>Keywords:</b> {{ $post->keyword }}

                </div>
                
            </div>

        </div>
    	
    </div>
    
</div>

@endsection

