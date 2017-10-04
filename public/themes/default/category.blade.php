@section('content')
  <div class="container">
    <heading>
      <h1>{{ $category->name }}</h1>
    </heading>

    @foreach ($posts as $post)
      @include('theme::default.content')
    @endforeach

  </div>

@stop

@render()
