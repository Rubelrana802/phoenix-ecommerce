@extends('admin.master')

@section('title')
  Bank Ledger
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Bank Ledger</h1>
            <small>Bank Ledger</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Bank</a></li>
                <li class="active">Bank Ledger</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('bank.add') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add New Bank </a>
                    <a href="{{ route('bank.transaction.add') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-plus"> </i> Bank Transaction </a>
                    <a href="{{ route('bank.manage') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Manage Bank </a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Bank Ledger</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                    
                        <div class="text-right">
                            <button  class="btn btn-warning text-right" href="#" onclick="printDiv('printableArea')">Print</button>
                        </div>
                        
                        <div id="printableArea" style="margin-left:2px;">
                            <div class="text-center">                                   
                                    <h3>{{ $bank->bank_name }}</h3>
                                    <h5>A/C Number : {{ $bank->account_number }}</h5>
                                    <h5 >Branch : {{ $bank->branch  }} </h5>
                                    <span> Print Date: {{ date('d/m/Y H:i:s', time() - 6*3600) }} </span>
                            </div>
                

                            <div class="table-responsive" style="margin-top: 10px;">
                                <table id="" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Withdraw / Deposite ID</th>
                                            <th class="text-center">Debit (+)</th>
                                            <th class="text-center">Credit (-)</th>
                                            <th class="text-center">Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $tbalance = 0; ?>
                                        @foreach($transactions as $transaction)                               
                                            <tr>
                                                <td>{{ $transaction->date }}</td>
                                                <td>{{ $transaction->details }}</td>
                                                <td align="center">{{ $transaction->deposite_id }}</td>
                                                <td align="right">{{ $websetting->currency}} {{ $transaction->dr }}</td>
                                                <td align="right">{{ $websetting->currency}} {{ $transaction->cr }}</td>
                                                <td align="right">{{ $websetting->currency}} <?php $chkbala = $transaction->cr - $transaction->dr;  echo $tbalance += $chkbala; ?>
                                                                </td>
                                            </tr>
                                        @endforeach            
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td colspan="3" align="right"><b>Grand Total:</b></td>
                                            <td align="right"><b>{{ $websetting->currency}} {{ $debit->debit }}</b></td>
                                            <td align="right"><b>{{ $websetting->currency}} {{ $credit->credit }}</b></td>
                                            <td align="right"><b>{{ $websetting->currency}} {{ $debit->debit-$credit->credit }}</b></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="text-center">
                                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        //Update banks_ledger
            $("#banks_ledger").validate();
    </script>

@endsection


    <script type="text/javascript">

        function printDiv(divName) {

        var printContents = document.getElementById(divName).innerHTML;

        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        // document.body.style.marginTop="-45px";

        window.print();

        document.body.innerHTML = originalContents;

        }

        

    </script>
  
