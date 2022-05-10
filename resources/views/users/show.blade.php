@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>User's Profile</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bi bi-house-door"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
            <li class="breadcrumb-item active">User's Profile</li>
        </ol>
        </nav>
  </div><!-- End Page Title -->
  @include('includes.messages')

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="/storage/users/image_profiles/{{$user->image_profile}}" alt="Profile" class="rounded-circle">
            <h2>{{$user->employee_fullname}}</h2>
            <h3>{{$user->usertype->usertype}}</h3>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Employee ID</div>
                    <div class="col-lg-9 col-md-8">{{$user->employee_id}}</div>
                  </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Full Name</div>
                  <div class="col-lg-9 col-md-8">{{$user->employee_fullname}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Username</div>
                  <div class="col-lg-9 col-md-8">{{$user->username}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">User Type</div>
                  <div class="col-lg-9 col-md-8">{{$user->usertype->usertype}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Status</div>
                  <div class="col-lg-9 col-md-8">{{($user->status == 1)? 'Active' : 'Inactive'}}</div>
                </div>
              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                {!! Form::open(['action' => ['UserController@update', $user->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                        <div class="col-sm-12">
                            <img src="/storage/users/image_profiles/{{$user->image_profile}}" class="img-fluid" alt="Profile">
                        </div>
                        <input name="image_profile" class="form-control" type="file" id="formFile">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Employee ID</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="employee_id" type="text" class="form-control" id="fullName" value="{{$user->employee_id}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="employee_fullname" type="text" class="form-control" id="company" value="{{$user->employee_fullname}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Username</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="username" type="text" class="form-control" id="Job" value="{{$user->username}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Status</label>
                        <div class="col-md-8 col-lg-9">
                        <select name="status" class="form-select" aria-label="Default select example" required>
                            <option disabled value="">Select Employee Status</option>
                            <option value="0" {{($user->status == 0) ? "selected" : ""}}>Inactive</option>
                            <option value="1" {{($user->status == 1) ? "selected" : ""}}>Active</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a status.
                        </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">User Type</label>
                        <div class="col-md-8 col-lg-9">
                          <select name="usertype" class="form-select" aria-label="Default select example" required>
                            <option selected="" disabled value="">Select User Type</option>
                            @foreach ($usertypes as $usertype)
                            <option value="{{$usertype->id}}" {{($usertype->id == $user->usertype->id) ? "selected" : ""}}>{{$usertype->usertype}}</option>
                            @endforeach
                          </select>
                          <div class="invalid-feedback">
                            Please provide a status.
                          </div>
                        </div>
                    </div>
                  {{Form::hidden('_method', 'PUT')}}

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                {!! Form::close() !!}
                  <!-- End Profile Edit Form -->

              </div>

              <div class="tab-pane fade pt-3 " id="profile-change-password">
                <!-- Change Password Form -->
                {!! Form::open(['action' => ['UserController@changePassword', $user->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>
                  <input type="hidden" name="id" value="{{$user->id}}">

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                {!!Form::close()!!}
                <!-- End Change Password Form -->

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection