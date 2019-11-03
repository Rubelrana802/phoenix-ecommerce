@extends('admin.master')

@section('title')
  Add Category
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Category</h1>
            <small>Add new category</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Category</a></li>
                <li class="active">Add Category</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                      <a href="{{ url('/admin/category') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Category </a>
                
                </div>
            </div>
        </div>

        <!-- New Category -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add Category </h4>
                        </div>
                    </div>
                    <form action="{{ route('category.store') }}" class="form-vertical" id="insert_category" method="post" accept-charset="utf-8">
                    <div class="panel-body">
                    	 @method('POST')
					@csrf
                        <div class="form-group row">
                            <label for="category_name" class="col-sm-3 col-form-label">Category Name <i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input class="form-control" name ="category_name" id="category_name" type="text" placeholder="Category Name"  required="">
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
<!-- End Category -->

@endsection
  
