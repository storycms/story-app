<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://froyo.id/wp-content/themes/froyo-2016-2.0/images/favicon.ico" />

    <title>Froyo</title>
    <meta property="og:description" content="">
    <!-- This site is optimized with the Yoast SEO plugin v5.3 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="Froyo adalah media yang membahas dunia digital terkait advertising, marketing dan teknologi."/>
    <link rel="canonical" href="https://froyo.id/" />
    <link rel="next" href="https://froyo.id/page/2/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Froyo - Advertising, Marketing, Teknologi" />
    <meta property="og:description" content="Froyo adalah media yang membahas dunia digital terkait advertising, marketing dan teknologi." />
    <meta property="og:url" content="https://froyo.id/" />
    <meta property="og:site_name" content="Froyo" />

     @section('css')
      <link rel="stylesheet" type="text/css" href="{{ Theme::url('/css/bootstrap.min.css') }}">
     @show

  </head>
  <body>

    @yield('content')

    @section('js')
      <script src="{{ Theme::url('/js/jquery-slim.min.js')}}"></script>
      <script src="{{ Theme::url('/js/popper.min.js')}}"></script>
      <script src="{{ Theme::url('/js/bootstrap.min.js')}}"></script>
    @show
  </body>
</html>
