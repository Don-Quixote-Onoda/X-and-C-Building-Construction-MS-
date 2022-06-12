@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/users">User</a></li>
            <li class="breadcrumb-item active">Show User</li>
        </ol>
    </div>
</div>
<div class="card card-tabs mb-3">
      
  </div>
  <div class="card-body">
      <div class="tab-content">
          <div class="tab-pane fade show active" id="tab1">
              <div class="row">
                <div class="col-md-6">
                    <div class="card card-secondary mb-3">
                        <img src="/storage/projects/profile_pictures/{{$user->profile_picture}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title fs-3 fw-normal mb-3">{{$user->name}} </h5>
                        <h5 class="card-title fs-5"> <span class="fw-normal">Employee ID:</span> {{$user->employee_id}}</h5>
                        <h5 class="card-title fs-5"> <i class="ti-email fw-bold"></i> {{$user->email}}</h5>
                        <h5 class="card-title fs-5">
                          {{($user->user_type_id == 0 ) ? 'Administrator' : ''}}
                          {{($user->user_type_id == 1 ) ? 'Fund Manager' : ''}}
                          {{($user->user_type_id == 2 ) ? 'Transaction Recorder' : ''}}
                        </h5>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection