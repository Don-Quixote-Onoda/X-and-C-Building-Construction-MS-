@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard"><i class="ti-home"></i> Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/projects">Projects</a></li>
          <li class="breadcrumb-item active">Add Project</li>
      </ol>
  </div>
</div>
  <div class="card px-5">
    {!!Form::open(['action' => 'ProjectController@store', 'method' => 'POST', 'class' => 'row g-3 d-block  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}
    <div class="form-group row">
      <div class="input-group col-md-6 pl-5 mx-0 mt-5 mb-2 offset-md-3">
          <div class="input-group-prepend">
              <span class="input-group-text">Project Number</span>
          </div>
          <input type="text" name="project_number" value="{{old('project_number')}}" class="form-control" required>
      </div>
  </div>
  <input type="hidden" name="admin_id" value="{{Auth::guard('admin')->user()->user_type_id}}" >
  <div class="form-group row">
    <div class="input-group col-md-6 pl-5 mx-auto mb-3 offset-md-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Name</span>
        </div>
        <input type="text" name="project_name" class="form-control" value="{{old('project_name')}}" required>
    </div>
    <div class="input-group col-md-6 pr-5 mx-auto mb-3 offset-md-3">
      <div class="input-group-prepend">
          <span class="input-group-text">Location</span>
      </div>
      <input type="text" name="location" class="form-control" value="{{old('location')}}" required>
  </div>
</div>

<div class="form-group row">
  <div class="input-group col-md-6 pl-5 mx-auto mb-3 offset-md-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Client Name</span>
        </div>
          <select class="form-control mr-3" name="client_id" value="{{old('client_id')}}">
              <option value="">Default Select</option>
              @foreach ($clients as $client)
                <option value="{{$client->id}}" >{{$client->client_name}}</option>
              @endforeach
          </select>
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#clientModal"><i class="ti-plus"></i></button>
  </div>
  <div class="input-group col-md-6 pr-5 mx-auto mb-3 offset-md-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Budget</span>
    </div>
    <input type="number" name="project_budget" value="{{old('project_budget')}}" class="form-control" required>
    <div class="input-group-append">
      <span class="input-group-text bg-carolina text-white">???</span>
      <span class="input-group-text">0.00</span>
  </div>
  </div>
</div>

<div class="form-group row mb-3">
  <label class="col-md-12 px-5 col-form-label">Date Range</label>
  <div class="col-md-12 px-5 ">
      <div class="input-group daterange">
          <input type="date" class="form-control" name="project_start" value="{{old('project_start')}}" required>
          <div class="input-group-append">
              <span class="input-group-text">to</span>
          </div>
          <input type="date" class="form-control" name="project_eta" value="{{old('project_eta')}}" required>
      </div>
  </div>
</div>

<div class="form-group row mt-3">
  <label class="col-md-12 px-5 col-form-label">Project's Awarding Date</label>
  <div class="col-md-6 pl-5">
      <div class="input-group date">
          <input type="date" name="project_awarding" value="{{old('project_awarding')}}" class="form-control" required>
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
          <input type="file" class="custom-file-input" name="project_image" value="{{old('project_image')}}" required>
          <label class="custom-file-label">Upload Project Photo</label>
      </div>
  </div>
  <div class="input-group col-md-6 pr-5 mx-auto mb-3 offset-md-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Status</span>
  </div> 
          <select class="form-control" name="status" value="{{old('status')}}">
              <option>Default Select</option>
              <option value="0" selected>On Going</option>
          </select>
  </div>
</div>

<div class="form-group row">
  <label class="col-md-12 px-5 mx-auto col-form-label">Description</label>
  <div class="col-md-12 px-5 mx-auto">
      <textarea name="description" class="form-control" rows="5" placeholder="..." required>{{old('description')}}</textarea>
  </div>
</div>

<div class="card-footer text-right mx-3 mb-3">
  <button class="btn btn-primary"><i class="ti-new-window"></i> Submit</button>
  <a href="/admin/projects" class="btn btn-secondary"><i class="ti-close"></i> Cancel</a>
</div>
    
    {!!Form::close()!!}
  </div>

  <div class="modal fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">??</span>
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
                <input type="hidden" name="redirect" value="/admin/projects/create">
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