@extends('admin.master')

@section('title')
  Update Profile
@endsection

@section('content')

	<section class="content-header">
        <div class="header-icon"><i class="pe-7s-user-female"></i></div>
        <div class="header-title">
            <h1>Update Profile</h1>
            <small>Your Profile</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i>Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="active">Update Profile</li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12 col-md-4">
            </div>
            <div class="col-sm-12 col-md-5">

            <!-- Alert Message -->
	            <form action="{{ route('profile.update') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	            	@csrf
	                <div class="card">
	                    <div class="card-header">
	                        <div class="card-header-menu">
	                            <i class="fa fa-bars"></i>
	                        </div>
	                        <div class="card-header-headshot" style="background-image: url('{{ asset('public/admin/dist/img/'.Auth::user()->image ) }}');">
	                        </div>
	                    </div>
	                    <div class="card-content">
	                        <div class="card-content-member">
	                            <h4 class="m-t-0">{{ Auth::user()->name }}
	                            </h4>
	                        </div>
	                        <div class="card-content-languages">
	                            <div class="card-content-languages-group">
	                                <div>
	                                    <h4>User Name:</h4>
	                                </div>
	                                <div>
	                                    <ul>
	                                        <li><input type="text" placeholder="User Name" class="form-control" id="last_name" name="name" required  value="{{ Auth::user()->name }}" /></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="card-content-languages-group">
	                                <div>
	                                    <h4>Email:</h4>
	                                </div>
	                                <div>
	                                    <ul>
	                                        <li><input type="email" class="form-control" id="email" name="email" required value="{{ Auth::user()->email }}" /></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="card-content-languages-group">
	                                <div>
	                                    <h4>Image:</h4>
	                                </div>
	                                <div>
	                                    <ul>
	                                        <li>
	                                        	<input type="file" id="logo" name="image" />
	                                        	<input type="hidden" id="logo" name="oll_image" value="{{ Auth::user()->image }}" />
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
	                    <div class="card-footer">
	                        <div class="card-footer-stats">
	                          <button type="submit" class="btn btn-success" style="margin-left: 150px;">Update Profile</button>
	                        </div>
	                    </div>
	                </div>
                </form>            
            </div>
        </div> 
    </section>

@endsection