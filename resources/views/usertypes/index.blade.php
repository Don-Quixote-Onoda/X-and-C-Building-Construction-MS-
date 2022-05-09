@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Add User Type</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">User Type</a></li>
            <li class="breadcrumb-item active">Add User Type</li>
        </ol>
        </nav>
  </div><!-- End Page Title -->
  
  @include('includes.messages')

  <div class="container my-5" style="height: 50vh;">
    {!!Form::open(['action' => 'UserTypeController@store', 'method' => 'POST', 'class' => 'row g-3  needs-validation', 'novalidate'])!!}
    {{-- <form action="{{route('user-type.store')}}" method="POST" class="row g-3  needs-validation" novalidate> --}}
        <div class="col-6 mx-auto my-5">
          <label for="inputNanme4" class="form-label">User Type</label>
          <input type="text" name="usertype" class="form-control" id="inputNanme4" required>
          <div class="invalid-feedback">
            Please provide a user type.
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      {!!Form::close()!!}
  </div>
@endsection