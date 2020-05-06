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

    <form class="opdrachtform" method="POST" action={{url('/series')}}>

        {{csrf_field()}}

        <div class="form-group">
            <label for="serieTitle">De Series van de naam</label>
            <input type="text" class="form-control" id="serieTitle" name="serieTitle" placeholder="Titel" required="required" >
        </div>
        <div class="form-group">
            <label for="serieGenre">Het genre</label>
            <input type="text" class="form-control" id="serieGenre" name='serieGenre' placeholder="Genre van de serie" required="required">
        </div>

        <div class="form-group">
            <label for="serieDescriptionTextArea">De omschrijving</label>
            <textarea class="form-control" id="serieDescriptionTextArea" name='serieDescriptionTextArea' rows="3" placeholder="Description" required="required"></textarea>
        </div>
        <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
