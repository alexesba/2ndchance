<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    @section('title')
      <title>Home</title>
    @show
    {{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    <!--[if lt IE 9]>< {{ HTML::script('themes/assets/js/ie8-responsive-file-warning.js') }} ![endif]-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    {{ HTML::style('packages/custom/css/flexslider.css', array('type'=>'text/css', 'media' => 'screen') )}}
    {{ HTML::style('packages/custom/css/parallax-slider.css', array('type' => 'text/css')) }}
    {{ HTML::style('packages/custom/css/business-plate.css') }}
    {{ HTML::style('css/application.css') }}
    {{ HTML::style('packages/font-awesome-4.0.3/css/font-awesome.min.css') }}
    {{ HTML::style('packages/bootstrap/css/social-buttons.css') }}
    <link rel="shortcut icon" href="{{ asset('packages/custom/img/ico.png')}}">
  </head>
  <body>

    @yield('content')

    @section('scripts')
      <!--custom javascripts -->
      {{ HTML::script('packages/custom/js/jquery-1.8.2.min.js') }}
      {{ HTML::script('packages/custom/js/modernizr.custom.js') }}
      {{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
      {{ HTML::script('packages/custom/js/jquery.flexslider-min.js') }}
      {{ HTML::script('packages/custom/js/modernizr.js') }}
      {{ HTML::script('packages/custom/js/jquery.cslider.js') }}
      {{ HTML::script('packages/custom/js/back-to-top.js') }}
      {{ HTML::script('packages/custom/js/jquery.sticky.js') }}
      {{ HTML::script('packages/custom/js/app.js') }}
      {{ HTML::script('packages/custom/js/index.js') }}
    @show

    @yield('javascript')
  </body>
</html>
