@extends('admin.master')

@section('title')
  Manage Bank
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Bank List</h1>
            <small>Bank List</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Bank</a></li>
                <li class="active">Bank List</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('bank.add') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add New Bank </a>
                    <a href="{{ route('bank.transaction.add') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Bank Transaction </a>
                   
                </div>
            </div>
        </div>

        <!-- Bank List -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Bank List </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class='text-center'>SL.</th>
                                        <th>Bank Name</th>
                                        <th>A/C Name</th>
                                        <th>A/C Number</th>
                                        <th>Branch</th>
                                        <th>Signature Picture</th>
                                        <th>Balance</th>
                                        <th class='text-center'>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; ?>
                                @foreach($banks as $row)
                                    <tr>
                                        <td class='text-center'>{{ ++$i }}</td>
                                        <td><a href="{{ url('/bank/ledger/'.$row->id) }}" >{{ $row->bank_name }}</a></td>
                                        <td>{{ $row->account_name }}</td>
                                        <td>{{ $row->account_number }}</td>
                                        <td>{{ $row->branch }}</td>                                        
                                        <td>
                                        <img src="{{ asset('public/admin/product/images/'.$row->image) }}" class="img img-responsive center-block" height="80" width="100"></td>
                                        <td class="text-right">{{ $websetting->currency }}
                                            <?php 
                                                        

                                                        $total_dr = DB::table('bank_transactions')
                                                            ->select(DB::raw('SUM(dr) as dr'))
                                                            ->where('bank_id', '=', $row->id)
                                                            ->first();

                                                        $total_cr = DB::table('bank_transactions')
                                                            ->select(DB::raw('SUM(cr) as cr'))
                                                            ->where('bank_id', '=', $row->id)
                                                            ->first();

                                                            echo  $total_dr->dr - $total_cr->cr ;
 
                                                    ?>
                                        </td>
                                        <td class='text-center'>
                                        <a href="{{ url('/admin/bank/edit/'.$row->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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

<!-- Delete bank ajax code -->
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
