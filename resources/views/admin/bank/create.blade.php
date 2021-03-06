@extends('admin.master')

@section('title')
  Add Bank
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add New Bank</h1>
            <small>Add New Bank</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Bank</a></li>
                <li class="active">Add New Bank</li>
            </ol>
        </div>
    </section>

    <section class="content">
         <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                <a href="{{ route('bank.transaction.add') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Bank Transaction </a>
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
                            <h4>Add New Bank </h4>
                        </div>
                    </div>
                    <form action="{{ route('bank.save') }}" class="form-vertical" id="validate" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf

                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label">Bank Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="bank_name" id="bank_name" required="" placeholder="Bank Name" tabindex="1"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ac_name" class="col-sm-3 col-form-label">A/C Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="ac_name" id="ac_name" required="" placeholder="A/C Name" tabindex="2"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ac_no" class="col-sm-3 col-form-label">A/C Number <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="ac_no" id="ac_no" required="" placeholder="A/C Number" tabindex="3"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="branch" class="col-sm-3 col-form-label">Branch <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="branch" id="branch" required="" placeholder="Branch" tabindex="4"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="signature_pic" class="col-sm-3 col-form-label">Signature Picture</label>
                            <div class="col-sm-6">
                                <span class="input-group-addon btn default btn-file">
                                    <input type="file" name="image">
                                </span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="reset" class="btn btn-danger" value="Reset" tabindex="5"/>
                                <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="Save" tabindex="6"/>
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>

@endsection
  
