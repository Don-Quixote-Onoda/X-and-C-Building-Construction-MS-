@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card pl-4 pt-3">
                <div class="card-header">{{ __('Edit User') }}</div>

                <div class="card-body">
                    {!!Form::open(['action' => ['UserController@update', $admin->id], 'method' => 'POST', 'class' => 'row g-3 d-block  needs-validation', 'novalidate', 'enctype' =>'multipart/form-data'])!!}

                    <div class="row mb-1 ">
                        <div class="input-group col-md-10 ml-0 mb-3 offset-md-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-export"></i></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="profile_picture" value="{{$admin->profile_picture}}">
                                <label class="custom-file-label">Upload Profile Picture</label>
                            </div>
                        </div>
                    </div>
                        <div class="row mb-3">
                            <label for="employee_id" class="col-md-4 col-form-label text-md-end">{{ __('Employee ID') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" value="{{$admin->employee_id}}" class="form-control @error('name') is-invalid @enderror" name="employee_id" required autocomplete="employee_id" autofocus>

                                @error('employee_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fullname" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="name" value="{{ $admin->name }}" required autocomplete="fullname" autofocus>

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{Form::hidden('_method', 'PUT')}}

                        <div class="row mb-3">
                            <label for="usertype" class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="usertype">
                                    <option>Default Select</option>
                                    <option value="0" {{($admin->user_type_id == 0) ? 'selected' : ''}}>Administrator</option>
                                    <option value="1" {{($admin->user_type_id == 1) ? 'selected' : ''}}>Fund Manager</option>
                                    <option value="2" {{($admin->user_type_id == 2) ? 'selected' : ''}}>Transaction Recorder</option>
                                </select>

                                @error('usertype')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <select name="status" class="form-control" >
                                    <option value="1" {{($admin->status == 1) ? 'selected' : ''}} >Active</option>
                                    <option value="0" {{($admin->status == 0) ? 'selected' : ''}}>Inactive</option>
                                </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $admin->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" value="{{$admin->password}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm"  value="{{$admin->password}}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
        <a href="/admin/users" class="btn btn-outline-secondary float-right justify-content-end text-secondary"><i class="fa fa-reply-all"></i> Back</a>

                            </div>
                        </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
