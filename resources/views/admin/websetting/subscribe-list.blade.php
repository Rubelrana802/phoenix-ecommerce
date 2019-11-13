@extends('admin.master')

@section('title')
  Manage Subscriber
@endsection

@section('content')
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1>Manage Subscriber</h1>
	        <small>Manage your subscriber</small>
	        <ol class="breadcrumb">
	            <li><a href=""><i class="pe-7s-home"></i> Home</a></li>
	            <li><a href="#">Web Settings</a></li>
	            <li class="active">Manage Subscriber</li>
	        </ol>
	    </div>
	</section>

	<section class="content">

		<!-- Alert Message -->
	    

		<!-- Manage Subscriber -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4>Manage Subscriber</h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th class="text-center">SL.</th>
										<th class="text-center">Apply IP</th>
										<th class="text-center">Email</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
                                    <?php $i=0; ?>
                                    @foreach($subscribe as $row)
                                    <tr>
                                        <td class="text-center">{{ ++$i }}</td>
                                        <td class="text-center">{{ $row->ip }}</td>
                                        <td class="text-center">{{ $row->email }}</td>
                                        <td class="text-center">
                                            
                                            <a href="{{ route('subscribe.destroy', $row->id) }}" class="deleteRecord btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
<!-- Manage product End -->


@endsection