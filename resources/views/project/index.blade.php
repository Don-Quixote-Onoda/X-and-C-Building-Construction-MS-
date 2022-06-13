@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/projects">Projects</a></li>
            <li class="breadcrumb-item active">Project Lists</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase">
                    <i class="ti-briefcase"></i> Projects Table
                </div> 
                <div class="tools">
                  <a href="/admin/project-summary-report" class="btn btn-sm btn-danger mr-3"><i class="fa fa-file-pdf-o"></i> Generate PDF</a>
                    <a href="/admin/projects/create" class="btn btn-sm btn-primary"><i class="ti-plus"></i> Click
                        To Add New Project</a>
                </div>
            </div>
            @if (count($projects) > 0)
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dt-addrows_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <table class="table table-bordered table-hover dataTable no-footer" id="dt-addrows" aria-describedby="dt-addrows_info">
                        <thead class="thead-light">
                            <tr>
                                <th class="sorting sorting_desc d-none" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="project start: activate to sort column ascending" style="width: 64.3438px;" aria-sort="descending">project start</th>
                                <th class="sorting " tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">project started</th>
                                <th class="sorting " tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">project number</th>
                                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">project name</th>
                                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">location</th>
                                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">client name</th>
                                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">budget</th>
                                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 3: activate to sort column ascending" style="width: 150.609px;">status</th>
                                <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="2" aria-label="Column 4: activate to sort column ascending" style="width: 150.609px;">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)      
                                <tr>
                                    <td class="d-none">{{strtotime($project->project_start)}}</td>
                                    <td>{{date('F d, Y', strtotime($project->project_start))}}</td>
                                    <td>{{$project->project_number}}</td>
                                    <td>{{$project->project_name}}</td>
                                    <td>{{$project->location}}</td>
                                    <td>{{$project->client->client_name}}</td>
                                    <td>₱ {{number_format($project->project_budget)}}</td>
                                    <td>
                                        {{($project->status == 0) ? 'on going': ''}}
                                    </td>
                                    <td class="text-center">
                                        <a href="/admin/projects/{{$project->id}}" class="btn btn-primary"><i class="fa fa-vcard-o"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="/admin/projects/{{$project->id}}/edit" class="btn btn-secondary"><i class="ti-write"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>                
            @endif
        </div>
    </div>
  </div>
@endsection