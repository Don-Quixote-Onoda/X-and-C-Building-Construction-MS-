@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/cheques">Cheques</a></li>
            <li class="breadcrumb-item active">Show Cheque</li>
        </ol>
    </div>
</div>
    <div class="card mb-3">
        <div class="card-header">
            <div class="caption uppercase text-secondary">
                <i class="ti-briefcase"></i> Show Cheque
            </div>
            <div class="tools">
                <a href="/admin/cheques-utilization-report/{{$cheque->id}}" class="btn btn-danger mr-5 float-right justify-content-end text-light"><i class="fa fa-file-pdf-o"></i> PRINT CHEQUE UTILIZATION REPORT</a>
            </div>
        </div>
        <div class="card-body ml-5">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h4>Employee Name: {{$cheque->employee->employee_name}}</h4></li>
                <li class="list-group-item">Cheque Number: {{$cheque->cheque_number}}</li>
                <li class="list-group-item">Amount: {{$cheque->amount}}</li>
                <li class="list-group-item">Date: {{$cheque->datetime}}</li>
            </ul>
        </div>
        <div class="card-footer text-right">
            <a href="/cheques" class="btn btn-secondary"><i class="fa fa-reply-all"></i> Back</a>
        </div>
    </div>
@endsection