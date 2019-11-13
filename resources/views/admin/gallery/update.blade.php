@extends('admin.master')

@section('title')
  Image Edit
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Image Edit</h1>
            <small>Image Edit</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#"></a></li>
                <li class="active">Image Edit</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <!--Edit image -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Image Edit </h4>
                        </div>
                    </div>
                  <form action="{{ route('gallery.update') }}" class="form-vertical" id="validate" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="panel-body">
                        <div class="form-group row">
                            <label for="product_name" class="col-sm-3 col-form-label">Product Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="product_id" id="product_id">
                                    <option value=""> Select One</option> 
                                    @foreach($product as $product)
                                        <option value="{{ $product->id }}" {{ $product_gallery->product_id == $product->id ? 'selected' : '' }}>{{ $product->product_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label">Image <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="image" id="image" type="file" >
                                <img style="width: 80px; height: 60px;" src="{{ asset('public/admin/product/images/'.$product_gallery->image) }}" alt="">
                            </div>
                        </div>
                        <input type="hidden" name="product_gallery_id" value="{{ $product_gallery->id }}">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-image" class="btn btn-success  btn-large" name="add-image" value="Save" />
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>

@endsection
