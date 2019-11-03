@extends('admin.master')

@section('title')
  Customer Ledger
@endsection

@section('content')
<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Customer</h1>
            <small>Customer Ledger</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Customer</a></li>
                <li class="active">Customer Ledger</li>
            </ol>
        </div>
    </section>

    <!-- customer information -->
    <section class="content">
        <!-- Alert Message -->
                <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 

                        <form action="{{ route('customer.ledger.search') }}" class="form-vertical" id="person_ledger" method="post" accept-charset="utf-8">
                            @csrf

                            <div class="form-group row">
                                <label for="to_date" class="col-sm-3 col-form-label">Name: <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <select required class="form-control" name="customer_id" id="name" tabindex="1">
                                    <option>Select One</option>
                                    @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->customer_name }} | {{ $customer->mobile }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="from_date" class="col-sm-3 col-form-label">From: <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" id="from_date" name="from_date" value="{{ date('Y-m-d') }}" class="form-control datepicker" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="to_date" class="col-sm-3 col-form-label">To: <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input type="text" id="to_date" name="to_date" value="{{ date('Y-m-d') }}" class="form-control datepicker" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-6">
                                    <span class="col-sm-4"></span>
                                    <button type="submit" class="btn btn-success">Search</button>
                                    
                                </div>
                            </div>
                        </form>                    
                    </div>
                </div>
            </div>
        </div>   

        <!-- customer ledger -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Customer Ledger</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="printableArea" style="margin-left:2px;">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>                                        
                                        <tr>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-right">Debit</th>
                                            <th class="text-right">Credit</th>
                                            <th class="text-right">Balance</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 

                                        $tbalance = 0 ; ?>
                                        @foreach($payment as $payment)
                                            <tr>
                                                <td class="text-center">{{ date("Y-m-d", strtotime($payment->date))}}</td>
                                                <td>{{ $payment->detaits }}</td>
                                                <td align="right"> 
                                                    @if($payment->type == 1)
                                                    TK {{ $payment->payment_total }}
                                                    @endif
                                                </td>
                                                <td align="right"> 
                                                    @if($payment->type == 2)
                                                    TK {{ $payment->payment_total }}
                                                    @endif
                                                </td>
                                                <td align='right'>TK  
                                                    <?php
                                                        $debit =  $payment->payment_total;

                                                        if ($payment->type == 1) {
                                                            echo $tbalance += $debit;
                                                        }
                                                        elseif ($payment->type == 2) {
                                                            echo $tbalance -= $debit;
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td colspan="2" align="right"><b>Grand Total:</b></td>
                                            <td align="right"><b>TK {{ $totalInvoice }}</b>
                                            </td>
                                            <td align="right"><b>TK  {{ $received }}</b>
                                            </td>
                                            <td align="right"><b>TK  {{ $totalInvoice - $received }}</b></td>
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

    <script type="text/javascript">
        function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

    </script>