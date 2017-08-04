<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostsController');

Route::get('/search', [

	'uses' => 'SearchController@result',

	'as' => 'search.result'

	]);

Route::get('/elastic', [

	'uses' => 'ElasticController@result',

	'as' => 'elastic.result'

	]);

Route::get('/elasticsearch', function() {

	$client =  Elasticsearch\ClientBuilder::create()->build();

	$allPosts = DB::table('posts')->get();

	// return $allPosts;

	$results = $client->search([

		"index" => "posts",

		"body" => [

			"query" => [

				"match"=> [

					"_all" => "Eloquent"

				]

			]

		]

	]);

	return $results;

 });
