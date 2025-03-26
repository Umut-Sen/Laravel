<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subjects')->orderBy('name')->get();
        return view('teachers.index', compact('teachers'));
    }
}



$doc1 = App\Models\Teacher::create(['name' => 'Jan Jansen', 'hobbies' => 'Lezen']);
$doc2 = App\Models\Teacher::create(['name' => 'Sophie Smit', 'hobbies' => 'Zwemmen']);

App\Models\Subject::create(['name' => 'Wiskunde', 'description' => 'Rekenen en algebra', 'teacher_id' => $doc1->id]);
App\Models\Subject::create(['name' => 'Biologie', 'description' => 'Leven en organismen', 'teacher_id' => $doc2->id]);


