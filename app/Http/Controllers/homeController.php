<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class homeController extends Controller
{
    public function __invoke(){

        $courses = course::where('status', '3')->latest('id')->get()->take(8);

        return view('welcome', compact('courses'));
    }
}
