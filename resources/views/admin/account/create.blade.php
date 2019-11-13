@extends('admin.master')

@section('title')
  Create Accounts
@endsection

@section('content')

        <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Create Accounts</h1>
            <small>Create Accounts</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Bank</a></li>
                <li class="active">Create Accounts</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                
                  <a href="{{ route('account.manage') }}" class="btn btn-success color4 m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Account</a>

                </div>
            </div>
        </div>

        
        <!-- New Account -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Create Accounts </h4>
                        </div>
                    </div>
                    <form action="{{ route('account.save') }}" class="form-vertical" id="validate" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        @csrf
                    <div class="panel-body">
                        <div class="form-group row">
                            <label for="account_name" class="col-sm-3 col-form-label">Account Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" name="account_name" placeholder="Account Name" id="account_name" required="" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account_type" class="col-sm-3 col-form-label">Account Type <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select name="account_type" class="form-control" id="account_type"> 
                                    <option value="1">Credit (-) </option>
                                    <option value="2">Debit (+) </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-deposit" class="btn btn-success color4" name="add-deposit" value="Create Accounts" />
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>
@endsection
  
