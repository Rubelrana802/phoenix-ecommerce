@extends('admin.master')

@section('title')
  Add User
@endsection

@section('content')

	 <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add User</h1>
            <small>Add new user information</small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Software Settings</a></li>
                <li class="active">Add User</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('manage.user') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Users </a>
                </div>
            </div>
        </div>


        <!-- New user -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add User </h4>
                        </div>
                    </div>
                    <form action="{{ route('user.save') }}" class="form-vertical" id="insert_user" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    	@csrf
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="first_name" class="col-sm-3 col-form-label">User Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="email">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="******">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Confirm Password <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="******">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_type" class="col-sm-3 col-form-label">User Type <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select required class="form-control" name="user_type" id="user_type" tabindex="5">
								    <option value="">Select One</option>
								    <option value="1">Admin</option>
								    <option value="0">User</option>
								</select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" class="btn btn-success btn-large" name="add-user" value="Save" tabindex="6"/>
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>

    <script>
    @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"

        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('message') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>


@endsection