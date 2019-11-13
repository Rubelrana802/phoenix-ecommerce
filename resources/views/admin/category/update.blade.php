@extends('admin.master')

@section('title')
  Update Category
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Category Edit</h1>
            <small>Category Edit</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Category</a></li>
                <li class="active">Category Edit</li>
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
                            <h4>Category Edit </h4>
                        </div>
                	</div>
                	<form method="post" action="{{ route('category.update', $category->id) }}" class="form-vertical" id="category_update" enctype="multipart/form-data" accept-charset="utf-8">
					@csrf

                    <div class="panel-body">
                    	<div class="form-group row">
                            <label for="category_name" class="col-sm-3 col-form-label">Category Name <i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input class="form-control" name ="category_name" id="category_name" type="text" placeholder="Category Name"  required="" value="{{ $category->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category_name" class="col-sm-3 col-form-label"> Parent category <i class="text-danger"></i></label>
                            <div class="col-sm-5">
                                <select class="form-control" name="parent_id" id="parent_id">
                                    <option value="">Select One</option>
                                    @foreach ($categorys as $cat)
                                            <option value="{{ $cat->id }}" {{ $cat->id ==  $cat->parent_id ? 'selected' : '' }} >{{ $cat->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>


                       <div class="form-group row">
                            <label for="status" class="col-sm-3 col-form-label">Status <i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <select class="form-control" name="status" id="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <input type="hidden" value="{{ $category->id }}" name="category_id">
						<input type="hidden" name="_method" value="PUT">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-5">
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
