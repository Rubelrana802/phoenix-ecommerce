@extends('admin.master')

@section('title')
  Change your password
@endsection

@section('content')

	<section class="content-header">
        <div class="header-icon"><i class="pe-7s-user-female"></i></div>
        <div class="header-title">
            <h1>Change your information</h1>
            <small>Change your profile</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i>Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="active">Change your information</li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12 col-md-4">
            </div>
            <div class="col-sm-12 col-md-4 ">
                <!-- Alert Message -->
                
                <!-- Login widget --> 
                <div class="login-widget">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <h4>Change your information</h4>
                        </div>
                         <form action="{{ route('user.password.update') }}" id="insert_product" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                         	@csrf
                            <div class="panel-body">
                                <h4 class="text-center">Old Information</h4>
                                <label for="login-email">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                	@if(Session::has('message'))
	                                    <span class="text-danger" role="alert">
	                                        <strong>{{ Session::get('message') }}</strong>
	                                    </span>
	                                @endif
                                <br>
                                <h4 class="text-center">New Information</h4><br>
                                <label for="login-email">New Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
	                                @error('password')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
                                </div>
                                <label for="login-email">Re-Type Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> 
                            <div class="panel-footer text-center">
                                <div class="login-btn">
                                    <button type="submit" class="btn btn-success btn-block m-b-10"> Change Password</button>
                                </div>             
                            </div>
                        </form>                    
                    </div>
                </div>
            </div>
        </div> 
    </section> <!-- /.content -->

@endsection