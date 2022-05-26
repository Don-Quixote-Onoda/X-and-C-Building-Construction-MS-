@extends('layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="caption uppercase text-secondary">
                <i class="ti-briefcase"></i> Show Purchase
            </div>
            <div class="tools">
                <span>{{$purchase->transaction_date}}</span>
            </div>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h1>OR No. {{$purchase->OR_Number}}</h1>
            </li>
        </ul>
        <div class="card-body ml-5">
            <h3><span class="fw-bold">Project Name:</span> {{$purchase->project_id}} </h3>
            <h3><span class="fw-bold">Cheque Number:</span> {{$purchase->cheque_number}} </h3>
            <h3><span class="fw-bold">Amount:</span> PHP {{$purchase->amount}} </h3>
            <h4 class="card-text mt--5">{{$purchase->description}} </h4>
        </div>
        <div class="card-footer text-right">
            <a href="/purchases" class="btn btn-secondary"><i class="fa fa-reply-all"></i> Back</a>
        </div>
    </div>
@endsection