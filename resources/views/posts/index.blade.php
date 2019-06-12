<?php
/**
 * Created by PhpStorm.
 * User: amber
 * Date: 5-2-2019
 * Time: 09:36
 */
?>
@extends('style.layout')

{{--@extends('./layout/layout')--}}

@section('title', 'Posts')

@section('content')

    <table class='table table-striped'>
        <thead>
        <tr>
            <th scope="col">Post titel</th>
            <th scope="col">Post tekst</th>
            <th scope="col">Project plaatje URL</th>
            <th scope="col">De datum</th>
            <th scope="col">De schrijver</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $row)
            {{--{{ var_dump($row) }}--}}
            <tr>

                <td>{{ $row["title"] }}</td>
                <td>{{ $row["text"] }}</td>
                <td>{{ $row["image_url"] }}</td>
                <td>{{ $row["datum"] }}</td>
                <td>{{ $row["auteur"] }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
