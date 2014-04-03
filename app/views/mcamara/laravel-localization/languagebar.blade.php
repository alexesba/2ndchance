<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="icon-globe"></i>
    {{ trans('locales.language') }}
    <b class="caret"></b>
  </a>
    <ul class="dropdown-menu">
      @foreach($languages as $key => $lang)
        @if($key == $active)
          @if(LaravelLocalization::getPrintCurrentLanguage())
            <li class="active">{{ trans("$lang") }}</li>
          @endif
        @else
          <li><a rel="alternate" hreflang="{{$key}}" href="{{$urls[$key]}}">{{trans("$lang")}}</a></li>
        @endif
      @endforeach
    </ul>
</li>
