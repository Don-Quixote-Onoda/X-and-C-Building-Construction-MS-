@extends('layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Add New Users</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('client.index') }}">Client</a></li>
        <li class="breadcrumb-item active">Add Client</li>
    </ol>
    </nav>
</div><!-- End Page Title -->
@include('includes.messages')

<div class="container my-5" style="height: 50vh;">
    {!!Form::open(['action' => 'ClientController@store', 'method' => 'POST', 'class' => 'row g-3  needs-validation', 'novalidate'])!!}
        <div class="col-6 mx-auto my-3">
          <label for="inputNanme1" class="form-label">Full Name</label>
          <input type="text" name="client_name" class="form-control" id="inputNanme1" required>
          <div class="invalid-feedback">
            Please provide a full name.
          </div>
        </div>
        <div class="col-6 mx-auto my-3">
            <label for="inputNanme2" class="form-label">Company Name</label>
            <input type="text" name="company_name" class="form-control" id="inputNanme2" required>
            <div class="invalid-feedback">
              Please provide a company name.
            </div>
        </div>
        <div class="col-6 mx-auto my-3">
            <label for="inputNanme3" class="form-label">Owner Name</label>
            <input type="text" name="owner_name" class="form-control" id="inputNanme3" required>
            <div class="invalid-feedback">
              Please provide a owner name.
            </div>
        </div>
        <div class="col-6 mx-auto my-3">
            <label for="inputNanme4" class="form-label">Contact Details</label>
            <input type="text" name="contact_details" class="form-control" id="inputNanme4" required>
            <div class="invalid-feedback">
              Please provide a contact details.
            </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      {!!Form::close()!!}
  </div>
@endsection