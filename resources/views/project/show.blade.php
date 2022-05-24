@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Project's Additional Information</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
            <li class="breadcrumb-item active">Project's Information</li>
        </ol>
        </nav>
  </div><!-- End Page Title -->
  @include('includes.messages')

  <section class="section profile">
    <div class="row">

      <div class="col-xl-12">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#project-overview">Overview</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#edit-project">Edit Project Information</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#add-refunds">Add Funds</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#refunds-summary">Funds Summary</button>
              </li>

              

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active project-overview" id="project-overview">
                  <div class="row">
                      <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                             <h5 class="card-title">Project's Details</h5>
         
                             <div class="row my-3">
                                 <div class="col-lg-3 col-md-4 label ">Project Number</div>
                                 <div class="col-lg-9 col-md-8">{{$project->project_number}}</div>
                               </div>
             
                             <div class="row my-3">
                               <div class="col-lg-3 col-md-4 label ">Project Name</div>
                               <div class="col-lg-9 col-md-8">{{$project->project_name}}</div>
                             </div>
             
                             <div class="row my-3">
                               <div class="col-lg-3 col-md-4 label">Description</div>
                               <div class="col-lg-9 col-md-8">{{$project->description}}</div>
                             </div>
             
                             <div class="row my-3">
                               <div class="col-lg-3 col-md-4 label">Location</div>
                               <div class="col-lg-9 col-md-8">{{$project->location}}</div>
                             </div>
             
             
                             <div class="row my-3">
                                 <div class="col-lg-3 col-md-4 label">Budget</div>
                                 <div class="col-lg-9 col-md-8">{{$project->project_budget}}</div>
                               </div>
             
                             <div class="row my-3">
                               <div class="col-lg-3 col-md-4 label">Project Start Date</div>
                               <div class="col-lg-9 col-md-8">{{$project->project_start}}</div>
                             </div>
             
                             <div class="row my-3">
                                 <div class="col-lg-3 col-md-4 label">Project End Date</div>
                                 <div class="col-lg-9 col-md-8">{{$project->project_ETA}}</div>
                               </div>
             
                               <div class="row my-3">
                                 <div class="col-lg-3 col-md-4 label">Project Awarding</div>
                                 <div class="col-lg-9 col-md-8">{{$project->project_awarding}}</div>
                               </div>
                            </div>
                        </div>
                      </div>
                  <div class="row">
                      <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Client's Details</h5>
                               <div class="row my-3">
                                   <div class="col-lg-3 col-md-4 label">Client Name</div>
                                   <div class="col-lg-9 col-md-8">{{$project->client->client_name}}</div>
                                 </div>
               
                                 <div class="row my-3">
                                   <div class="col-lg-3 col-md-4 label">Company Name</div>
                                   <div class="col-lg-9 col-md-8">{{$project->client->company_name}}</div>
                                 </div>
               
                                 <div class="row my-3">
                                   <div class="col-lg-3 col-md-4 label">Owner Name</div>
                                   <div class="col-lg-9 col-md-8">{{$project->client->owner_name}}</div>
                                 </div>
               
                                 <div class="row my-3">
                                   <div class="col-lg-3 col-md-4 label">Contact Details</div>
                                   <div class="col-lg-9 col-md-8">{{$project->client->contact_details}}</div>
                                 </div>
                            </div>
                        </div>  
                      </div>
                    </div>
                  </div>
               


              </div>

              <div class="tab-pane fade add-refunds pt-3" id="edit-project">

                <div class="container my-5">
                  {!! Form::open(['action' => ['ProjectController@update', $project->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
                      <div class="col-6 my-3">
                        <label for="inputNanme1" class="form-label">Project Number</label>
                        <input type="text" name="project_number" value="{{$project->project_number}}" class="form-control" id="inputNanme1" required>
                        <div class="invalid-feedback">
                          Please provide a Project's Number.
                        </div>
                      </div>
                      <div class="col-6 my-3">
                          <label for="inputNanme2" class="form-label">Project's Name</label>
                          <input type="text" name="project_name" value="{{$project->project_name}}" class="form-control" id="inputNanme2" required>
                          <div class="invalid-feedback">
                            Please provide a Project's Name.
                          </div>
                      </div>
                      <div class="col-6 my-3">
                        <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-12 col-form-label">Project's Description</label>
                          <div class="col-sm-12">
                            <textarea name="project_description" value="{{$project->description}}" class="form-control" style="height: 100px" required></textarea>
                            <div class="invalid-feedback">
                              Please provide a description.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 my-3">
                          <label for="inputNanme4" class="form-label">Project's Location</label>
                          <input type="text" name="project_location" value="{{$project->location}}" class="form-control" id="inputNanme4" required>
                          <div class="invalid-feedback">
                            Please provide a project_location.
                          </div>
                      </div>
                      <div class="col-6 my-3">
                        <div class="row">
                          <label for="inputNanme4" class="form-label">Select Client's Name</label>
                            <div class="col-sm-12">
                              <select name="client_id" class="form-select" aria-label="Default select example" required>
                                <option  disabled value="">Client's Name</option>
                                @foreach ($clients as $client)
                                <option value="{{$client->id}}" {{($client->id == $project->client_id) ? 'selected=""' : ""}}>{{$client->client_name}}</option>
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
                      <input type="number" name="project_budget" aria-valuetext="{{$project->project_budget}}" value="" class="form-control" id="inputNanme4" required>
                      <div class="invalid-feedback">
                        Please provide a project's budget.
                      </div>
                    </div>
                  {{Form::hidden('_method', 'PUT')}}
                    <div class="col-6 my-3">
                      <label for="inputNanme4" class="form-label">Project's Start Date</label>
                      <input type="date" name="project_startdate" value="{{$project->project_start}}" class="form-control" id="inputNanme4" required>
                      <div class="invalid-feedback">
                        Please provide a project's start date.
                      </div>
                    </div>
                    <div class="col-6 my-3">
                      <label for="inputNanme4" class="form-label">Project's End Date</label>
                      <input type="date" name="project_enddate" value="{{$project->project_ETA}}" class="form-control" id="inputNanme4" required>
                      <div class="invalid-feedback">
                        Please provide a project's end date.
                      </div>
                    </div>
                    <div class="col-6 my-3">
                      <label for="inputNanme4" class="form-label">Project Awarding</label>
                      <input type="date" name="project_awarding" value="{{$project->project_awarding}}" class="form-control" id="inputNanme4" required>
                      <div class="invalid-feedback">
                        Please provide a project's awarding date.
                      </div>
                    </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                      </div>
                    {!!Form::close()!!}
                </div>
              </div>

              <div class="tab-pane fade add-refunds pt-3" id="add-refunds">

                <!-- Profile Edit Form -->
                {!! Form::open(['action' => 'RefundController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}

                  <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Amount</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="amount" type="number" class="form-control" id="amount">
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
                  <input type="hidden" name="project_id" value="{{$project->id}}">
                  <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                {!! Form::close() !!}
              </div>

              <div class="tab-pane fade add-refunds pt-3" id="refunds-summary">
                <div class="card-body">
                  <h5 class="card-title">Funds Summary</h5>
    
                  <!-- Table with hoverable rows -->
                  @if (count($refunds) > 0) 
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Amount</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Added At</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($refunds as $refund)
                      <tr>
                        <td>{{$refund->amount}}</td>
                        <td>{{$refund->employee_id}}</td>
                        <td>{{$refund->created_at}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @else
                      <h5>No Funds Information Available.</h5>
                  @endif
                  <!-- End Table with hoverable rows -->
    
                </div>
                <!-- Refund Show Summary -->

                
              </div>
                  <!-- End Profile Edit Form -->

              {{-- </div> --}}
{{-- 
              <div class="tab-pane fade pt-3 " id="add-purchase">
                <!-- Change Password Form -->
                {!! Form::open(['action' => ['UserController@changePassword', $user->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>
                  <input type="hidden" name="id" value="{{$user->id}}">

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                {!!Form::close()!!}
                <!-- End Change Password Form -->

              </div>

            </div><!-- End Bordered Tabs --> --}}

          </div>
        </div>

      </div>
    </div>

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
            <div class="row mb-3">
              <label for="Job" class="col-md-4 col-lg-3 col-form-label">Position</label>
              <div class="col-md-8 col-lg-9">
                <input name="position" type="text" class="form-control" id="Job">
              </div>
            </div>
          </div>
          <input type="hidden" name="route_name" value="/projects/{{$project->id}}">
          <div class="modal-footer">
            <button type="button" class ="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </section>

@endsection