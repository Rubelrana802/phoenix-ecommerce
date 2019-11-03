@extends('admin.master')

@section('title')
  Sales Report
@endsection

@section('content')

	<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Sales Report</h1>
            <small>Total Sales Report</small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Report</a></li>
                <li class="active">Sales Report</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                	<a class="btn btn-primary m-b-5 m-r-2" href="#">Todays Report</a>
                    <a href="#" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Purchase Report </a>
                    <a href="#" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Sales Report (Product Wise) </a>
                    <a href="#" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Profit Report (Invoice Wise) </a>
                </div>
            </div>
        </div>

        <!-- Sales report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <form action="{{ route('sales.date.wise') }}" class="form-inline" method="post" accept-charset="utf-8">
                        	@csrf
	                        <div class="form-group">
	                            <label class="" for="from_date">Start Date</label>
	                            <input type="text" name="from_date" class="form-control datepicker" id="from_date" placeholder="Start Date" value="{{ date('Y-m-d') }}">
	                        </div> 

	                        <div class="form-group">
	                            <label class="" for="to_date">End Date</label>
	                            <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="End Date" value="{{ date('Y-m-d') }}">
	                        </div>  

	                        <button type="submit" class="btn btn-success">Search</button>
                        </form>                    
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Sales Report </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sales Date</th>
                                            <th>Invoice No</th>
                                            <th>Customer Name</th>
                                            <th class="text-right">Total Amount</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    	@foreach($salesreport as $sales)
                                        <tr>
                                            <td>{{ date("d-M-Y", strtotime($sales->date ))}}</td>
                                            <td><a href="{{ url('/admin/invoice/inserted_data/'.$sales->sell_invoice_no) }}">{{ $sales->sell_invoice_no }}</a></td>
                                            <td><a href="#">{{ $sales->customer_name }}</a></td>
                                        	<td style="text-align: right;">{{ $websetting->currency }} {{ $sales->grand_total_amount }}</td>
                                        </tr>
                                        @endforeach
									</tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" style="text-align: right;"><b>Total Sales</b></td>
                                            <td style="text-align: right;"><b>{{ $websetting->currency }} {{ $grand_total_amount->grand_total_amount }}</b></td>
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