@extends('layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Add Cheque Information</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('cheques.index') }}">Cheques</a></li>
        <li class="breadcrumb-item active">Add New Cheque</li>
    </ol>
    </nav>
</div><!-- End Page Title -->


 <!-- Profile Edit Form -->
        {!! Form::open(['action' => 'ChequeController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}

                <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Cheque Number</label>
                    <div class="col-md-8 col-lg-9">
                    <input name="cheque_number" type="text" class="form-control" id="amount">
                    </div>
                </div>
                    <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Amount</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="amount" type="number" class="form-control" id="amount">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputDate" class="col-md-4 col-lg-3 col-form-labell">Date</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="date" name="datetime" class="form-control">
                    </div>
                  </div>
                  <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0 fw-bold fs-5">Employee</legend>
                  </fieldset>
                    
                    
                  <div id="employeeExist">
                    <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Employee Name</label>
                          <button type="button" class="btn btn-primary col-sm-3 mb-3" data-bs-toggle="modal" data-bs-target="#addNewEmployee">
                            Add New Employee
                          </button>
                        <div class="col-md-8 col-lg-9">
                          <select name="employee_id" class="form-select" aria-label="Default select example" >
                            <option selected="" disabled value="">Select Employee</option>
                            @foreach ($employee_names as $employee_name)
                            <option value="{{$employee_name->id}}">{{$employee_name->employee_name}}</option>
                            @endforeach
                          </select>
                          <div class="invalid-feedback">
                            Please provide employee.
                          </div>
                        </div>
                          
                    </div>
                  </div>
                  <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                {!! Form::close() !!}



                <div class="modal fade" id="addNewEmployee" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        {!! Form::open(['action' => 'EmployeeNameController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Add New Employee</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="row mb-3">
                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Add Employee Name</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="employee_name" type="text" class="form-control" id="Job">
                            </div>
                          </div>
                          <input type="hidden" name="route_name" value="/cheques/create">
                          <div class="row mb-3">
                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Position</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="position" type="text" class="form-control" id="Job">
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                      {!! Form::close() !!}
                    </div>
                  </div>
@endsection