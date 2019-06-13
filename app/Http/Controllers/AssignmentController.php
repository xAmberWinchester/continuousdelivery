<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{

    public function index()
    {
        $assignments = \App\Assignment::all();
        return view('assignments.index', compact('assignments'));
    }

    public function create()
    {
        return view('assignments.create');
    }

    public function show(Assignment $assignment)
    {
        return view('assignments.show', compact('assignment'));
    }


    public function edit($id)
    {
        $assignments = \App\Assignment::find($id);
        return view('assignments.edit', compact('assignments'));
    }

    public function store(Request $request)
    {
        $assignments = new Assignment();

        $assignments->project_name = request('projectNameInput');
        $assignments->image_url = request('imageUrlInput');
        $assignments->description = request('projectDescriptionTextArea');
        $assignments->save();

        return redirect('/assignments');
    }

    function update($id)
    {
        $assignments = assignment::find($id);

        $assignments->project_name = request('projectNameInput');
        $assignments->image_url = request('imageUrlInput');
        $assignments->description = request('projectDescriptionTextArea');
        $assignments->save();

        return redirect('/assignments');
    }

    public function destroy($id)
    {
        Assignment::findOrFail($id)->delete();
        return redirect('/assignments');
    }
}

