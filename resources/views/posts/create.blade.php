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

    <form class="opdrachtform" method="POST" action={{url('/posts')}}>

        {{csrf_field()}}

        <div class="form-group">
            <label for="postName">Post titel</label>
            <input type="text" class="form-control" id="postName" name="postName" placeholder="New Post Title" required="required" >
        </div>
        <div class="form-group">
            <label for="projectDescriptionTextArea">Post tekst</label>
            <textarea class="form-control" id="projectDescriptionTextArea" name='projectDescriptionTextArea' rows="3" placeholder="New Text For This Post" required="required"></textarea>
        </div>
        <div class="form-group">
            <label for="imageUrl">Project plaatje URL</label>
            <input type="text" class="form-control" id="imageUrl" name='imageUrl' placeholder="Image URL" required="required">
        </div>
        <div class="form-group">
            <label for="datumInput">De datum</label>
            <input type="text" class="form-control" id="datumInput" name='datumInput' placeholder="Datum Of The Day" required="required">
        </div>
        <div class="form-group">
            <label for="AuteurInput">De schrijver</label>
            <input type="text" class="form-control" id="AuteurInput" name='AuteurInput' placeholder="The Writer" required="required">
        </div>

        <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
