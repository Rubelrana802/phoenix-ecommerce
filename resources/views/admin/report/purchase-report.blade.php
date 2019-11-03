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
            <h1>Purchase Report</h1>
            <small>Total Purchase Report</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Report</a></li>
                <li class="active">Purchase Report</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="#" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Sales Report </a>
                    <a href="#" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Sales Report (Product Wise) </a>
                </div>
            </div>
        </div>

        <!-- Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <form action="{{ route('purchasereport.date') }}" class="form-inline" method="post" accept-charset="utf-8">
                        @csrf
                            <div class="form-group">
                                <label class="" for="from_date">Start Date</label>
                                <input type="text" name="from_date" class="form-control datepicker" id="from_date" value="{{ date('Y-m-d') }}" placeholder="Start Date" >
                            </div> 

                            <div class="form-group">
                                <label class="" for="to_date">End Date</label>
                                <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="End Date" value="{{ date('Y-m-d') }}">
                            </div>  

                            <button type="submit" class="btn btn-success">Search</button>
                            <a  class="btn btn-warning" href="#" onclick="printDiv('purchase_div')">Print</a>
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
                            <h4>Purchase Report</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="purchase_div" style="margin-left:2px;">
                            <table border="0" width="100%" style="margin-bottom: 10px;padding-bottom: 0px">
                                <tr>
                                    <td align="left" style="border-bottom:2px #333 solid;">
                                        <img src="{{ asset('public/admin/product/images/'.$websetting->logo) }}" alt="logo">
                                    </td>
                                    <td align="left" style="border-bottom:2px #333 solid;">
                                        <span style="font-size: 17pt; font-weight:bold;">{{ $company->company_name }}</span>
                                        <br>{{ $company->address }}<br>
                                        {{ $company->email }}                          <br>{{ $company->mobile }}                              
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
                                            <th>Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($purchases as $purchase)
                                            <tr>
                                                <td>{{ date("d-M-Y", strtotime($purchase->purchase_date ))}}</td>
                                                <td>
                                                    <a href="{{ url('/admin/report/purchase/invoice/'.$purchase->purchase_invoice_no) }}">{{ $purchase->purchase_invoice_no }}</a>
                                                </td>
                                                <td><a href="{{ url('/admin/report/supplier/wise/'.$purchase->supplier_id )}}">{{ $purchase->supplier_name }} </a></td>
                                                <td style="text-align: right;">{{ $websetting->currency }} {{ $purchase->grand_total_amount }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" align="right" style="text-align:right;font-size:14px !Important">&nbsp; <b>Total Purchase : </b></td>
                                            <td style="text-align: right;"><b>{{ $websetting->currency }} {{ $total->total }}</b></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="text-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- Printable area start -->

<script type="text/javascript">

function printDiv(purchase_div) {

var printContents = document.getElementById(purchase_div).innerHTML;

var originalContents = document.body.innerHTML;

document.body.innerHTML = printContents;

window.print();

document.body.innerHTML = originalContents;

}


</script>

<style type="text/css">
    @media print {
  ...
  a[href]:after {
    content: " (" attr(href) ")";
  }
  ...
}
</style>
