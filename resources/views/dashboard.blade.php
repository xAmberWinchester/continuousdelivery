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

@section('title', 'Dashboard')

@section('content')
    <div class="card-top card card-bottom">
        <div class="card-header table-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>All my courses so far</h4>
                </div>
                {{--<div class="col-6 text-right mt-1">--}}
                    {{--<a class="btn btn-success" href={{ url("assignments/") }}>Go Back</a>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="card-body table-header">
        <table class='table table-striped'>
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Course</th>
                <th scope="col">Grade</th>
                <th scope="col">Status</th>
                <th scope="col">EC</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($results as $row)
                {{--{{ var_dump($results) }}--}}
                <tr>

                    <td>{{ $row["id"] }}</td>
                    <td>{{ $row["Course"] }}</td>
                    <td>{{ $row["Grade"] }}</td>
                    <td>{{ $row["Status"] }}</td>
                    <td>{{ $row["EC"] }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        </div>
    </div>



@endsection
