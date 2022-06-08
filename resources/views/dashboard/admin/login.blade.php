@extends('layouts.register')
@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-dark mb-3">
                <img src="{{asset('construction/images/projects/project6.jpg')}}" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-md-4 pr-5">
            <div>
                <h1 class="text-center text-light fs-4 fw-bold mt-5">Get Started Now</h1>
            <form action="{{ route('admin.check') }}" method="post" class="mt-5">
                @csrf
                <div class="form-group">
                    <label class="text-light">Email</label>
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-light"><i class="ti-email"></i></span>
                        </div>
                        <input type="text" class="form-control text-light" name="email" placeholder="Email Address">
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-light">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend ">
                            <span class="input-group-text text-light"><i class="ti-lock"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control text-light" placeholder="Password">
                    </div>
                </div>
                <button class="btn btn-secondary w-100 my-3 fw-bold ">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection