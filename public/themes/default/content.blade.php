<div class="col-md-4">
  <div class="entry-item">
    <div class="entry-img" style="background-image: url('https://placeimg.com/640/480/any'); background-position: 50% 50%; height: 120px">
    </div>
    <div class="entry-body">
      <a href="{{ $post->url }}" class="entry-title">
        <h2>{{ $post->title }}</h2>
      </a>
      <div class="entry-summary">
        {!! str_limit($post->content, 120) !!}
      </div>
    </div>
  </div>
</div>
