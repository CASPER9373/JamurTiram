@extends('template_auth.layout')
@section('title', 'silahkan login')
@section('content')
    <!-- page -->
    <div class="page">

        <!-- main-signin-wrapper -->
        <div class="my-auto page page-h">
            <div class="main-signin-wrapper">
                <div class="main-card-signin d-md-flex wd-100p">
                    <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">
                        <div class="my-auto authentication-pages">
                            <div>
                                <img src="../../assets/img/brand/logo-white.png" class=" m-0 mb-4" alt="logo">
                                <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 wd-md-50p">
                        <div class="main-signin-header">
                            <h2>Welcome back!</h2>
                            <h4>Please sign in to continue</h4>
                            <form action="{{ route('auth') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label><input class="form-control" id="email"
                                        placeholder="Enter your email" type="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label> <input class="form-control" id="password"
                                        placeholder="Enter your password" type="password" name="password">
                                </div><button class="btn btn-main-primary btn-block">Sign In</button>
                            </form>
                        </div>
                        <div class="main-signin-footer mt-3 mg-t-5">
                            <p><a href="">Forgot password?</a></p>
                            <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page closed -->
    <!-- /main-signin-wrapper -->

@endsection
