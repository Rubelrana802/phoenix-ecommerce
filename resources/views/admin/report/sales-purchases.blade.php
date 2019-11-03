@extends('admin.master')

@section('title')
  Todays Report
@endsection

@section('content')

<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Todays Report</h1>
            <small>Todays sales and purchase report</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Report</a></li>
                <li class="active">Todays Report</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="#" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Sales Report </a>
                    <a href="#" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Purchase Report </a>
                    <a href="#" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Sales Report (Product Wise) </a>
                    <a href="#" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Profit Report (Invoice Wise) </a>
                </div>
            </div>
        </div>

        <!-- Todays sales report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Todays Sales Report </h4>
                            <p class="text-right">
                                <a  class="btn btn-warning btn-sm" href="#" onclick="printDiv('printableArea')">Print</a>
                            </p>
                        </div>
                    </div>
                    <div class="panel-body">
                    	<div id="printableArea" style="margin-left:2px;">
                            <table border="0" width="100%" style="margin-bottom: 10px;padding-bottom: 0px">
                                <tr>
                                    <td align="left" style="border-bottom:2px #333 solid;"><img src="{{ asset('public/admin/product/images/'.$websetting->logo) }}" alt="logo">
                                    </td>
                                    <td align="left" style="border-bottom:2px #333 solid;">
                                        <span style="font-size: 17pt; font-weight:bold;">
                                            {{ $company->company_name }}
                                        </span><br>
                                            {{ $company->address }}<br>
                                        {{ $company->email }}<br>
                                            {{ $company->mobile }}
                                    </td>
                                                   
                                        <td align="right" style="border-bottom:2px #333 solid;">
                                            <date>Date: {{ date('d-M-Y') }}</date>
                                        </td>
                                </tr>            
                            </table>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sales Date</th>
                                            <th>Invoice No</th>
                                            <th>Customer Name</th>
                                            <th class="text-right">Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($saledetails as $sale)                                            
                                            <tr>
                                                <td>{{ date("d-M-Y", strtotime($sale->date ))}}</td>
                                                <td><a href="{{ url('/admin/invoice/inserted_data/'.$sale->sell_invoice_no) }}">{{ $sale->sell_invoice_no }}</a></td>
                                                <td>{{ $sale->customer_name }}</td>
                                                <td style="text-align: right;">{{ $websetting->currency }} {{ $sale->grand_total_amount }}</td>
                                            </tr>
                                        @endforeach    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" align="right"  style="text-align:right;font-size:14px !Important">&nbsp;<b>Total Sales:</b></td>
                                            <td style="text-align: right;"><b>{{ $websetting->currency }} {{ $grand_total_amount->grand_total_amount }}</b></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Todays purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Todays Purchase Report</h4>
                            <p class="text-right">
                                <a  class="btn btn-warning" href="#" onclick="printDiv('purchase_div')">Print</a>
                            </p>
                        </div>
                    </div>
                    <div class="panel-body">
                    	<div id="purchase_div" style="margin-left:2px;">
                            <table border="0" width="100%" style="margin-bottom: 10px;padding-bottom: 0px">
                                <tr>
                                    <td align="left" style="border-bottom:2px #333 solid;"><img src="{{ asset('public/admin/product/images/'.$websetting->logo) }}" alt="logo">
                                    </td>
                                    <td align="left" style="border-bottom:2px #333 solid;">
                                        <span style="font-size: 17pt; font-weight:bold;">
                                            {{ $company->company_name }}
                                        </span><br>
                                            {{ $company->address }}<br>
                                        {{ $company->email }}<br>
                                            {{ $company->mobile }}
                                    </td>
                                                   
                                    <td align="right" style="border-bottom:2px #333 solid;">
                                            <date>Date: {{ date('d-M-Y') }}</date>
                                    </td>
                                </tr>            
                            </table>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Purchase Date</th>
                                            <th>Invoice No</th>
                                            <th>Supplier Name</th>
                                            <th class="text-right">Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($purchases as $purchase)                      
	                                        <tr>
	                                            <td>{{ date("d-M-Y", strtotime($purchase->purchase_date ))}}</td>
	                                            <td><a href="{{ url('/admin/report/purchase/invoice/'.$purchase->purchase_invoice_no) }}">{{ $purchase->purchase_invoice_no }}</a></td>
	                                            <td>{{ $purchase->supplier_name }}</td>
	                                            <td style="text-align: right;">{{ $websetting->currency }} {{ $purchase->grand_total_amount }}</td>
	                                        </tr>
                                        @endforeach   
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" align="right" style="text-align:right;font-size:14px !Important">&nbsp; <b>Total Purchase: </b></td>
                                            <td style="text-align: right;"><b>{{ $websetting->currency }} {{ $total->total }}</b></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection