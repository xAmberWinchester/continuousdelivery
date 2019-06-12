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

@section('title', 'Assignments')

@section('content')

<div class="card card-top">
    <div class="card-header table-header">
        <div class="row">
            <div class="col-6 text-left mt-2">
                <h4>Overview of my Assignments</h4>
            </div>
            <div class="col-6 text-right mt-1">
                <a class="btn btn-success" href={{ url("assignments/create") }}>New Assignment</a>
            </div>
        </div>
    </div>
    <div class="card-body table-header">
    <table class='table table-striped'>
        <thead>
            <tr>
                <th scope="col">Project name</th>
                <th scope="col"></th>
                <th scope="col">Actions</th>
                <th scope="col"></th>
            </tr>
        </thead>
            <tbody>
             @foreach ($assignments as $row)
             {{--{{ var_dump($row) }}--}}
                <tr>
                    <td>{{ $row["project_name"] }}</td>
                    <td>
                        <a class="btn btn-info btn-sm text-white" href={{ url("assignments/" . $row->id) }}>Details</a>
                    </td>
                    <td>
                        <a class="update-button btn btn-sm text-white" href={{ url("assignments/$row->id/edit") }}>Update</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ url("assignments/$row->id") }}">
                            @method('DELETE')
                            @CSRF
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
