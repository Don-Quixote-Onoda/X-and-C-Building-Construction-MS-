@extends('layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="caption uppercase text-secondary">
                <i class="ti-briefcase"></i> Show Cheque
            </div>
        </div>
        <div class="card-body ml-5">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h4>Employee Name: {{$cheque->employee_id}}</h4></li>
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