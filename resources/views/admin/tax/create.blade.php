@extends('admin.master')

@section('title')
  Add Taxes
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Tax</h1>
            <small>Add new tax</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Tax</a></li>
                <li class="active">Add Tax</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                      <a href="{{ url('/admin/tax') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Tax </a>
                
                </div>
            </div>
        </div>

        <!-- New Tax -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add Tax </h4>
                        </div>
                    </div>
                    <form action="{{ route('tax.store') }}" class="form-vertical" id="insert_Tax" method="post" accept-charset="utf-8">
                    <div class="panel-body">
                    	 @method('POST')
					@csrf
                        <div class="form-group row">
                            <label for="Tax_name" class="col-sm-3 col-form-label">Enter Tax <i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input class="form-control" name ="tax" id="tax" type="text" placeholder="Enter Tax"  required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-customer" class="btn btn-success btn-large" name="add-customer" value="Save" />
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>
<!-- End Tax -->

@endsection
  
