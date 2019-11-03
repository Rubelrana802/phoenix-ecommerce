@extends('admin.master')

@section('title')
  Manage Purchase
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Manage Purchase</h1>
            <small>Manage your purchase</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Purchase</a></li>
                <li class="active">Manage Purchase</li>
            </ol>
        </div>
    </section>


    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                     <a href="{{ route('purchase.add') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Purchase </a>
                </div>
            </div>
        </div>

        <!-- Manage Tax -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Manage Purchase</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Invoice No</th>
                                        <th>Supplier Name</th>
                                        <th>Supplier Mobile</th>
                                        <th>Purchase Date</th>
                                        <th>Total Amount</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($purchases as $row)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td><a href="{{ url('/admin/report/purchase/invoice/'.$row->purchase_invoice_no) }}">{{ $row->purchase_invoice_no }}</a></td>
                                        <td><a href="{{ url('/admin/report/supplier/wise/'.$row->supplier_id )}}">{{ $row->supplier_name }} </a></td>
                                        <td>{{ $row->mobile }}</td>
                                        <td>{{ $row->purchase_date }}</td>
                                        <td class="text-right">৳ {{ $row->grand_total_amount }}</td>
                                        
                                        <td class="text-center">
                                            
                                            <a class="btn btn-info btn-sm" href="{{ url('/admin/purchase/edit/'.$row->id) }}"><i style="font-size: 16px;" class="fa fa-pencil" data-toggle="tooltip" title="Update"></i></a>
                                            
                                            <a data-id="{{ $row->id }}" data-route="#" class="deleteRecord btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>                                                 
                                    </tr>
                                    @endforeach                                      
                                </tbody>
                                <tfooter><tr><td class="text-center" colspan="4"></td><td><b>Total :</b></td><td class="text-right"><b>৳ {{ $total->total }}</b>
                                </td><td></td></tr></tfooter>
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