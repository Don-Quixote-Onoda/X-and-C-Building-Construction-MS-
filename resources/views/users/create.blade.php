@extends('layouts.app')
@section('content')
    {{-- <div class="pagetitle">
        <h1>Add New Users</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
            <li class="breadcrumb-item active">Add User</li>
        </ol>
        </nav>
  </div><!-- End Page Title -->
  @include('includes.messages')  

  <div class="container my-5">
    {!!Form::open(['action' => 'UserController@store', 'method' => 'POST', 'class' => 'row g-3  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}
        <div class="col-6 my-3">
          <label for="inputNanme1" class="form-label">Employee ID</label>
          <input type="text" name="employee_id" class="form-control" id="inputNanme1" required>
          <div class="invalid-feedback">
            Please provide a Employee's ID.
          </div>
        </div>
        <div class="col-6 my-3">
            <label for="inputNanme2" class="form-label">Employee's Full Name</label>
            <input type="text" name="employee_fullname" class="form-control" id="inputNanme2" required>
            <div class="invalid-feedback">
              Please provide a Employee's Fullname.
            </div>
        </div>
        <div class="col-6 my-3">
            <label for="inputNanme3" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="inputNanme3" required>
            <div class="invalid-feedback">
              Please provide a username.
            </div>
        </div>
        <div class="col-6 my-3">
            <label for="inputNanme4" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" id="inputNanme4" required>
            <div class="invalid-feedback">
              Please provide a password.
            </div>
        </div>
        <div class="col-6 my-3">
            <div class="row ">
                <div class="col-sm-12">
                  <select name="status" class="form-select" aria-label="Default select example" required>
                    <option selected="" disabled value="">Select Employee Status</option>
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a status.
                  </div>
                </div>
            </div>
        </div>
        <div class="col-6 my-3">
            <div class="row">
                <div class="col-sm-12">
                  <select name="usertype" class="form-select" aria-label="Default select example" required>
                    <option selected="" disabled value="">Select User Type</option>
                    @foreach ($usertypes as $usertype)
                    <option value="{{$usertype->id}}">{{$usertype->usertype}}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback">
                    Please provide a status.
                  </div>
                </div>
            </div>
        </div>
        <div class="col-6 my-3">
            <label for="inputNumber" class="col-sm-10 col-form-label">Upload Profile Picture</label>
            <div class="col-sm-9">
              <input name="image_profile" class="form-control" type="file" id="formFile">
            </div>
        </div>
        
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      {!!Form::close()!!} --}}
@endsection