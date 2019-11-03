@extends('admin.master')

@section('title')
  Manage Company
@endsection

@section('content')

<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1>Manage Company</h1>
	        <small>Manage Company</small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
	            <li><a href="#">Software Settings</a></li>
	            <li class="active">Manage Company</li>
	        </ol>
	    </div>
	</section>

	<section class="content">  

		<!-- Company List -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4>Manage Company </h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
				           		<thead>
									<tr>
										<th>SL.</th>
										<th>Name</th>
										<th>Address</th>
										<th>Mobile</th>
										<th>Website</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($company as $row)							
									<tr>
										<td>1</td>
										<td>{{ $row->company_name }}</td>
										<td>{{ $row->address }}</td>
										<td>{{ $row->mobile }}</td>
										<td style="text-align:right !Important">{{ $row->website }}</td>
										<td class="text-center">
                                        <a class="btn btn-info btn-sm" href="{{ url('/admin/company/edit/'.$row->id) }}"><i style="font-size: 16px;" class="fa fa-pencil" data-toggle="tooltip" title="Update"></i></a>
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
