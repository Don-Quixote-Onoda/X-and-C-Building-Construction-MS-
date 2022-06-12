@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/cheques">Cheques</a></li>
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
        <h1>Cheque #: {{$cheque->cheque_number}}</h1>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dt-addrows_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    
                            <table class="table table-bordered table-hover dataTable no-footer" id="dt-addrows" aria-describedby="dt-addrows_info">
                    <thead class="thead-light">
                        <tr>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 1: activate to sort column ascending" style="width: 150.609px;">id</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">OR #</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">date of transaction</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">amount</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">description</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">project name</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @if (count($purchases) > 0)
                            @foreach ($purchases as $purchase)
                                <tr>
                                    <td>{{$purchase->id}}</td>
                                    <td>{{$purchase->OR_Number}}</td>
                                    <td>{{date('F d, Y', strtotime($purchase->transaction_date))}}</td>
                                    <td>{{$purchase->amount}}</td>
                                    <td>{{$purchase->description}}</td>
                                    <td>{{$purchase->project->project_name}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>

                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="/admin/cheques" class="btn btn-secondary"><i class="fa fa-reply-all"></i> Back</a>
        </div>
    </div>
@endsection