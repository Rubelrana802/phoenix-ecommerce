@extends('admin.master')

@section('title')
  User Edit
@endsection

@section('content')

	    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>User Edit</h1>
            <small>User Edit</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Software Settings</a></li>
                <li class="active">User Edit</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <!-- New user -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>User Edit </h4>
                        </div>
                    </div>
                    <form action="{{ route('user.update') }}" id="update_user" class="form-vertical" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    	@csrf
                    <div class="panel-body">

                         <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label">User Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="name" value="{{ $user->name }}"  placeholder="Last Name" required />
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="3" id="email" class="form-control" name="email" value="{{ $user->email }}"  placeholder="Email" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="password" tabindex="4" id="password" class="form-control" name="password" placeholder="Password" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label">Status <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="status" tabindex="5" required>
                                    <option value="">Select One</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <input type="hidden" name="user_id" value="{{ $user->id }}" />

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-Customer" class="btn btn-success btn-large" name="add-Customer" value="Save Changes" tabindex="6"/>
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript">

        $("#update_user").validate();

    </script>

@endsection