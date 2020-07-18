<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('/img/icon.jpg') }}" type="image/x-icon"/>
    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>@yield('title','NHOSTING.')</title>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{('css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{('css/style.css')}}" type="text/css">
</head>
<body>

    <div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white "> -->
            <!-- <div class="container"> -->
            
            @include('inc.bar')
            <div id="app_load">
              @yield('content')
            </div>
            @include('inc.footer')
            <!-- </div> -->
        <!-- </nav> -->
        
    </div>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!-- [if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif] -->
<!-- Javascript Files
================================================== --> 
   <!-- Js Plugins -->
  <script src="{{('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{('js/bootstrap.min.js')}}"></script>
    <script src="{{('js/jquery.slicknav.js')}}"></script>
    <script src="{{('js/owl.carousel.min.js')}}"></script>
    <script src="{{('js/main.js')}}"></script>
  <script src="{{('js/load.js')}}"></script>
  <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script>
    $(document).ready(function(){
                    // initial
                    // return false;
                    // $('#app_load').load('{{url("/")}}');`
                    $('#app_load').atler("hello");
                    return false;

                    $('ul#navaaa li.active_home a').click(function() {
                      var page = $this.attr('href');
                            console.log(page);
                            // $('#app_load').load('{{url("/index")}}');
                            return false;
                    })
});
  </script>
</body>
  
</html>
