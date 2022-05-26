@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Edit Project</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Project</a></li>
            <li class="breadcrumb-item active">Edit Project</li>
        </ol>
        </nav>
  </div><!-- End Page Title -->
  <div class="card px-5">
    {!!Form::open(['action' => ['ProjectController@update', $project->id], 'method' => 'POST', 'class' => 'row g-3 d-block  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}
    {{Form::hidden('_method', 'PUT')}}
    <div class="form-group row">
      <div class="input-group col-md-12 px-5 mx-auto mt-5 mb-2 offset-md-3">
          <div class="input-group-prepend">
              <span class="input-group-text">Project Number</span>
          </div>
          <input type="text" name="project_number" value="{{$project->project_number}}" class="form-control">
      </div>
  </div>
  <div class="form-group row">
    <div class="input-group col-md-6 pl-5 mx-auto mb-3 offset-md-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Name</span>
        </div>
        <input type="text" name="project_name" value="{{$project->project_name}}" class="form-control">
    </div>
    <div class="input-group col-md-6 pr-5 mx-auto mb-3 offset-md-3">
      <div class="input-group-prepend">
          <span class="input-group-text">Location</span>
      </div>
      <input type="text" name="location" value="{{$project->location}}" class="form-control">
  </div>
</div>

<div class="form-group row">
  <div class="input-group col-md-6 pl-5 mx-auto mb-3 offset-md-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Client Name</span>
        </div>
          <select class="form-control mr-3" name="client_id">
              <option>Default Select</option>
              @foreach ($clients as $client)
                <option value="{{$client->id}}" {{($client->id == $project->client_id) ? 'selected' : ''}}>{{$client->client_name}}</option>
              @endforeach
          </select>
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#clientModal"> <i class="ti-plus"></i> </button>
  </div>
  <div class="input-group col-md-6 pr-5 mx-auto mb-3 offset-md-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Budget</span>
    </div>
    <input type="number" name="project_budget" value="{{$project->project_budget}}" class="form-control">
    <div class="input-group-append">
      <span class="input-group-text bg-carolina text-white">$</span>
      <span class="input-group-text">0.00</span>
  </div>
  </div>
</div>

<div class="form-group row mb-3">
  <label class="col-md-12 px-5 col-form-label">Date Range</label>
  <div class="col-md-12 px-5 ">
      <div class="input-group daterange">
          <input type="text" class="form-control" value="{{$project->project_start}}" name="project_start">
          <div class="input-group-append">
              <span class="input-group-text">to</span>
          </div>
          <input type="text" class="form-control" value="{{$project->project_ETA}}" name="project_eta">
      </div>
  </div>
</div>

<div class="form-group row mt-3">
  <label class="col-md-12 px-5 col-form-label">Project's Awarding Date</label>
  <div class="col-md-6 pl-5">
      <div class="input-group date">
          <input type="text" name="project_awarding" value="{{$project->project_awarding}}" class="form-control">
          <div class="input-group-append">
              <span class="input-group-text">
                  <i class="ti-calendar"></i>
              </span>
          </div>
      </div>
      <span class="form-text text-muted">Select Date</span>
  </div>
</div>

<div class="form-group row">
  <div class="input-group col-md-6 pl-5 mx-auto mb-3 offset-md-3">
      <div class="input-group-prepend">
          <span class="input-group-text"><i class="ti-export"></i></span>
      </div>
      <div class="custom-file">
          <input type="file" class="custom-file-input" value="{{$project->project_image}}" name="project_image">
          <label class="custom-file-label">{{$project->project_image}}</label>
      </div>
  </div>
  <div class="input-group col-md-6 pr-5 mx-auto mb-3 offset-md-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Status</span>
  </div>
          <select class="form-control" name="status">
              <option>Default Select</option>
              <option value="1" {{($project->status == 1) ? 'selected' : ''}}>Complete</option>
              <option value="0"{{($project->status == 0) ? 'selected' : ''}}>Incomplete</option>
          </select>
  </div>
</div>

<div class="form-group row">
  <label class="col-md-12 px-5 mx-auto col-form-label">Description</label>
  <div class="col-md-12 px-5 mx-auto">
      <textarea name="description" class="form-control" rows="5" placeholder="...">{{$project->description}}</textarea>
  </div>
</div>

<div class="card-footer text-right mx-3 mb-3">
  <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
  <a href="/projects" class="btn btn-secondary"><i class="ti-close"></i> Cancel</a>
</div>
    
    {!!Form::close()!!}
  </div>
  <div class="modal fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            {!!Form::open(['action' => 'ClientController@store', 'method' => 'POST', 'class' => 'row g-3 d-block  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}
            <div class="modal-body">
                <div class="form-group row">
                  <div class="input-group col px-5 mx-auto mb-2 offset-md-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text">Client Name</span>
                      </div>
                      <input type="text" name="client_name" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="input-group col px-5 mx-auto mb-2 offset-md-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text">Company Name</span>
                      </div>
                      <input type="text" name="company_name" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="input-group col px-5 mx-auto mb-2 offset-md-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text">Owner Name</span>
                      </div>
                      <input type="text" name="owner_name" class="form-control">
                  </div>
                </div>
                <input type="hidden" name="redirect" value="/projects/{{$project->id}}/edit">
                <div class="form-group row">
                  <div class="input-group col px-5 mx-auto mb-2 offset-md-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text">Contact Details</span>
                      </div>
                      <input type="text" name="contact_details" class="form-control">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-outline-primary">Save changes</button>
              </div>
            </div>    
            </div>

            
          {!!Form::close()!!}

        </div>
    </div>
</div>



@endsection