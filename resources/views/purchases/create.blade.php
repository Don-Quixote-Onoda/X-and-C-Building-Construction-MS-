@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard"><i class="ti-home"></i> Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/purchases">Purchase</a></li>
          <li class="breadcrumb-item active">Add Purchase</li>
      </ol>
  </div>
</div>
  @include('includes.messages')
  <div class="card px-5">
    {!!Form::open(['action' => 'PurchaseController@store', 'method' => 'POST', 'class' => 'row g-3 d-block  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}
    <div class="form-group row">
      <div class="input-group col-md-12 px-5 mx-auto mt-5 mb-2 offset-md-3">
          <div class="input-group-prepend">
              <span class="input-group-text">OR Number</span>
          </div>
          <input type="text" name="or_number" class="form-control">
      </div>
  </div>

  <div class="form-group row mt-3">
    <div class="input-group col-md-6 pl-5 mx-auto mb-3 offset-md-3">
      <div class="input-group-prepend">
          <span class="input-group-text">Transaction Date</span>
      </div>
      <input type="text" placeholder="" name="transaction_date" class="form-control date-input">
  </div>
    <div class="input-group col-md-6 pr-5 mx-auto mb-3 offset-md-3">
      <div class="input-group-prepend">
          <span class="input-group-text">Amount</span>
      </div>
      <input type="number" name="amount" class="form-control">
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
                <option value="{{$cheque->id}}">{{$cheque->cheque_number}}</option>
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
            <option value="{{$project->id}}">{{$project->project_name}}</option>
          @endforeach
      </select>
</div>
</div>

<div class="form-group row">
  <label class="col-md-12 px-5 mx-auto col-form-label">Description</label>
  <div class="col-md-12 px-5 mx-auto">
      <textarea class="form-control" name="description" rows="5" placeholder="..."></textarea>
  </div>
</div>

<div class="card-footer text-right mx-3 mb-3">
  <button class="btn btn-primary" type="submit"><i class="ti-new-window"></i> Submit</button>
  <a href="/purchases" class="btn btn-secondary"><i class="ti-close"></i> Cancel</a>
</div>
    
    {!!Form::close()!!}
  </div>

@endsection