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

@section('title', 'Series')

@section('content')

    <table class='table table-striped'>
        <thead>
        <tr>
            <th scope="col">Serie titel</th>
            <th scope="col">Het genre</th>
            <th scope="col">Een omschrijving</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($series as $row)
            {{--{{ var_dump($row) }}--}}
            <tr>

                <td>{{ $row["title"] }}</td>
                <td>{{ $row["genre"] }}</td>
                <td>{{ $row["description"] }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
