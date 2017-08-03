<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class ElasticController extends Controller
{
    public function result(Request $request)
    {
    	$query= $request->input('query');

		// if(!$query) {

		// 	return redirect()->route('home');
		// }
		
		//search is based on posts title or body

		$posts= Post::where("title", 'LIKE', "%{$query}%")

		->orWhere('body', 'LIKE', "%{$query}%")

		->get();

		return view('elastic.result')->withPosts($posts);

    }
}
