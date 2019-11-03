@extends('admin.master')

@section('title')
  Purchase Report
@endsection

@section('content')

		<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1>Purchase Ledger</h1>
	        <small>Purchase Ledger</small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
	            <li><a href="#">Purchase</a></li>
	            <li class="active">Purchase Ledger</li>
	        </ol>
	    </div>
	</section>

	<!-- Invoice information -->
	<section class="content">

		<!-- Alert Message -->
	    
	    <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('purchase.add') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Purchase </a>
                	<a href="{{ route('purchase.manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Purchase </a>
                </div>
            </div>
        </div>

		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4>Purchase Information</h4>
		                </div>
		            </div>
		            <div class="panel-body">
	  					<div style="float:left">
							<th width="100%" colspan="5" style="font-weight:normal">
				        	<h3> <u> {{ $company->company_name }} </u> </h3> 
				            Date :&nbsp;{{ date("d-M-Y", strtotime($purchase->purchase_date ))}} <br />Invoice No :&nbsp; {{ $purchase->purchase_invoice_no }}<br>  <span style="float:right">Print Date : {{ date('d-M-Y h:i:s A') }} </span>
				            </th>
						</div>
		            </div>
		        </div>
		    </div>
		</div>

		<!-- Purchase Ledger -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4>Purchase Information</h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th class="text-center">SL.</th>
										<th>Product Name</th>
										<th>Qnty</th>
										<th>Rate</th>
										<th>Total Amount</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=0; ?>
									@foreach($purchases as $purchase)						
										<tr>
											<td class="text-center">{{ ++$i }}</td>
											<td>

												@foreach($products as $product)
												<a href="{{ url('/admin/report/product/wise/'.$purchase->product_id) }}">
												{{ $product->id == $purchase->product_id ? $product->product_name : '' }}
												</a>
												@endforeach
											</td>
											<td style="text-align: right">{{ $purchase->quantity }}</td>
											<td style="text-align: right;">{{ $websetting->currency }} {{ $purchase->rate }}</td>
											<td style="text-align:right;padding-right:20px !important;">{{ $websetting->currency }} {{ $purchase->total_amount }}</td>
										</tr>
									@endforeach
								
								</tbody>
								<tfoot>
									<tr>
										<td style="text-align:right" colspan="4"><b>Total Discount:</b></td>
										<td  style="text-align:right;padding-right:20px !important;"><b>{{ $websetting->currency }} {{ $totalDiscount->discount }}</b></td>
									</tr>
																		<tr>
										<td style="text-align:right" colspan="4"><b>Grand Total:</b></td>
										<td  style="text-align:right;padding-right:20px !important;"><b>{{ $websetting->currency }} {{ $purchase-> 	grand_total_amount }}</b></td>
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

