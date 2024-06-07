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

    // method untuk menambahkan form tambah student
    public function create(){
        return view('admin.contents.courses.create');
    }

    //method untuk menyimpan data student baru
    public function store(Request $request)
    {
        //validasi data yang diterima
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',
        ]);

        //simpan data ke db
        Courses::create([
            'id' => $request->id,
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc,

        ]);

        //redirect ke halaman student
        return redirect('admin/courses/')->with('message', 'Data student berhasil ditambahkan!');
    }

    // method untuk menampilkan halaman edit
    public function edit($id){
        //cara data student berdasarkan id
        $courses = Courses::find($id); //select * from student where id = $id;

        return view('admin.contents.courses.edit', [
            'courses' => $courses
        ]);
    }

    //untuk menyimpan hasil update
    public function update($id, Request $request){
        //cari data student berdasarkan id
        $courses = Courses::find($id); //select * from student where id = $id;

        //validasi requst
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',
        ]);

        //simpan perubahan
        $courses->update([
            'id' => $request->id,
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc,
        ]);

        // kembalikan ke halaman courses
        return redirect('/admin/courses')->with('message', 'Berhasil Mengedit Student');
    }

    // method untuk menghapus student
    public function destroy($id){
        // cari data student berdasarkan id 
        $courses = Courses::find($id); // select * from student where id $id;

        //hapus student 
        $courses->delete();

        //kembali ke halaman student
        return redirect('/admin/courses')->with('message', 'Berhasil Mengedit Student');
    }
}
