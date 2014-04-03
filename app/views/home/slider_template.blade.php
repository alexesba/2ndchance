<div class="bannerSection">
  <div class="slider-inner">
    <div id="da-slider" class="da-slider">
      @foreach($pets as $pet)
      <div class="da-slide">
        <h2><i>{{ $pet->name }}</i><br> <i><span style="font-size:12px; color:
gray; font-weight: bold;">publicado: {{
          $pet->created_at->toDateTimeString()}}</span></i></h2>
        <p><i>{{ str_limit($pet->description, 60, '...') }}</i></p>
        <div class="da-img"><img src="{{ asset("img/{$pet->id}.jpg") }}" alt="" /></div>
      </div>
      @endforeach

      <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
        </nav>

    </div><!--/da-slider-->
  </div><!--/slider-->
</div>
{{ $pets->links() }}
