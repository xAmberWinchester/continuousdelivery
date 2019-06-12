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

    <div class="card text-center table-header card-top">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Overview of Assignment details</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-success" href={{ url("assignments") }}>Go Back</a>
                </div>
            </div>
        </div>

        <div class="card-body text-left">
            <strong><strong>Project Name:</strong></strong> {{$assignment->project_name}}<br>
            <strong><strong> URL:</strong></strong> {{$assignment->image_url}}<br>
            <strong><strong>Description:</strong></strong> {{$assignment->description}}<br>
            <a class="btn btn-primary" href={{ url("assignments/" . $assignment->id . "/edit") }}>Edit</a>


        </div>
    </div>

@endsection
