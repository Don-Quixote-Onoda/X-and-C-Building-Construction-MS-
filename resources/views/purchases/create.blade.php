@extends('layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Add Purchase Information</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Purchases</a></li>
        <li class="breadcrumb-item active">Add New Purchase</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

 <!-- Profile Edit Form -->
 {!! Form::open(['action' => 'PurchaseController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}

 <div class="row mb-3">
   <label for="company" class="col-md-4 col-lg-3 col-form-label">OR Number</label>
   <div class="col-md-8 col-lg-9">
     <input name="OR_Number" type="number" class="form-control" id="amount">
   </div>
 </div>
 <div class="row mb-3">
   <label for="inputNanme4" class="col-md-4 col-lg-3 form-label">Trasaction Date</label>
   <input type="date" name="transaction_date" class="col-md-8 col-lg-9 form-control " id="inputNanme4" required>
   <div class="invalid-feedback">
     Please provide a project's start date.
   </div>
 </div>
   <div class="row mb-3">
       <label for="Job" class="col-md-4 col-lg-3 col-form-label">Select Cheque</label>
       <div class="col-md-8 col-lg-9">
         <select name="cheque_id" class="form-select" aria-label="Default select example" >
           <option selected="" disabled value="">Select Cheque</option>
           @foreach ($cheques as $cheque)
           <option value="{{$cheque->id}}">{{$cheque->cheque_number}}</option>
           @endforeach
         </select>
         <div class="invalid-feedback">
           Please provide employee.
         </div>
       </div>
   </div>
   <div class="row mb-3">
    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Select Project</label>
    <div class="col-md-8 col-lg-9">
      <select name="project_id" class="form-select" aria-label="Default select example" >
        <option selected="" disabled value="">Select Project</option>
        @foreach ($projects as $project)
        <option value="{{$project->id}}">{{$project->project_name}}</option>
        @endforeach
      </select>
      <div class="invalid-feedback">
        Please provide employee.
      </div>
    </div>
</div> 
   <div class="row mb-3">
       <label for="Job" class="col-md-4 col-lg-3 col-form-label">Amount</label>
       <div class="col-md-8 col-lg-9">
         <input name="amount" type="text" class="form-control" id="Job">
       </div>
     </div>
       <div class="row mb-3">
         <label for="inputPassword" class="col-sm-12 col-form-label">Purchase's Description</label>
         <div class="col-sm-12">
           <textarea name="project_description" class="form-control" style="height: 100px" required></textarea>
           <div class="invalid-feedback">
             Please provide a description.
           </div>
         </div>
     </div>
 <div class="text-center">
     <button type="submit" class="btn btn-primary">Save Changes</button>
 </div>
{!! Form::close() !!}

@endsection