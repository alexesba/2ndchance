@section('content')
  <div class="container">
    {{ Form::model($pet) }}
      <div class='input-group'>
        {{ Form::text('name', null, array('class'=>'form-control')) }}
      </div>
    {{ Form::close() }}
  </div>
@stop
