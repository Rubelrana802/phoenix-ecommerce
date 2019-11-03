@extends('admin.master')

@section('title')
  Update Tax
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Tax Edit</h1>
            <small>Tax Edit</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Tax</a></li>
                <li class="active">Tax Edit</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <!-- New customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Tax Edit </h4>
                        </div>
                	</div>
                	<form method="post" action="{{ route('tax.update', $tax->id) }}" class="form-vertical" id="Tax_update" enctype="multipart/form-data" accept-charset="utf-8">
					@csrf

                    <div class="panel-body">
                    	<div class="form-group row">
                            <label for="Tax_name" class="col-sm-3 col-form-label">Tax Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="tax_name" id="tax_name" type="text" placeholder="Tax Name"  required="" value="{{ $tax->tax }}">
                            </div>
                        </div>

                        <input type="hidden" value="{{ $tax->id }}" name="tax_id">
						<input type="hidden" name="_method" value="PUT">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-Customer" class="btn btn-success btn-large" name="add-Customer" value="Save Changes" />
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>
@endsection
