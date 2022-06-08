@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/purchases">Purchase</a></li>
            <li class="breadcrumb-item active">Show Purchase</li>
        </ol>
    </div>
</div>
    <div class="card mb-3">
        <div class="card-header">
            <div class="caption uppercase text-secondary">
                <i class="ti-briefcase"></i> Show Purchase
            </div>
            <div class="tools">
                <span>Transaction Date: {{date('F d, Y', strtotime($purchase->transaction_date))}}</span>
            </div>
        </div>
        <div class="card-body ml-5">
            <h4 class="card-title">{{$purchase->project->project_name}}</h4>
              <p class="card-text">
                Cheque Number: {{$purchase->cheque->cheque_number}}
              </p>

              <div class="row">
                <div class="col-md-6">
                    <div class="card card-secondary mb-3">
                        <img src="/storage/projects/project_images/{{$purchase->project->project_image}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">OR Number: {{$purchase->OR_Number}}</h5>
                        <h5 class="card-title">Amount: {{$purchase->amount}}</h5>
                        <p class="card-text">
                            {{$purchase->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="/admin/purchases" class="btn btn-secondary"><i class="fa fa-reply-all"></i> Back</a>
        </div>
    </div>
@endsection