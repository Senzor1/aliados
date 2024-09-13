<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class courseController extends Controller
{
    public function index(){
        return view('courses.index');
    }

    public function show(course $course){

        $this->authorize('published', $course);

        $similares = course::where('category_id', $course->category_id)
                            ->where('id', '!=', $course->id)
                            ->where('status', 3)
                            ->latest('id')
                            ->take(5)
                            ->get();

        return view('courses.show', compact('course', 'similares'));
    }


    public function enrolled(course $course){
        $course->students()->attach(auth()->user()->id);
        
        return redirect()->route('courses.status', $course);
    }

    
}
