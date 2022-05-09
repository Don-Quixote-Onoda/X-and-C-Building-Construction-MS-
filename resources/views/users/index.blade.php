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
@endsection