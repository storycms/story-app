@inject('query', 'Story\Cms\Contracts\StoryPost')
@php
  $posts = $query->where('post_status', 'publish')
    ->where('type', 'post')
    ->paginate();
@endphp

@section('content')
  <header class="home-jumbroton text-center">
    <div class="container">
      <h1>{{ SEO::get('title') }}</h1>
      <p class="lead">{{ SEO::get('description') }}</p>
    </div>
  </header>

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
