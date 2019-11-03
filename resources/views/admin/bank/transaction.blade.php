@extends('admin.master')

@section('title')
  Transaction Bank
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Bank Transaction</h1>
            <small>Bank Transaction</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Bank</a></li>
                <li class="active">Bank Transaction</li>
            </ol>
        </div>
    </section>

    <section class="content">
         <!-- Alert Message -->
                <div class="row">
            <div class="col-sm-12">
                <div class="column">
                	<a href="{{ route('bank.add') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add New Bank </a>
                	<a href="{{ route('bank.manage') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Manage Bank </a>
                </div>
            </div>
        </div>

        <!-- New bank -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Bank Transaction </h4>
                        </div>
                    </div>
                    <form action="{{ route('bank.transaction') }}" class="form-vertical" id="validate" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
					
                    <div class="panel-body">
						<div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label">Date <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control datepicker" name="date" id="date" required="" placeholder="Date" value="2019-09-09" tabindex="1"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account_type" class="col-sm-3 col-form-label">Account Type <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="account_type" name="account_type" tabindex="2">
                                    <option value="1">Debit (+)</option>
                                    <option value="2">Credit (-)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label">Bank Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="bank_id" tabindex="3" required="">
                                	<option value="">Select One</option>	
                                	@foreach($banks as $bank)
                                    	<option value="{{ $bank->id }}">{{ $bank->bank_name }}</option>
                                	@endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="withdraw_deposite_id" class="col-sm-3 col-form-label">Withdraw / Deposite ID <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="withdraw_deposite_id" id="withdraw_deposite_id" required="" placeholder="Withdraw / Deposite ID" tabindex="5"/>
                            </div>
                        </div>        

                        <div class="form-group row">
                            <label for="ammount" class="col-sm-3 col-form-label">Amount <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="ammount" id="ammount" required="" placeholder="Amount" tabindex="5"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Description </label>
                            <div class="col-sm-6">
                                <textarea class="form-control" placeholder="Description" name="description" tabindex="4"></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="reset" class="btn btn-danger" value="Reset" tabindex="6"/>
                                <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="Save" tabindex="7"/>
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>

@endsection
  
