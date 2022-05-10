@extends('layouts.app')
@section('content')
<div class="pagetitle">
    <h1>User's Lists</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
        <li class="breadcrumb-item active">User's Lists</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<div class="container mt-5">
    @if (count($users) > 0)
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Empoyee ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">User Name</th>
            <th scope="col">User Type</th>
            <th scope="col">Status</th>
            <th scope="col">Show More</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->employee_id}}</th>
                <td>{{$user->employee_fullname}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->usertype->usertype}}</td>
                <td>{{($user->status == 1)? 'Active' : 'Inactive'}}</td>
                <td><a href="/users/{{$user->id}}"><i class="bi bi-person-lines-fill fs-4"></i></a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
        <h4 class="mt-">No User's Information Available.</h4>
    @endif
</div>

@endsection