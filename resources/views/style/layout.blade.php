<?php
/**
 * Created by PhpStorm.
 * User: amber
 * Date: 5-2-2019
 * Time: 11:15
 */
?>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<header class="row header">
    @include('includes.header')
</header>
<div class="container">

    {{--<div id="main" class="row">--}}

        @yield('content')


</div>
<footer class="row">
    @include('includes.footer')
</footer>
</body>
</html>
