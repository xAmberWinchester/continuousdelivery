<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    function index(){
        $courses = \App\Course::all();

        return view('course.index', compact('courses'));
    }
    function update(){

    }
}
