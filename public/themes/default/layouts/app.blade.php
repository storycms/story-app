<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('/') }}wp-content/themes/froyo-2016-2.0/images/favicon.ico" />

    <title>{{ SEO::get('title') }}</title>
    <meta name="description" content="{{ SEO::get('description') }}"/>
    <link rel="canonical" href="{{ url('/') }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ SEO::get('title') }}" />
    <meta property="og:description" content="{{ SEO::get('description') }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:site_name" content="{{ SEO::get('title') }}" />

     @section('css')
      <link rel="stylesheet" type="text/css" href="{{ Theme::url('/build/css/app.css') }}">
     @show

  </head>
  <body>

    <!-- NAVBAR -->
    <div class="metabar">
      <div class="container">
        <div class="metabar-inner navigation-primary">
          <nav role="navigation" class="pull-right">
            <a href="">Search</a>
          </nav>
          <a href="/">{{ Configuration::instance()->SITE_TITLE }}</a>
        </div>
      </div>
      <div class="container">
        <div class="metabar-inner">
          <nav role="navigation" class="navigation-secondary">
            <ul class="clearfix">
              <li><a href="">HOME</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- END NAVBAR -->

    @yield('content')

    @section('js')
      {{--  <script src="{{ Theme::url('/assets/js/jquery-slim.min.js')}}"></script>
      <script src="{{ Theme::url('/assets/js/popper.min.js')}}"></script>
      <script src="{{ Theme::url('/assets/js/bootstrap.min.js')}}"></script>  --}}
    @show
  </body>
</html>
