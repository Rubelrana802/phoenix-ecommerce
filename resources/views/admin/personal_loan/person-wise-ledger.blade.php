@extends('admin.master')

@section('title')
  Person Ledger
@endsection

@section('content')
<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Person Ledger</h1>
            <small>Person Ledger</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Personal Loan</a></li>
                <li class="active">Person Ledger</li>
            </ol>
        </div>
    </section>

    <section class="content">


        <div class="row">
            <div class="col-sm-12">
                <div class="column">

                    <a href="{{ route('person.add') }}" class="btn btn-warning m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Person </a>

                    <a href="{{ route('person.loan') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Loan </a>

                    <a href="{{ route('person.payment') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Payment </a>

                    <a href="{{ route('person.manage') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Loan </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 

                        <form action="{{ route('person.personwise.search') }}" class="form-vertical" id="person_ledger" method="post" accept-charset="utf-8">
                        	@csrf

	                        <div class="form-group row">
	                            <label for="to_date" class="col-sm-3 col-form-label">Name: <i class="text-danger">*</i></label>
	                            <div class="col-sm-6">
	                                <select required class="form-control" name="person_id" id="name" tabindex="1">
                                    @foreach($persons as $person)
                                        <option value="{{ $person->id }}">{{ $person->person_name }} | {{ $person->person_phone }}</option>
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
	                                <button type="submit" class="btn btn-primary">Search</button>
	                                <a  class="btn btn-warning" href="#" onclick="printDiv('printableArea')">Print</a>
	                            </div>
	                        </div>
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
                            <h4>Person Ledger</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="printableArea" style="margin-left:2px;">
                            <div class="text-center">
                                <b><h3> {{ $person_info->person_name }} </h3></b>
                                <h4>Address :  {{ $person_info->person_address }}</h4>
                                <h4 >Phone : {{ $person_info->person_phone }} </h4>
                                <h4> Print Date: {{ date('Y-m-d h:i:s A') }} </h4>
                            </div>

                            <div class="table-responsive" style="margin-top: 10px;">
                                <table id="" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Date</th>
                                            <th class="text-left">Details</th>
                                            <th class="text-right">Debit</th>
                                            <th class="text-right">Credit</th>
                                            <th class="text-right">Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $tbalance = 0; ?>
                                    	@foreach($person_ledger as $ledger)
	                                    	<tr>
	                                            <td class="text-left">{{ $ledger->date }}</td>
	                                            <td align="left">{{ $ledger->details }}</td>
	                                            <td style="text-align: right;">{{ $websetting->currency}} {{ $ledger->debit }}</td>
	                                            <td align="right">{{ $websetting->currency}} {{ $ledger->credit }}</td>
	                                            <td align="right">{{ $websetting->currency}}
                                                    <?php $chkbala = $ledger->debit - $ledger->credit;  echo $tbalance += $chkbala; ?>
                                                </td>
	                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"  align="right"><b>Grand Total:</b></td>
                                            <td align="right"><b>{{ $websetting->currency}} {{ $total_debit->debit }}</b></td>
                                            <td align="right"><b>{{ $websetting->currency}} {{ $total_credit->credit }}</b></td>
                                            <td align="right"><b>{{ $websetting->currency}} {{ $total_debit->debit - $total_credit->credit }}</td>
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