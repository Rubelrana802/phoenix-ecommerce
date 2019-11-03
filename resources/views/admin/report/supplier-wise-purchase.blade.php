@extends('admin.master')

@section('title')
  Supplier Purchase Report
@endsection

@section('content')

	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1>Supplier Details</h1>
	        <small>Manage your supplier details.</small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
	            <li><a href="#">Supplier</a></li>
	            <li class="active">Supplier Details</li>
	        </ol>
	    </div>
	</section>

	<!-- Supplier information -->
	<section class="content">

		<!-- Alert Message -->
	    

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="#" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Supplier </a>
                    <a href="#" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Manage Supplier </a>
                    <a href="#" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Supplier Ledger </a>
                    <a href="#" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Supplier Sales Details </a>
                </div>
            </div>
        </div>

		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4>Purchase Report</h4>
		                </div>
		            </div>
		            <div class="panel-body">
	  					<div style="float:left">
							<h2>Supplier Name : {{ $suppliers->supplier_name }}</h2>
							<h4>Mobile : {{ $suppliers->mobile }}</h4>
							<h5>Address : {{ $suppliers->address }}</h5>
						</div>
		            </div>
		        </div>
		    </div>
		</div>

		<!-- Manage Supplier -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4>Supplier Ledger</h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th>Date</th>
										<th>Invoice No</th>
										<th>Details</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
									@foreach($supplierDetails as $supplier)			
										<tr>
											<td>{{ date("d-M-Y", strtotime($supplier->purchase_date ))}}</td>
											<td>
												<a href="{{ url('/admin/report/purchase/invoice/'.$supplier->purchase_invoice_no)}}">
													{{ $supplier->purchase_invoice_no }}
												</a>
											</td>
											<td></td>
											<td>{{ $websetting->currency }} {{ $supplier->grand_total_amount  }}</td>
										</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr>
										<td colspan="3" class="text-right"><b>Grand Total:</b></td>
										<td><b>{{ $websetting->currency }} {{ $grand_total_amount->amount  }}</b></td>
									</tr>
								</tfoot>
		                    </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>
@endsection