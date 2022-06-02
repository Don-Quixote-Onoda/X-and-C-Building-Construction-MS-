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
                <h1 class="text-center fs-4 fw-bold mt-5">Get Started Now</h1>
            <p class="text-center  py-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae vel obcaecati, minus necessitatibus corporis.</p>
            <form action="{{ route('admin.check') }}" method="post" class="mt-5">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ti-email"></i></span>
                        </div>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ti-lock"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <button class="btn btn-secondary w-100 my-3 fw-bold ">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection