<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        //return 'Welcome to page courses.';
        return view('courses.index');
    }

    public function create() {
        //return "On this page you can create a course.";
        return view('courses.create');
    }

    public function show($course, $category=null) {
        $msg = "";
        if ($category) {
            $msg = "Welcome to the $course course of the $category category.";
        } else {
            if ($course == "Algoritmo") {
                $msg = "You will study the most important subject of programming.";
            } else {
                $msg = "Welcome to course: $course.";
            }
        }
        return view('courses.show', ['response' => $msg]);
    }
}
