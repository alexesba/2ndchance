<div class="top">
  <div class="container">
      <div class="row-fluid">
          <ul class="phone-mail">
              <li><i class="fa fa-phone"></i><span>312 55 046 77</span></li>
              <li><i class="fa fa-envelope"></i><span>alexesba@gmail.com</span></li>
          </ul>
          <ul class="loginbar">
              {{ LaravelLocalization::getLanguageBar(false) }}
              <li class="devider">&nbsp;</li>
              <li><a href="#" class="login-btn">{{ Lang::get('login.help') }}</a></li>
              <li class="devider">&nbsp;</li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle login-btn" data-toggle="dropdown">
                  <i class="icon-globe"></i>
                    @if(!Auth::check())
                    {{ Lang::get('login.login') }}
                    @else
                    {{ Auth::user()->email}}
                    @endif
                  <b class="caret"></b>
                </a>
                 <div class="dropdown-menu pull-right login-form">
                    @include('login.form')
                 </div>
              </li>
          </ul>
      </div>
  </div>
</div>
