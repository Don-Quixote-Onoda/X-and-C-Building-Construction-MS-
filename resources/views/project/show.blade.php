@extends('layouts.app')
@section('content')
<div class="card card-tabs mb-3">
  <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
              <a href="#tab1" data-toggle="tab" class="nav-link active">Project Information</a>
          </li>
          <li class="nav-item">
              <a href="#tab2" data-toggle="tab" class="nav-link">Project Recieved Fund's Lists</a>
          </li>
      </ul>
      <div>
        <a href="/projects" class="btn btn-outline-dark float-right justify-content-end text-light"><i class="fa fa-reply-all"></i> Back</a>
      </div>
  </div>
  <div class="card-body">
      <div class="tab-content">
          <div class="tab-pane fade show active" id="tab1">
              <h4 class="card-title">{{$project->project_name}}</h4>
              <p class="card-text">
                {{$project->location}}
              </p>
              <p class="card-text">
                Client Name: {{$project->client_id}}
              </p>

              <div class="row">
                <div class="col-md-6">
                    <div class="card card-secondary mb-3">
                        <img src="/storage/projects/project_images/{{$project->project_image}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Project Number: {{$project->project_number}}</h5>
                        <h5 class="card-title">Budget: {{$project->project_budger}}</h5>
                        <p>{{$project->project_start}} - {{$project->project_ETA}}</p>
                        <p class="card-text">
                            {{$project->description}}
                        </p>
                        <p class="card-link text-light">Awarding At {{$project->project_awarding}}</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab2">
              <h4 class="card-title">Project's Funds</h4>
              <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Fund's Table
                </div> 
                <div class="tools">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class="ti-plus"></i> Click To Add New Fund</button>
                </div>
            </div>
              <div class="card-body">
                <div class="table-responsive">
                    <div id="dt-addrows_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        
                                <table class="table table-bordered table-hover dataTable no-footer" id="dt-addrows" aria-describedby="dt-addrows_info">
                        <thead class="thead-light">
                            <tr>
                                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 1: activate to sort column ascending" style="width: 150.609px;">employee id</th>
                                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">amount</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach ($funds as $fund)      
                                <tr>
                                    <td>{{$fund->employee_id}}</td>
                                    <td>{{$fund->amount}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add New Fund</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          {!!Form::open(['action' => 'RefundController@store', 'method' => 'POST', 'class' => 'row g-3 d-block  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}
            <div class="modal-body">
                <div class="form-group row">
                  <div class="input-group col px-5 mx-auto mb-2 offset-md-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text">Amount</span>
                      </div>
                      <input type="number" name="amount" class="form-control">
                  </div>
                </div>
                <input type="hidden" name="route_name" value="/projects/{{$project->id}}">
                <input type="hidden" name="project_id" value="{{$project->id}}">
                <div class="form-group row">
                  <div class="input-group col-md-12 px-5 mx-auto mb-2 offset-md-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Employee Name</span>
                    </div>
                      <select class="form-control mr-3" name="employee_id">
                          <option>Default Select</option>
                          @foreach ($employee_names as $employee_name)
                            <option value="{{$employee_name->id}}">{{$employee_name->employee_name}}</option>
                          @endforeach
                      </select>
                      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#employeeModal">+</button>
                </div>
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

<div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add New Employee Name</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          {!!Form::open(['action' => 'EmployeeNameController@store', 'method' => 'POST', 'class' => 'row g-3 d-block  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}
          <div class="modal-body">
              <div class="form-group row">
                <div class="input-group col px-5 mx-auto mb-2 offset-md-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Employee Name</span>
                    </div>
                    <input type="text" name="employee_name" class="form-control">
                </div>
              </div>
              <input type="hidden" name="route_name" value="/projects/{{$project->id}}">
              <div class="form-group row">
                <div class="input-group col px-5 mx-auto mb-2 offset-md-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Position</span>
                    </div>
                    <input type="text" name="position" class="form-control">
                </div>
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