@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Add New Project</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Project</a></li>
            <li class="breadcrumb-item active">Add Project</li>
        </ol>
        </nav>
  </div><!-- End Page Title -->
  @include('includes.messages')

  <div class="container my-5">
    {!!Form::open(['action' => 'ProjectController@store', 'method' => 'POST', 'class' => 'row g-3  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}
        <div class="col-6 my-3">
          <label for="inputNanme1" class="form-label">Project Number</label>
          <input type="text" name="project_number" class="form-control" id="inputNanme1" required>
          <div class="invalid-feedback">
            Please provide a Project's Number.
          </div>
        </div>
        <div class="col-6 my-3">
            <label for="inputNanme2" class="form-label">Project's Name</label>
            <input type="text" name="project_name" class="form-control" id="inputNanme2" required>
            <div class="invalid-feedback">
              Please provide a Project's Name.
            </div>
        </div>
        <div class="col-6 my-3">
          <div class="row mb-3">
            <label for="inputPassword" class="col-sm-12 col-form-label">Project's Description</label>
            <div class="col-sm-12">
              <textarea name="project_description" class="form-control" style="height: 100px" required></textarea>
              <div class="invalid-feedback">
                Please provide a description.
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 my-3">
            <label for="inputNanme4" class="form-label">Project's Location</label>
            <input type="text" name="project_location" class="form-control" id="inputNanme4" required>
            <div class="invalid-feedback">
              Please provide a project_location.
            </div>
        </div>
        <div class="col-6 my-3">
          <div class="row">
            <label for="inputNanme4" class="form-label">Select Client's Name</label>
              <div class="col-sm-12">
                <select name="client_id" class="form-select" aria-label="Default select example" required>
                  <option selected="" disabled value="">Client's Name</option>
                  @foreach ($clients as $client)
                  <option value="{{$client->id}}">{{$client->client_name}}</option>
                  @endforeach
                </select>
                <div class="invalid-feedback">
                  Please provide a client's name.
                </div>
              </div>
          </div>
      </div>
      <div class="col-6 my-3">
        <label for="inputNanme4" class="form-label">Project's Budget</label>
        <input type="number" name="project_budget" class="form-control" id="inputNanme4" required>
        <div class="invalid-feedback">
          Please provide a project's budget.
        </div>
      </div>
      <div class="col-6 my-3">
        <label for="inputNanme4" class="form-label">Project's Start Date</label>
        <input type="date" name="project_startdate" class="form-control" id="inputNanme4" required>
        <div class="invalid-feedback">
          Please provide a project's start date.
        </div>
      </div>
      <div class="col-6 my-3">
        <label for="inputNanme4" class="form-label">Project's End Date</label>
        <input type="date" name="project_enddate" class="form-control" id="inputNanme4" required>
        <div class="invalid-feedback">
          Please provide a project's end date.
        </div>
      </div>
      <div class="col-6 my-3">
        <label for="inputNanme4" class="form-label">Project Awarding</label>
        <input type="date" name="project_awarding" class="form-control" id="inputNanme4" required>
        <div class="invalid-feedback">
          Please provide a project's awarding date.
        </div>
      </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      {!!Form::close()!!}
@endsection