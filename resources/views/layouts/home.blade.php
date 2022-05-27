<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Onur Çevik">

    <link rel="icon" href="{{asset('assets')}}/images/logo.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900%7CLato%7CKalam:300,400,700">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/fonts.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

    @yield('css')
    @yield('headerjs')
</head>
<body>

@include('home._header')

@section('content')
@show

@include('home._footer')
@yield('footerjs')

</body>
</html>


