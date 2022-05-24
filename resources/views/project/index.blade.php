@extends('layouts.app')
@section('content')
<div class="pagetitle">
  
    <h1>Project's Lists</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
        <li class="breadcrumb-item active">Project's Lists</li>
    </ol>
    </nav>
</div><!-- End Page Title -->
<a href="/users/create" class="btn btn-outline-dark mt-3 ms-3">
  <i class="bi bi-file-plus-fill fs-4 align-middle"></i>
  <span class="align-middle">New User</span>
</a>
<div class="container mt-5">
    @if (count($projects) > 0)
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Project Number</th>
            <th scope="col">Project Name</th>
            <th scope="col">Client Name</th>
            <th scope="col">Project ETA</th>
            <th scope="col">Project Budget</th>
            <th scope="col">Show More</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
            <tr>
                <th scope="row">{{$project->project_number}}</th>
                <td>{{$project->project_name}}</td>
                <td>{{$project->client->client_name}}</td>
                <td>{{$project->project_ETA}}</td>
                <td>{{$project->project_budget}}</td>
                <td><a href="/projects/{{$project->id}}"><i class="bi bi-person-lines-fill fs-4"></i></a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
        <h4 class="mt-">No User's Information Available.</h4>
    @endif
</div>

@endsection