<?php
/**
 * Created by PhpStorm.
 * User: amber
 * Date: 5-2-2019
 * Time: 10:33
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--<link href="">--}}
    <link rel="stylesheet" href="{{asset('css/a[[.css')}}">

</head>
    <div class="navbar">
        <div class="content">
            <div class="title m-b-md">
                My portfolio
            </div>

            <div class="links">
                <a href={{ url ("index")}}>Home</a>
                <a href={{ url ("dashboard")}}>Dashboard</a>
                <a href={{ url ("assignments")}}>Assignments</a>
                {{--<a href={{ url ("whoami")}}>Wie ben ik?</a>--}}
                <a href="https://hz.nl/">HZ</a>
                <a href="https://hz.nl/secure">my-hz</a>
                <a href="https://www.marumbibio.com/">Marum Bibio</a>
            </div>
        </div>
    </div>

</html>
