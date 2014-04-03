<?php

class AuthenticationController extends \BaseController {

  public function __construct(Hybrid_Auth $hybridAuth){
    $this->hybridAuth = $hybridAuth;
  }

	public function logout()
	{
    Auth::logout();
    return Redirect::route('home')->with('success', Lang::get('login.logedout'));

	}

	public function login($action="")
	{

    if($_POST){
      if(Auth::attempt(array('email'=> Input::get('email'), 'password'=> Input::get('password'))))
        return Redirect::route('home')
        ->with('success', Lang::get('login.success'));
      return Redirect::route('home')
        ->with('errors', Lang::get('login.error'));

    }

    if ($action == "") {
      return Redirect::route('home')
        ->with('errors', Lang::get('login.error'));
    }elseif (isset($_REQUEST['hauth_start']) || isset($_REQUEST['hauth_done']))
    {
      Hybrid_Endpoint::process();
    }
    try {
      // create a HybridAuth object

      // authenticate with Facebook
      $provider = $this->hybridAuth->authenticate("facebook");
      // fetch user profile
      $userProfile = $provider->getUserProfile();
      $attributes = (array) $userProfile;
      $user = User::firstOrNew(array('username'=>$userProfile->username));
      if(!$user->id){
        $user->fill($attributes);
        $user->save();
      }
      $provider->logout();
      if(Auth::login($user))
        return Redirect::route('home')
        ->with('success', Lang::get('login.success'));
      return Redirect::route('home')
        ->with('errors', Lang::get('login.error'));

    }
    catch(Exception $e) {
      return Redirect::route('home')
        ->with('errors', Lang::get('login.error'));
    }

	}

	public function register()
	{
    return $this->layout->content = View::make('admin.login');
	}
}
