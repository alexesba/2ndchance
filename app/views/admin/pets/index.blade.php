@section('navbar')
  @include('admin.dashboard.sidebar')
@stop
@section('content')
<h3> Pet List </h1>
  <ul>
    @foreach($pets as $pet)
      <li> {{ $pet->name }} </li>
    @endforeach
  </ul>
  {{ link_to_action('admin\PetsController@create', Lang::get('pet.add')) }}
@stop
