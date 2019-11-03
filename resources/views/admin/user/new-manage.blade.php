@extends('admin.master')

@section('title')
  Manage User
@endsection

@section('content')

	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1>Manage Users</h1>
	        <small>Manage Users</small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
	            <li><a href="#">Software Settings</a></li>
	            <li class="active">Manage Users</li>
	        </ol>
	    </div>
	</section>

	<section class="content">
		<!-- Alert Message -->
	    
	     <div class="row">
            <div class="col-sm-12">
                <div class="column">
                	<a href="http://saleserpnew.bdtask.com/Demo_saleserpv9/User" class="btn btn-success m-b-5 m-r-2"><i class="ti-plus"> </i> Add User </a>
                </div>
            </div>
        </div>

		<!-- User List -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4>Manage Users </h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
		           				<thead>
									<tr>
										<th class="text-center">SL.</th>
										<th>Name</th>
										<th>Email</th>
										<th>User Type</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=0 ?>
									@foreach($users as $user)
										<tr>
											<td class="text-center">{{ ++$i }}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->admin == 1 ? 'Admin' : 'User' }}</td>
											<td class="text-center">
												<a class="btn btn-info btn-sm" href="{{ url('/admin/user/edit/'.$user->id) }}"><i style="font-size: 16px;" class="fa fa-pencil" data-toggle="tooltip" title="Update"></i></a>
												@if($user->admin == 0)
	                                       			<a data-id="#" data-route="#" class="deleteRecord btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
	                                       		@endif
											</td>
										</tr>
									@endforeach
								</tbody>
		                    </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>

@endsection

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
