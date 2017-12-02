<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="csrf-token" content="{!! csrf_token() !!}">

    <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="unitedspirit" />
      <meta property="og:description"   content="Your description" />
      <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />

    <title>United Spirit</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@yield('styles')
</head>

<body>

    <div class="app_holder">
        @include('layouts.header')
        @yield('content')


        @include('layouts.footer')
    </div>

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>

