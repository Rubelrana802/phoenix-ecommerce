
@extends('admin.master')

@section('title')
    Update Purchase
@endsection

@section('content')
        <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Purchase</h1>
            <small>Add new purchase</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Purchase</a></li>
                <li class="active">Add Purchase</li>
            </ol>
        </div>
    </section>


    <section class="content">
        <!-- Alert Message -->
        
        <!-- Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Add Purchase</h4>
                    </div>
                </div>

            <div class="panel-body">
            <form action="{{route('purchase.update')}}" class="form-vertical" id="insert_purchase" name="insert_purchase" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="novalidate">
                {{csrf_field()}}
            <div class="row">
                          <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Purchase Date                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="2" class="form-control datepicker" name="purchase_date" value="{{ date('Y-m-d') }}" id="date" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">Payment Type <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="paytype" class="form-control" required=""  onchange="bank_paymet(this.value)">
                                            <option value="">Select Payment Option</option>
                                            <option value="1">Cash Payment</option>
                                            <option value="2">Due Payment</option>
                                            <option value="3">Bank Payment</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="supplier_code" class="col-sm-4 col-form-label">Supplier Name <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="supplier_id" id="supplier_id" class="form-control" required="">
                                            <option value="">Select One</option>
                                            @foreach ($suppliers as $supplier)
                                                <option value="{{$supplier->id}}" {{$product_purchase->supplier_id == $supplier->id ? 'selected' : ''}} >{{$supplier->supplier_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-6" id="name">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">Supplier Mobile<i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100"  name="Mobile" class=" form-control" placeholder='Mobile' id="Mobile" tabindex="1" readonly/>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-6" id="">
                                <div class="form-group row">
                                    <label for="address" class="col-sm-4 col-form-label">Address <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100"  name="address" class=" form-control" placeholder='Address' id="address" tabindex="1" readonly/>
                                    </div>
                                </div>
                            </div>
                              <div class="col-sm-6" id="location">
                                <div class="form-group row">
                                    <label for="location" class="col-sm-4 col-form-label">Store <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="store_id" id="warehouse_code" class="form-control" required="">
                                            @foreach($stores as $store)
                                                <option value="{{$store->id}}" {{$product_purchase->store_id == $store->id ? 'selected' : ''}} >{{$store->store_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="previous" class="col-sm-4 col-form-label">Credit <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100"  name="previous" class=" form-control" placeholder='Credit' id="previous" tabindex="1" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="bank_div" style="display: none;">
                                <div class="form-group row">
                                    <label for="bank" class="col-sm-4 col-form-label">Bank <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                       <select style="width: 317px;" name="bank_id" class="form-control" required="" id="bank_id">
                                            <option value="">Select One</option>
                                            @foreach($banks as $bank)
                                                <option value="{{$bank->id}}" {{$product_purchase->bank_id == $bank->id ? 'selected' : ''}} >{{ $bank->bank_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
          
         <hr style="border-top: 3px double #8c8b8b;">
                <div class="text-center"><h2>Supplier Invoice No : {{$product_purchase->purchase_invoice_no}}</h2></div>
                
                        <div class="table-responsive" style="margin-top: 10px">
                    <table class="table table-bordered table-hover" id="purchaseTable">
                        <thead>
                             <tr>
                                 <th class="text-center" width="20%">Select Item <i class="text-danger">*</i></th> 
                                      <th class="text-center">Stock</th>
                                    <th class="text-center">Qnty <i class="text-danger">*</i></th>
                                    <th class="text-center">Rate<i class="text-danger">*</i></th>
                                    <th class="text-center">Total</th>
                                    <!-- <th class="text-center">Action</th> -->
                                </tr>
                        </thead>
                        <tbody id="table">
                            @foreach($product_purchase_details as $purchase_details)
                            <tr>
                                <td class="span3 supplier">
                                    <select readonly="readonly" class="form-control  products_id" id="products_id_0" name="products_id[]" >
                                        @foreach ($products as $product)
                                            @if($purchase_details->product_id == $product->id)
                                                <option value="{{$product->id}}" >{{$product->product_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>                              
                                </td>                    
                               <td class="wt">
                                    <input type="text" id="available_quantity_0"  class="form-control text-right stock_ctn_1" placeholder="0.00" readonly="" autocomplete="off">
                                </td>

                                <td class="text-right">
                                    <input type="text" name="product_quantity[]" required id="cartoon_1" class="form-control quantity text-right "  placeholder="0.00" value="{{$purchase_details->quantity}}" min="0" tabindex="6" autocomplete="off">
                                </td>

                                <td class="test">
                                    <input type="text" name="product_rate[]" required id="product_rate_1" class="form-control  product_rate text-right" placeholder="0.00" value="{{$purchase_details->rate}}" min="0" tabindex="7" autocomplete="off">
                                </td>

                                <td class="text-right">
                                        <input class="form-control total_price text-right" type="text" name="total_price[]" id="total_price_1" value="{{$purchase_details->total_amount + $purchase_details->discount}}" readonly="readonly" autocomplete="off">
                                </td>

                                <!-- <td>
                                    <button style="text-align: right;" class="btn btn-danger red" type="button" value="Delete" disabled  tabindex="8" autocomplete="off">Delete</button>
                                </td> -->

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                               <td colspan="2">
                                <!-- <input type="button" id="addInput" class="btn btn-info"  value="Add New Item" tabindex="9" autocomplete="off"> -->   
                               </td>

                                <td style="text-align:right;" colspan="2"><b>Total:</b></td>
                                
                                <td class="text-right">
                                    <input type="text" id="subTotal" class="text-right form-control" name="total" value="{{$product_purchase->total_discount +$product_purchase->grand_total_amount }}" readonly="readonly" autocomplete="off">
                                </td>

                            </tr>
                            <tr>
                               
                                <td style="text-align:right;" colspan="3"><b>Cash Disount %</b>
                                    @php
                                    $discount_per = 0;
                                   $total =  $product_purchase->total_discount +  $product_purchase->grand_total_amount;
                                   
                                    @endphp
                                    @if ($total != 0)
                                        @php
                                            $discount = $product_purchase->total_discount /$total ;
                                            $discount_per = $discount * 100;
                                        @endphp
                                    @endif
                                </td>

                                <td>
                                    <input type="text" id="discount" name="dis_percent" class="form-control text-right" value="{{$discount_per}}"  autocomplete="off">
                                </td>

                                <td class="text-right">
                                    <input type="text" id="totalDiscount" class="text-right form-control" name="tdiscount" value="{{$product_purchase->total_discount}}" readonly="readonly" autocomplete="off">
                                </td>

                            </tr>

                            <tr>
                                <td style="text-align:right;" colspan="4"><b>Grand Total:</b>
                                </td>

                                <td class="text-right">
                                    <input type="text" id="grandTotal" class="text-right form-control" name="grand_total_price" value="{{$product_purchase->grand_total_amount}}"  readonly="readonly" autocomplete="off">
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="6"><b>In Word : :</b> <span id="inword"></span></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <input type="hidden" name="purchase_id" value="{{ $product_purchase->id }}">

                <div class="form-group row">
                    <div class="col-sm-5">
                        <input style="margin-left: 400px;" type="submit" id="add_purchase" class="btn btn-success btn-large w-md m-b-5" value="Submit" autocomplete="off">
                     </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>

<!-- Add Product End -->
@endsection

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="{{ asset('public/admin') }}/admin_js/numberconverter.js" type="text/javascript"></script>
  



<script type="text/javascript">
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var max = 1;
$(document).on("click","#addInput",function(e){
    e.preventDefault();
                       
      $('#table').append(
                        '<tr>'+
                                '<td class="span3 supplier">'+
                                       ' <select class="form-control products_id" required="" id="products_id_0" name="products_id[]" >'+
                                                '<option value="">Select One</option>  '    +                                    
                                                '@foreach ($products as $product)'+
                                                '<option value="{{$product->id}}"> {{ $product->product_name }} </option>'+
                                               ' @endforeach'+
                                               
                                           ' </select>' +                             
                               ' </td> '  +                         
                              ' <td class="wt">'+
                                        '<input type="text" id="'+max+'" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly="" autocomplete="off">'+
                                    '</td>'+
                                    '<td class="text-right">'+
                                        '<input type="text" name="product_quantity[]"  id="cartoon_1" class="form-control quantity text-right "  placeholder="0.00"   autocomplete="off" required>'+
                                    '</td>'+
                                   ' <td class="test">'+
                                        '<input type="text" name="product_rate[]"  id="product_rate_1" class="form-control  product_rate text-right" placeholder="0.00"  autocomplete="off" required>'+
                                    '</td> ' +  
                                    '<td class="text-right">'+
                                       ' <input class="form-control total_price text-right" type="text" name="total_price[]" id="total_price_1" value="0.00" readonly="readonly" autocomplete="off">'+
                                    '</td>'+
                                    '<td>'+
                                        '<button style="text-align: right;" class="btn btn-danger removeInputs red" type="button" value="Delete"   tabindex="8" autocomplete="off">Delete</button>'+
                                    '</td>'+
                            '</tr>'
      );

$("#table select").each(function() {
    $(this).select2();
});



    max ++;
   
})
</script>


<script src="{{ asset('public/admin') }}/admin_js/purchase.js" type="text/javascript"></script>

