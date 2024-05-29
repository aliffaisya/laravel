<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //method untuk menampilkan data course
    public function index(){
        //tarik data course dari db
        $courses = Courses::all();

        //panggil view dan kirim data course
        return view('admin.contents.courses.index', [
            'courses' => $courses,
        ]);
    }
}
