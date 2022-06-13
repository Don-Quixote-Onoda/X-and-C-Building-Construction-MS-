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
                <div class="col-md-3">
                    <div class="card card-secondary mb-3">
                        <img src="/storage/projects/profile_pictures/{{$user->profile_picture}}" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title fs-3 fw-normal">
                            {{($user->user_type_id == 0 ) ? 'Administrator' : ''}}
                            {{($user->user_type_id == 1 ) ? 'Fund Manager' : ''}}
                            {{($user->user_type_id == 2 ) ? 'Transaction Recorder' : ''}}
                          </h5>
                        <h5 class="card-title fs-4 mb-3">{{$user->name}} </h5>
                        <h5 class="card-title fs-6"> <span class="fw-normal">ID:</span> <span style="text-decoration: underline">{{$user->employee_id}}</span></h5>
                        <h5 class="card-title fs-6"> <i class="ti-email fw-bold"></i> {{$user->email}}</h5>
                        
                    </div>
                </div>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection