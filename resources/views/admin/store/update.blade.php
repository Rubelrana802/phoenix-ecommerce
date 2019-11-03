@extends('admin.master')

@section('title')
  Update Store
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Store Edit</h1>
            <small>Store Edit</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Store</a></li>
                <li class="active">Store Edit</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <!-- New Store -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Store Edit </h4>
                        </div>
                	</div>
                	<form method="post" action="{{ route('store.update') }}" class="form-vertical" id="category_update" enctype="multipart/form-data" accept-charset="utf-8">
					@csrf
                    
                        <div class="panel-body">

                        <div class="form-group row">
                            <label for="store_name" class="col-sm-3 col-form-label">Store Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="store_name" id="store_name" type="text"  required="" tabindex="1" value="{{ $store->store_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label">Store Mobile <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="mobile" id="mobile" type="text" min="0" required="" tabindex="3" value="{{ $store->mobile }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label">Store Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" tabindex="4"> {{ $store->address }} </textarea>
                            </div>
                        </div>
                 

                        <input type="hidden" value="{{ $store->id }}" name="store_id">
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
