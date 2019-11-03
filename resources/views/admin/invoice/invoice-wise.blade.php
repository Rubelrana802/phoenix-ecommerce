@extends('admin.master')
@section('title')
    Invoice Details
@endsection

@section('content')

	<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Invoice Details</h1>
            <small>Invoice Details</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Invoice</a></li>
                <li class="active">Invoice Details</li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Alert Message -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div id="printableArea">
                        <div class="panel-body">
                            <div class="row" style="border-bottom:2px #333 solid;">
                                
                                <div class="col-sm-8" style="display: inline-block;width: 64%">
                                    <img src="{{ asset('public/admin/product/images/'.$websetting->logo) }}" class="" alt="" style="margin-bottom:20px">
                                    <br>
                                    <span class="label label-danger-outline m-r-15 p-10" >Billing From</span>
                                    <address style="margin-top:10px">
                                        <strong style="font-size: 20px; ">{{ $company->company_name }}</strong><br>
                                        {{ $company->address }}<br>
                                        <abbr><b>Mobile:</b></abbr> {{ $company->mobile }}<br>
                                        <abbr><b>Email:</b></abbr>
                                        {{ $company->email }} 
                                        <br>
                                        <abbr><b>Website:</b></abbr> 
                                        {{ $company->website }}
                                    </address>
                                </div>
                                
                                <div class="col-sm-4 text-left" style="display: inline-block;margin-left: 5px;">
                                    <h2 class="m-t-0">Invoice</h2>
                                    <div> Invoice No: <span style="font-size: 18px;">{{ $customers->sell_invoice_no }}</span></span></div>
                                    <div class="m-b-15">Billing Date: {{ date("d-M-Y", strtotime($customers->date ))}}</div>

                                    <span class="label label-danger-outline m-r-15">Billing To</span>

                                    <address style="margin-top:10px;width: 200px">  
                                        <strong style="font-size: 20px; ">{{ $customers->customer_name }} </strong><br>
                                        <abbr><b>Mobile:</b></abbr>
										{{ $customers->mobile }}
                                        <br>
                                        <abbr><b>Email:</b></abbr>
                                        {{ $customers->email }} 
                                    </address>

                                </div>
                            </div> 

                            <div class="table-responsive m-b-20">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">SL.</th>
                                            <th class="text-center">Product Name</th>
                                            <th class="text-right">Qnty</th>
                                            <th class="text-right"> </th>
                                            <th class="text-right">Rate</th>
                                            <th class="text-right">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=0; ?>
                                        @foreach($invoicewises as $invoice)
                                        <tr>
                                            <td class="text-center">{{ ++$i }}</td>
                                            <td class="text-center"><div><strong>{{ $invoice->product_name }}</strong></div></td>
                                            <td align="right">{{ $invoice->quantity }}</td>
                                            <td></td>
                                            <td align="right">{{ $websetting->currency }} {{ $invoice->rate }}</td>
                                            <td align="right">{{ $websetting->currency }} {{ $invoice->total_price }}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td class="text-right" colspan="2" style="border: 0px"><b>Grand Total:</b></td>
                                            <!--<td style="border: 0px"></td>-->
                                            <td align="right"  style="border: 0px"><b>{{ $quantitys->quantity}}</b></td>
                                            <td style="border: 0px"></td>
                                            <td style="border: 0px"></td>
                                            <td align="right"  style="border: 0px"><b>{{ $websetting->currency }} {{ $total_prices->total_price }}</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">

                                <div class="col-xs-8" style="display: inline-block;width: 66%">

                                    <p></p>
                                    <p><strong></strong></p> 
                                   
                                </div> 
                                <div class="col-xs-4" style="display: inline-block;">

                                    <table class="table">
                                    	<tr>
                                        	<th class="text-left grand_total">Total :</th>
                                            <td class="text-right grand_total">{{ $websetting->currency }} {{ $total_prices->total_price }}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-left grand_total"> Discout:</th>
                                            <td class="text-right grand_total">{{ $websetting->currency }} {{ $total_discounts->total_discount }}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-left grand_total" style="border-top: 0; border-bottom: 0;">Grand Amount : </th>
                                            <td class="text-right grand_total" style="border-top: 0; border-bottom: 0;">{{ $websetting->currency }} {{ $total_prices->total_price - $total_discounts->total_discount }}</td>
                                        </tr>
                                    </table>
                                    </div>
                                </div>

                            <div class="row" style="margin-top: 80px">
                                <div class="col-sm-4">
                                 <div  style="float:left;width:40%;text-align:center;border-top:1px solid #e4e5e7;font-weight: bold;">
                                        Received By                                    </div>
                                </div>
                               <div class="col-sm-4"></div>
                                    <div class="col-sm-4"> 
                                    	<div  style="float:right;width:40%;text-align:center;border-top:1px solid #e4e5e7;font-weight: bold;">Authorised By
                                    	</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="panel-footer text-left">
                        <a  class="btn btn-danger" href="#">Cancel</a>
                        <button  class="btn btn-info" onclick="printDiv('printableArea')"><span class="fa fa-print"></span> Print</button>

                    </div>
            </div>
        </div>
	</section>

@endsection


<script type="text/javascript">

function printDiv(divName) {

var printContents = document.getElementById(divName).innerHTML;

var originalContents = document.body.innerHTML;

document.body.innerHTML = printContents;

window.print();

document.body.innerHTML = originalContents;

}

</script>