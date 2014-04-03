@if(Auth::check())
  <div class='input-group'>
    {{ link_to_route('profile', Lang::get('login.edit'), Auth::user()->email) }}
  </div>
  <div class='input-group'>
    {{ link_to_route('logout', Lang::get('login.logout')) }}
  </div>

  <div class='input-group'>
    {{ link_to_route('dashboard', Lang::get('login.dashboard')) }}
  </div>
<br>
@else
{{ Form::open(array('route' => 'app.login')) }}
  <div class='input-group'>
    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
   {{ Form::text('email', Input::old('email'), array('placeholder'=>'Email', 'class' =>'form-control')) }}
  </div>
  </br>
  <div class='input-group'>
    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
   {{ Form::password('password', array('placeholder'=>'Password', 'class' =>'form-control')) }}
  </div>
  </br>
  <div clas='form-group'>
   {{ Form::submit(Lang::get('login.singin'),array('class' => 'btn btn-success
   btn-block')) }}
    <a href="{{ route('login', 'auth') }}"class="btn btn-facebook btn-block"><i class="fa fa-facebook"></i> |
{{ Lang::get('login.facebook')}}</a>
  </div>
@if(!Auth::check())
<br>
@endif
{{ Form::close() }}
@endif
