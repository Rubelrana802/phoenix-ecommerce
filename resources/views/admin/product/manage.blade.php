@extends('admin.master')

@section('title')
  Manage Product
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Manage Product</h1>
            <small>Manage your product</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Product</a></li>
                <li class="active">Manage Product</li>
            </ol>
        </div>
    </section>


    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                     <a href="{{ route('product.add') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Product </a>
                </div>
            </div>
        </div>

        <!-- Manage Tax -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Manage Product</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Product Name</th>
                                        <th>Model</th>
                                        <th>Supplier Name</th>
                                        <th>Supplier Price</th>
                                        <th>Sale Price</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($product as $row)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td> <a href="{{ url('/admin/report/product/wise/'.$row->id) }}"> {{ $row->product_name }} </a> </td>
                                        <th>{{ $row->model }}</th>
                                        <th>{{ $row->supplier_name }}</th>
                                        <th class="text-right">&#x9f3; {{ $row->supplier_price }}</th>
                                        <th class="text-right">&#x9f3; {{ $row->sale_price }}</th>
                                        <th class="text-center"> <img style="width: 30px; height: 30px;" src="{{ asset('public/admin/product/images/'.$row->image) }}" alt=""></th>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Barcode"><i class="fa fa-barcode" aria-hidden="true"></i></a>

                                            <a class="btn btn-info btn-sm" href="{{ url('/admin/product/edit/'.$row->id) }}"><i style="font-size: 16px;" class="fa fa-pencil" data-toggle="tooltip" title="Update"></i></a>
                                            
                                            <a data-id="{{ $row->id }}" data-route="#" class="deleteRecord btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>                                                 
                                    </tr>
                                    @endforeach                                      
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Manage product End -->

<!-- Delete product ajax code -->
<script type="text/javascript">


    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $(".deleteRecord").click(function(e){
        e.preventDefault();
        var id = $(this).data("id");
        var route = $(this).data("route");
         var x = confirm("Are You Sure,Want to Delete ?");
        if (x == true) {

            $.ajax(
            {
                url: route,
                type: 'DELETE',
                data: {
                    "id": id,    
                },
                success: function (data){
                   location.reload(true);
                },
                 error: function(err){
                  }
            });
        }
    });
});
    
</script>

@endsection