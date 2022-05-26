@extends('layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="caption uppercase text-secondary">
                <i class="ti-briefcase"></i> Show Cheque
            </div>
            <div class="tools">
                <span>{{$cheque->datetime}}</span>
            </div>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h1>Cheque No. {{$cheque->cheque_number}}</h1>
            </li>
        </ul>
        <div class="card-body ml-5">
            <h3><span class="fw-bold">Amount:</span> PHP {{$cheque->amount}}</h3>
                <h4 class="card-text">
                    By: {{$cheque->employee_id}}
                </h4>
        </div>
        <div class="card-footer text-right">
            <a href="/cheques" class="btn btn-secondary"><i class="fa fa-reply-all"></i> Back</a>
        </div>
    </div>
@endsection