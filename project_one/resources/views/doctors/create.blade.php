@extends('adminlte::page')
@section('content')
<h1>Create Doctors</h1>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Doctors</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('doctor.insert') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">city</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter city" name="city">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">email</label>
          <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          </div>
        <div class="form-group">
          <label for="exampleInputFile">image input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
          </div>
        </div>

        <div class="form-group">
            <label>major Doctors</label>
            <select class="form-control" name="major_id">
              <option>option 1</option>
             
            </select>
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
