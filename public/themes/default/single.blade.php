@inject('comment', 'Plugins\Story\Comment\CommentManager')

@section('content')
<div class="container">
  <article>
    <h2><a href="{{ $post->url }}">{{ $post->title }}</a></h2>
    {!! $post->content !!}
  </article>

  {!! $comment->display($post) !!}

</div>
@stop

@render()
