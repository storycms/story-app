@section('content')
  <div class="container">
    <section class="panel-group">
      <div class="content row">
        @foreach ($posts as $post)
          @include('theme::default.content')
        @endforeach
      </div>
    </section>
  </div>
@stop

@render()
