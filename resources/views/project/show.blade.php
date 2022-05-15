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
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#add-refunds">Add Refunds</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#refunds-summary">Refunds Summary</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#add-purchase">Add Purchase</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#purchases-summary">Purchases Summary</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active project-overview" id="project-overview">
                  <div class="row">
                      <div class="col-6">
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
                      <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Project's Details</h5>
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
                    <div class="col-sm-12">
                      <div class="row">
                          <div class="col-2"><div class="form-check">
                            <input class="form-check-input" type="radio" name="isEmployee" onclick="showHideEmployee()" id="existing"  value="exist" checked="">
                            <label class="form-check-label" for="gridRadios1">
                              Existing Employee
                            </label>
                          </div>
                          
                        </div>
                          <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="isEmployee" onclick="showHideEmployee()" id="new" value="add">
                                <label class="form-check-label" for="gridRadios2">
                                  Add New Employee
                                </label>
                              </div>
                          </div>
                      </div>
                    </div>
                  </fieldset>
                    
                    
                  <div id="employeeExist" style="display: block">
                    <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Employee Name</label>
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
                  <div id="employeeAdd" style="display: none">
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
                  <input type="hidden" name="project_id" value="{{$project->id}}">
                  <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                {!! Form::close() !!}
              </div>

              <div class="tab-pane fade add-refunds pt-3" id="refunds-summary">
                <div class="card-body">
                  <h5 class="card-title">Refunds Summary</h5>
    
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
                      <h5>No Refunds Information Available.</h5>
                  @endif
                  <!-- End Table with hoverable rows -->
    
                </div>
                <!-- Refund Show Summary -->

                
              </div>

              <div class="tab-pane fade add-refunds pt-3" id="add-purchase">

                <!-- Profile Edit Form -->
                {!! Form::open(['action' => 'PurchaseController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}

                  <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">OR Number</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="OR_Number" type="number" class="form-control" id="amount">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputNanme4" class="col-md-4 col-lg-3 form-label">Trasaction Date</label>
                    <input type="date" name="transaction_date" class="col-md-8 col-lg-9 form-control " id="inputNanme4" required>
                    <div class="invalid-feedback">
                      Please provide a project's start date.
                    </div>
                  </div>
                    <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Select Cheque</label>
                        <div class="col-md-8 col-lg-9">
                          <select name="employee_id" class="form-select" aria-label="Default select example" >
                            <option selected="" disabled value="">Select Cheque</option>
                            @foreach ($cheques as $cheque)
                            <option value="{{$cheque->id}}">{{$cheque->cheque_number}}</option>
                            @endforeach
                          </select>
                          <div class="invalid-feedback">
                            Please provide employee.
                          </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Amount</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="amount" type="text" class="form-control" id="Job">
                        </div>
                      </div>
                        <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-12 col-form-label">Purchase's Description</label>
                          <div class="col-sm-12">
                            <textarea name="project_description" class="form-control" style="height: 100px" required></textarea>
                            <div class="invalid-feedback">
                              Please provide a description.
                            </div>
                          </div>
                      </div>
                  <input type="hidden" name="project_id" value="{{$project->id}}">
                  <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                {!! Form::close() !!}
              </div>

              <div class="tab-pane fade add-refunds pt-3" id="purchases-summary">
                <div class="card-body">
                  <h5 class="card-title">Refunds Summary</h5>
    
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
                      <h5>No Refunds Information Available.</h5>
                  @endif
                  <!-- End Table with hoverable rows -->
    
                </div>
                <!-- Refund Show Summary -->

                
              </div>

                  <script>
                      function showHideEmployee() {
                          if(document.getElementById("existing").checked) {
                              document.getElementById("employeeAdd").style.display = "none";
                              document.getElementById("employeeExist").style.display = "block";
                          }
                          else {
                            document.getElementById("employeeAdd").style.display = "block";
                              document.getElementById("employeeExist").style.display = "none";
                          }
                      }
                  </script>

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
  </section>

@endsection