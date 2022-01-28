<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


  <!-- font icon -->
  <link href="{{asset('admin/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.css')}}" type="text/css">
  <link href="admin/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="/css/fullcalendar.css')}}">
  <link href="{{asset('admin/css/widgets.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{asset('admin/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">




</head>

<body>
    @include ('admin/layouts/sidebar')
    @include ('admin/layouts/header')
    @yield('content')
</body>

</html>
