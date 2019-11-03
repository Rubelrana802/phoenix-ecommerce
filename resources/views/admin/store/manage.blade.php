@extends('admin.master')

@section('title')
  Manage Store
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Manage Store</h1>
            <small>Manage your Store</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Store</a></li>
                <li class="active">Manage Store</li>
            </ol>
        </div>
    </section>


    <section class="content">
        
        <div class="column">
            <a href="{{ url('admin/store/add') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Store </a>         
        </div>

        <!-- Manage Tax -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Manage Store</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.</th>
                                        <th>Store Name</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($stores as $row)
                                    <tr>
                                        <td class="text-center">{{ ++$i }}</td>
                                        <td>{{ $row->store_name }}</td>
                                        <td>{{ $row->mobile }}</td>
                                        <td>{{ $row->address }}</td>
                                        <td class="text-center">
                                            
                                            <a class="btn btn-info btn-sm" href="{{ url('/admin/store/edit/'.$row->id) }}"><i style="font-size: 16px;" class="fa fa-pencil" data-toggle="tooltip" title="Update"></i></a>
                                            
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