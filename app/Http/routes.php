<?php


/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/practice', function () {
	    
	    
	    $faker = Faker\Factory::create();
	    echo $faker->name;
	    //$tomorrow = Carbon\Carbon::now()->addDay();
	    //return $tomorrow;

	});

	Route::get('/stuff', 'StuffController@getIndex');
	Route::get('/stuff/create', 'StuffController@getCreate');
	Route::post('/stuff/create', 'StuffController@postCreate');

	Route::get('/cat/create', 'CatController@getCreate');
	Route::post('/cat/create', 'CatController@postCreate');

	if(App::environment('local')) {
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    }
	
});
