<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = \App\Serie::all();
        return view('series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $series = new Serie();

        $series->title = request('serieTitle');
        $series->description = request('serieDescriptionTextArea');
        $series->genre = request('serieGenre');
        $series->save();

        return redirect('/series');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $serie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serie $serie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie)
    {
        //
    }
}
