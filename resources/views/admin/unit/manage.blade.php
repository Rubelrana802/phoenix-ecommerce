@extends('admin.master')

@section('title')
  Manage Unit
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Manage Unit</h1>
            <small>Manage your unit </small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Unit</a></li>
                <li class="active">Manage Unit</li>
            </ol>
        </div>
    </section>

    <section class="content">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                     <a href="{{ url('/admin/unit/create') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> Add Unit </a>
                </div>
            </div>
        </div>

        <!-- Manage Category -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Manage Unit</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Unit ID</th>
                                        <th class="text-center">Unit Name</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php $i=0; ?>
                					@foreach($unit as $row)
                    				<tr class="text-center">
                        				<td>{{ ++$i }}</td>
                        				<td>{{ $row->unit_name }}</td>
                        				<td>                                        		
                                       		<a class="btn btn-info btn-sm" href="{{ url('/admin/unit/'.$row->id).'/edit' }}"><i style="font-size: 16px;" class="fa fa-pencil" data-toggle="tooltip" title="Update"></i></a>
											
                                       		<a data-id="{{ $row->id }}" data-route="{{route('unit.destroy', $row->id)}}" class="deleteRecord btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
<!-- Manage Category End -->

<!-- Delete Category ajax code -->
<script type="text/javascript">


	$(document).ready(function(){
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

	$(".deleteRecord").click(function(e){
		e.preventDefault();
	    var id = $(this).data("id");
	    var route = $(this).data("route");
	     var x = confirm("Are You Sure,Want to Delete ?");
        if (x == true) {

		    $.ajax(
		    {
		        url: route,
		        type: 'DELETE',
		        data: {
		            "id": id,    
		        },
		        success: function (data){
		           location.reload(true);
		        },
		         error: function(err){
				  }
			});
		}
	});
});
    
</script>

@endsection
