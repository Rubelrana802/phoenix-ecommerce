@extends('admin.master')

@section('title')
  Update Category
@endsection

@section('content')

<link href="{{ asset('public/admin') }}/assets/plugins/summernote/summernote.css" rel="stylesheet" type="text/css"/>
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Product Edit</h1>
            <small>Edit your product</small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Product</a></li>
                <li class="active">Product Edit</li>
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
                            <h4>Product Edit </h4>
                        </div>
                	</div>
                	<form method="post" action="{{ route('product.update') }}" class="form-vertical" id="product_update" enctype="multipart/form-data" accept-charset="utf-8">
					@csrf
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-3 col-form-label">Product Name <span class="color-red">*</span></label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="product_name" autofocus type="text" id="product_name" required="" value="{{ $product->product_name }}" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-3 col-form-label">Category <span class="color-red">*</span></label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" id="category_id" name="category_id" style="width: 100%" required="">
                                            <option value="">Select One</option>                                          

                                            <?php echo $categories_drop_down; ?>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}" {{ $product->category_id ==  $cat->id ? 'selected' : '' }} >{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="details" class="col-sm-2 col-form-label">Details</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="summernote"  name="description" id="details" rows="3">{{ $product->details }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="unit" class="col-sm-3 col-form-label">Unit <span class="color-red">*</span></label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" id="unit" required="" name="unit_id" style="width: 100%">
                                            <option value="">Select One</option>
                                            @foreach ($units as $unit)
                                                <option value="{{ $unit->id }}" {{ $product->unit_id == $unit->id ? 'selected' : ''  }}>{{ $unit->unit_name }}</option>
                                            @endforeach   
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="brand" class="col-sm-3 col-form-label">Brand</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" id="brand" name="brand_id" style="width: 100%">
                                            <option value="">Select One</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : ''  }}>{{ $brand->brand_name }}</option>
                                            @endforeach                   
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="type" class="col-sm-3 col-form-label">Type </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="type" class="form-control" id="type" value="{{ $product->type }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="tag" class="col-sm-3 col-form-label">Tag</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" data-role="tagsinput" name="tag" value="{{ $product->tag }}">
                                    </div>
                                </div>
                            </div>
                                        
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="onsale" class="col-sm-3 col-form-label">Offer <span class="color-red">*</span></label>
                                    <div class="col-md-9">
                                        <select class="form-control select2" id="onsale" name="onsale" style="width: 100%" required="">
                                            <option value="">Select One</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row onsale_price" style="display: none;">
                                    <label for="onsale_price" class="col-sm-3 col-form-label">Offer Price <i class="text-danger">*</i></label>
                                    <div class="col-md-9">
                                        <input class="form-control text-right" name="offer_price" type="number" required="" value="{{ $product->offer_price }}" min="0" id="onsale_price">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="best_sale" class="col-sm-3 col-form-label">Best Sale</label>
                                    <div class="col-md-9">
                                        <select class="form-control select2" id="best_sale" name="best_sale" style="width: 100%">
                                            <option value="">Select One</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="best_sale" class="col-sm-3 col-form-label">Sell Price <span class="color-red">*</span></label>
                                    <div class="col-md-9">
                                        <input class="form-control text-right" name="sale_price" type="number" required="" value="{{ $product->sale_price }}" value="" min="0" id="sell_price">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="best_sale" class="col-sm-3 col-form-label">Supplier Price <span class="color-red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="number" tabindex="4" class="form-control text-right" name="supplier_price" value="{{ $product->supplier_price }}"  required="" min="0" id="supplier_price"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="best_sale" class="col-sm-3 col-form-label">Model</label>
                                    <div class="col-md-9">
                                        <input type="text" tabindex="5" class="form-control" name="model"  value="{{ $product->model }}"  id="model"/>
                                    </div>
                                </div>
                            </div>
                        

                            <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="image_thumb" class="col-sm-3 col-form-label">Image <span class="color-red">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" class="form-control" id="image_thumb">
                                            <img style="width: 60px; height: 60px;" src="{{ asset('public/admin/product/images/'.$product->image) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="product_id" value="{{ $product->id }}" >

                            <br>

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


    <script src="{{ asset('public/admin') }}/assets/plugins/summernote/summernote.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote').summernote({
                    height: 250, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.onsale_price').css({'display': 'none'});
            $('#onsale').on('change', function() {
                var onsale = $('#onsale option:selected').val();
                if (onsale == 1) {
                    $('.onsale_price').css({'display': 'block'});
                }else {
                    $('.onsale_price').css({'display': 'none'});
                }
            });
        });

        //Form validate
         $("#commentForm").validate();

</script>

@endsection