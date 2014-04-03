@section('content')
  @include('home/login_template')
  @include('home/navbar_template')
  @include('home/topheader_template')
  @include('home/slider_template')
  @include('home/highlighted_template')
@stop

@section('javascript')

<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
</script>

@stop
