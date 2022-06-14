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
                <a href="/admin/cheques" class="btn btn-secondary"><i class="fa fa-reply-all"></i> Back</a>
                <a href="/admin/cheques-utilization-report/{{$cheque->id}}" class="btn btn-danger mr-5 float-left justify-content-end text-light"><i class="fa fa-file-pdf-o"></i> PRINT CHEQUE UTILIZATION REPORT</a>
            </div>
        </div>
        <div class="card-body ml-5">
            <div class="table-responsive">
                <table class="table w-75">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><h4 class=" fs-4"><span class="fw-normal">Employee Name:</span></h4></td>
                            <td><h4 class=" fs-4">{{$cheque->employee->employee_name}}</h4></td>
                        </tr>
                        <tr>
                            <td><p class="fs-5">Cheque #:</p></td>
                            <td><p class="fs-5">{{$cheque->cheque_number}}</p></td>
                        </tr>
                        <tr>
                            <td><p class="fs-5">Date: </p></td>
                            <td><p class="fs-5">{{ date('F d, Y', strtotime($cheque->datetime))}}</p></td>
                        </tr>
                        <tr>
                            <td><p class="fs-5">Amount:</p></td>
                            <td class=""><p class="fs-5">₱ {{number_format($cheque->amount)}}</p></td>
                        </tr>
                        <tr>
                            <td><p class="fs-5">Total Expenses:</p></td>
                            <td class=""><p class="fs-5">₱ {{number_format($totalExpenses)}}</p></td>
                        </tr>
                        <tr>
                            <td><p class="fs-5">Remaining Balance:</p></td>
                            <td class=""><p class="fs-5">₱ {{number_format($cheque->amount - $totalExpenses)}}</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <h1>Cheque #: {{$cheque->cheque_number}}</h1> --}}
        <div class="card-body px-5">
            <div class="table-responsive">
                <div id="dt-addrows_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    
                            <table class="table table-bordered table-hover dataTable no-footer" id="dt-addrows" aria-describedby="dt-addrows_info">
                    <thead class="thead-light">
                        <tr>
                            <th class="sorting d-none" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 1: activate to sort column ascending" style="width: 150.609px;">id</th>
                            <th class="sorting text-uppercase" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">OR #</th>
                            <th class="sorting text-uppercase" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">date of transaction</th>
                            <th class="sorting text-uppercase" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">amount</th>
                            <th class="sorting text-uppercase" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">description</th>
                            <th class="sorting text-uppercase" tabindex="0" aria-controls="dt-addrows" rowspan="1" colspan="1" aria-label="Column 2: activate to sort column ascending" style="width: 150.609px;">project name</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @if (count($purchases) > 0)
                            @foreach ($purchases as $purchase)
                                <tr>
                                    <td class="d-none">{{$purchase->id}}</td>
                                    <td>{{$purchase->OR_Number}}</td>
                                    <td>{{date('F d, Y', strtotime($purchase->transaction_date))}}</td>
                                    <td class="text-right">₱ {{number_format($purchase->amount)}}</td>
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
        
    </div>
@endsection