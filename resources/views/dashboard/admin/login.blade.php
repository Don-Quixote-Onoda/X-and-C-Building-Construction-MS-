<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X and C Building Construction</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assetss/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assetss/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assetss/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assetss/css/pages/auth.css')}}">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-6 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a  class="d-flex justify-content-center"><img src="{{asset('assetss/images/logo/favicon.png')}}" class="w-50 h-50" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <form action="{{ route('admin.check') }}" method="post" class="mt-5">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl"  name="email" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>

{{-- @extends('layouts.register')
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
@endsection --}}