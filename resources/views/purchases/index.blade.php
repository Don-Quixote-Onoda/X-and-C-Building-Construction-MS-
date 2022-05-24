@extends('layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Purchases's Lists</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Purchases</a></li>
        <li class="breadcrumb-item active">Purchases's Lists</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<a href="/purchases/create" class="btn btn-outline-dark mt-3 ms-3">
    <i class="bi bi-file-plus-fill fs-4 align-middle"></i>
    <span class="align-middle">New Purchase</span>
  </a>
  
  <div class="container mt-5">
    @if (count($purchases) > 0)
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">OR Number</th>
            <th scope="col">Cheque Number</th>
            <th scope="col">Project Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Description</th>
            <th scope="col">Transaction Date</th>
            <th scope="col">Show More</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($purchases as $purchase)
            <tr>
                <th scope="row">{{$purchase->OR_Number}}</th>
                <td>{{$purchase->cheque_id}}</td>
                <td>{{$purchase->project_id}}</td>
                <td>{{$purchase->amount}}</td>
                <td>{{$purchase->description}}</td>
                <td>{{$purchase->transaction_date}}</td>
                <td><a href="/purchases/{{$purchase->id}}"><i class="bi bi-person-lines-fill fs-4"></i></a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
        <h4 class="mt-">No User's Information Available.</h4>
    @endif
</div>

@endsection