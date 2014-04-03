<?php

Route::filter('authententicate', function()
{
	if (Auth::guest()) return Redirect::route('home')->with('error', 'Something went wrong');
});

App::missing(function($exception)
{
      return Response::view('errors.404', array(), 404);
});
Route::group(array('prefix' => LaravelLocalization::setLanguage(), 'before' => 'LaravelLocalizationRedirectFilter'), function(){
  Route::get('login/{action?}', array('uses' => 'AuthenticationController@login', 'as'=>'login'));
  Route::post('login/{action?}', array('uses' => 'AuthenticationController@login', 'as'=>'app.login'));
  Route::get('logout', array('uses' => 'AuthenticationController@logout', 'as'=>'logout'));
  Route::get('/', array('uses' => 'HomeController@index', 'as' => 'home'));
  Route::group(array('before' => 'authententicate', 'prefix'=>'admin'),function(){
    Route::get('profile/{email}', array('uses' => 'UsersController@edit', 'as'=>'profile'));
    Route::get('/', array('uses'=> 'admin\PetsController@index', 'as'=>'dashboard'));
    Route::resource('pets', 'admin\PetsController');
  });
});
