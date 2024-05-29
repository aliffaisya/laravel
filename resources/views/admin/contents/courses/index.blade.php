@extends('admin.main')
@section('content')
<div class="pagetitle">
    <h1>Courses</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"></li>
        <li class="breadcrumb-item active">Courses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tr>
                    <th> ID</th>
                    <th>Name</th>
                    <th>Categori</th>
                    <th>Desc</th>
                    <th>Timestamp</th>
                    <th>Action</th>
                </tr>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->nama }}</td>
                        <td>{{ $course->category }}</td>
                        <td>{{ $course->desc }}</td>
                        <td>{{ $course->timestamp }}</td>
                        <td>
                            <a href='#' class="btn btn-warning">Edit</a>
                            <a href='#' class="btn btn-danger">hapus</a>
                        </td>
                    </tr>    
                @endforeach
            </table>
        </div>
    </div>
  </section>

@endsection