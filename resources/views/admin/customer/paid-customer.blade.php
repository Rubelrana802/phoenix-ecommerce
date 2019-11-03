@extends('admin.master')

@section('title')
  Paid Customer
@endsection

@section('content')
    <section class="content-header">
		<div class="header-icon">
			<i class="pe-7s-note2"></i>
		</div>
		<div class="header-title">
			<h1>Paid Customer</h1>
			<small>Paid Customer List</small>
			<ol class="breadcrumb">
				<li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
				<li><a href="#">Customer</a></li>
				<li class="active">Paid Customer</li>
			</ol>
		</div>
	</section>


    <section class="content">        
                <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('customer.manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Customer </a>
                    <a href="{{ route('customer.ledger') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Customer Ledger</a>
                    <a href="{{ route('credit.customer') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Credit Customer </a>
                </div>
            </div>
        </div>

        <!-- Manage Tax -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Paid Customer</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.</th>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th class="text-right">Amount</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($paidcustomer as $row)
                                    <tr>
                                        <td class="text-center">{{ ++$i }}</td>
                                        <td>{{ $row->customer_name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->mobile }}</td>
                                        <td>{{ $row->address }}</td>
                                        <td class="text-right">{{ $row->grand_total_amount }}</td>
                                        <td class="text-center">
                                            
                                            <a class="btn btn-info btn-sm" href="{{ url('/customer/edit/'.$row->id) }}"><i style="font-size: 16px;" class="fa fa-pencil" data-toggle="tooltip" title="Update"></i></a>
                                            
                                            <a data-id="{{ $row->id }}" data-route="#" class="deleteRecord btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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

<!-- Delete product ajax code -->
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