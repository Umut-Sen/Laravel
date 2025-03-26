<?php

namespace App\Http\Controllers;

use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('teacher')->orderBy('name')->get();
        return view('subjects.index', compact('subjects'));
    }
}
