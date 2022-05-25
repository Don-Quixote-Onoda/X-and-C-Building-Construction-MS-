@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Add New Cheque</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Cheque</a></li>
            <li class="breadcrumb-item active">Add Cheque</li>
        </ol>
        </nav>
  </div><!-- End Page Title -->
  @include('includes.messages')
  <div class="card px-5">
    {!!Form::open(['action' => 'ProjectController@store', 'method' => 'POST', 'class' => 'row g-3 d-block  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}
    <div class="form-group row">
      <div class="input-group col-md-6 pl-5 mx-auto mt-5 mb-2 offset-md-3">
          <div class="input-group-prepend">
              <span class="input-group-text">Cheque Number</span>
          </div>
          <input type="text" name="project_number" class="form-control">
      </div>
      <div class="input-group col-md-6 pr-5 mx-auto mt-5 mb-2 offset-md-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Cheque Number</span>
        </div>
          <select class="form-control mr-3">
              <option>Default Select</option>
          </select>
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#clientModal">+</button>
  </div>
  </div>

  <div class="form-group row mt-3">
    <div class="input-group col-md-6 pl-5 mx-auto mb-3 offset-md-3">
      <div class="input-group-prepend">
          <span class="input-group-text">Transaction Date</span>
      </div>
      <input type="text" placeholder="" class="form-control date-input">
  </div>
    <div class="input-group col-md-6 pr-5 mx-auto mb-3 offset-md-3">
      <div class="input-group-prepend">
          <span class="input-group-text">Amount</span>
      </div>
      <input type="text" name="project_location" class="form-control">
  </div>
</div>

<div class="card-footer text-right mx-3 mb-3">
  <a href="#" class="btn btn-primary"><i class="ti-new-window"></i> Submit</a>
  <a href="#" class="btn btn-secondary"><i class="ti-close"></i> Cancel</a>
</div>
    
    {!!Form::close()!!}
  </div>

  <div class="modal fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Employee Name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            {!!Form::open(['action' => 'ProjectController@store', 'method' => 'POST', 'class' => 'row g-3 d-block  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}
            <div class="modal-body">
                <div class="form-group row">
                  <div class="input-group col px-5 mx-auto mb-2 offset-md-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text">Employee Name</span>
                      </div>
                      <input type="text" name="project_number" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="input-group col px-5 mx-auto mb-2 offset-md-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text">Position</span>
                      </div>
                      <input type="text" name="project_number" class="form-control">
                  </div>
                </div>
            </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-outline-primary">Save changes</button>
              </div>
            </div>    
            </div>

            
          {!!Form::close()!!}

        </div>
    </div>
</div>
@endsection