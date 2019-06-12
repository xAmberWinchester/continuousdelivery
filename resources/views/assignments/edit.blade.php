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

    <div class="card-top card">
        <div class="card-header table-header">
            <div class="row">
                <div class="col-6 text-left mt-2">
                    <h4>Update an existing Assignment</h4>
                </div>
                <div class="col-6 text-right mt-1">
                    <a class="btn btn-success" href={{ url("assignments/") }}>Go Back</a>
                </div>
            </div>
        </div>

        <div class="card-body table-header">

            <form method="POST" action={{ url('assignments/' . $assignments->id) }}>

                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="projectNameInput">New Project</label>
                    <input type="text" class="form-control" id="projectNameInput" value="{{$assignments->project_name}}"name="projectNameInput" placeholder="Opdracht" required="required" >
                </div>
                <div class="form-group">
                    <label for="imageUrlInput">Project image url</label>
                    <input type="text" class="form-control" id="imageUrlInput" value="{{$assignments->image_url}}" name='imageUrlInput' placeholder="Image url" required="required">
                </div>

                <div class="form-group">
                    <label for="projectDescriptionTextArea">Project description</label>
                    <textarea class="form-control" id="projectDescriptionTextArea" name='projectDescriptionTextArea' rows="3" placeholder="Description" required="required">{{$assignments->description}}</textarea>
                </div>
                {{--<div class="form-group">--}}
                {{--<label for="exampleFormControlFile1">File input</label>--}}
                {{--<input type="file" class="form-control-file" id="exampleFormControlFile1" required="required">--}}
                {{--</div>--}}

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
