@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Edit Purchase</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Purchase</a></li>
            <li class="breadcrumb-item active">Edit Purchase</li>
        </ol>
        </nav>
  </div><!-- End Page Title -->
  @include('includes.messages')
  <div class="card px-5">
    {!!Form::open(['action' => ['PurchaseController@update', $purchase->id], 'method' => 'POST', 'class' => 'row g-3 d-block  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}
    {{Form::hidden('_method', 'PUT')}}
    <div class="form-group row">
      <div class="input-group col-md-12 px-5 mx-auto mt-5 mb-2 offset-md-3">
          <div class="input-group-prepend">
              <span class="input-group-text">OR Number</span>
          </div>
          <input type="text" name="or_number" value="{{$purchase->OR_Number}}" class="form-control">
      </div>
  </div>

  <div class="form-group row mt-3">
    <div class="input-group col-md-6 pl-5 mx-auto mb-3 offset-md-3">
      <div class="input-group-prepend">
          <span class="input-group-text">Transaction Date</span>
      </div>
      <input type="text" placeholder="" value="{{$purchase->transaction_date}}" name="transaction_date" class="form-control date-input">
  </div>
    <div class="input-group col-md-6 pr-5 mx-auto mb-3 offset-md-3">
      <div class="input-group-prepend">
          <span class="input-group-text">Amount</span>
      </div>
      <input type="number" name="amount" value="{{$purchase->amount}}" class="form-control">
  </div>
</div>

<div class="form-group row">
  <div class="input-group col-md-6 pl-5 mx-auto mb-3 offset-md-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Cheque Number</span>
        </div>
          <select class="form-control" name="cheque_id">
              <option>Default Select</option>
              @foreach ($cheques as $cheque)
                <option value="{{$cheque->id}}" {{($cheque->id == $purchase->cheque_id) ? 'selected' : ''}}>{{$cheque->cheque_number}}</option>
              @endforeach
          </select>
  </div>
  <div class="input-group col-md-6 pr-5 mx-auto mb-3 offset-md-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Project Name</span>
    </div>
      <select class="form-control" name="project_id">
          <option>Default Select</option>
          @foreach ($projects as $project)
            <option value="{{$project->id}}" {{($project->id == $purchase->project_id) ? 'selected' : ''}}>{{$project->project_name}}</option>
          @endforeach
      </select>
</div>
</div>

<div class="form-group row">
  <label class="col-md-12 px-5 mx-auto col-form-label">Description</label>
  <div class="col-md-12 px-5 mx-auto">
      <textarea class="form-control" name="description" rows="5" placeholder="...">{{$purchase->description}}</textarea>
  </div>
</div>

<div class="card-footer text-right mx-3 mb-3">
  <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
  <a href="/purchases" class="btn btn-secondary"><i class="ti-close"></i> Cancel</a>
</div>
@endsection