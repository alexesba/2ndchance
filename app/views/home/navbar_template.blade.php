<div class="topHeaderSection">
  <div class="header">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('home')}}"><img src="{{
            asset('packages/custom/img/logo.gif') }}" height='70px' alt="My web solution" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">{{ Lang::get('home.home') }}</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon-globe"></i>
                {{ Lang::get('home.services') }}
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
            <li><a href="#about">{{ Lang::get('home.aboutus') }}</a></li>
            <li><a href="#about">Blog</a></li>
            <li><a href="#contact">{{ Lang::get('home.contact') }}</a></li>
          </ul>
        </div>
    </div>
  </div>
</div>
