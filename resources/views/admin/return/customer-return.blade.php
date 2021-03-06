@extends('admin.master')
@section('title')
  Customer Return
@endsection

@section('content')

<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Customer Return </h1>
            <small>Customer Return</small>

        </div>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Customer Return</h4>
                        </div>
                    </div>
                    <form action="{{ route('submit.return.sell.product') }}" class="form-vertical" id="supplier_return" method="post" accept-charset="utf-8">
                        @csrf
                    <div class="panel-body">
                        <div class="row">
                          <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Sale Date :</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="purchase_date" class=" form-control"  id="purchase_date" value="{{ $invoice->date }}" tabindex="1" readonly="" autocomplete="off" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">Payment Type :<i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="payment_type" class="form-control" required=""  onchange="bank_paymet(this.value)">
                                            <option value="">Select Payment Option</option>
                                            <option value="1">Cash Payment</option>
                                            <!-- <option value="2">Due Payment</option> -->
                                            <option value="3">Bank Payment</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="col-sm-6" id="name">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">Customer Name :<i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <select readonly="readonly" class="form-control" id="customer_id" name="customer_id" tabindex="3">
                                            @foreach ($customer_info as $customer)
                                                <option value="{{$customer->id}}" {{$invoice->customer_id == $customer->id ? 'selected' : ''}} >{{$customer->customer_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>



                             <div class="col-sm-6" id="">
                                <div class="form-group row">
                                    <label for="address" class="col-sm-4 col-form-label">Mobile :<i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        @php
                                            $mobile = DB::table('customers')
                                                ->join('invoices', 'customers.id', '=', 'invoices.customer_id')
                                                ->select('customers.*', 'invoices.*')
                                                ->where('sell_invoice_no', $request->invoice_id)
                                                ->first();
                                        @endphp
                                        <input type="text" size="100"  class=" form-control" placeholder="Mobile" id="mobile" value="{{ $mobile->mobile }}" tabindex="1" readonly="" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6" id="location">
                                <div class="form-group row">
                                    <label for="location" class="col-sm-4 col-form-label">Store :</label>
                                    <div class="col-sm-8">
                                       <select readonly="readonly" class="form-control" id="store_id" name="store_id" tabindex="3">
                                            @foreach ($stores as $store)
                                                <option value="{{ $store->id }}" {{ $invoice->store_id == $store->id ? 'selected' : '' }} >{{ $store->store_name }}</option>
                                            @endforeach
                                        </select>
                                   </div>
                                </div>
                            </div>                            

                            <div class="col-sm-6" id="bank_div" style="display: none;">
                                <div class="form-group row">
                                    <label for="bank" class="col-sm-4 col-form-label">Bank :<i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                       <select style="width: 317px;" name="bank_id" class="form-control" required="" id="bank_id">
                                            <option value="">Select One</option>
                                            @foreach ($banks as $bank)
                                                <option value="{{$bank->id}}">{{$bank->bank_name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" value="{{ $invoice->id }}" name="invoice_id">
                        
                    <hr style="border-top: 3px double #8c8b8b;">
                    <div class="text-center"><h2>Customer Return </h2></div>
                        <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover" id="purchase">
                                <thead>
                                    <tr>
                                        <th class="text-center">Product Name <i class="text-danger"></i></th>
                                        <th class="text-center">Sold Qty</th>
                                        <th class="text-center">Return Qty  <i class="text-danger">*</i></th>
                                        <th class="text-center">Rate <i class="text-danger"></i></th>

                                        <th class="text-center">Total</th>
                                        <th class="text-center">Check Return <i class="text-danger">*</i></th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">
                                    @foreach ($invoice_details as $details)
                                    <tr>
                                        <td class="span3 supplier">
                                            <select readonly="readonly" class="form-control products_id" id="products_id_0" name="product_id[]" >
                                                @foreach ($products as $product)
                                                    <option value="{{$product->id}}" {{ $details->product_id == $product->id ? 'selected' : '' }}>{{ $product->product_name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="wt">
                                            <input readonly="" type="text" name="sold_qty[]"  id="sold_qty" class="form-control purchase_quantity text-right "   value="{{ $details->quantity }}" autocomplete="off">
                                        </td>

                                        <td class="text-right">
                                            <input type="text" name="sale_return_quantity[]" required="" id="total_qntt" class="form-control purchase_return_quantity text-right "   value="" autocomplete="off">
                                        </td>

                                        <td class="test">
                                        <input type="text" name="sell_total_price[]"  id="price_item" class="form-control  purchase_rate text-right" value="{{ $details->rate }}" readonly="readonly" autocomplete="off">
                                        </td>  

                                        <td class="text-right">
                                            <input class="form-control purchase_total_price text-right" type="text" name="purchase_total_price[]" id="total_price" value="" readonly="readonly" autocomplete="off">
                                        </td>

                                    <td>
                                        <input type="checkbox" class="form-control" name="rtn[]" onclick="checkboxcheck()" id="check_id_1" value="1" class="chk" autocomplete="off"><label for="check_id_1"></label>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="4" style="text-align:right;"><b>Total Amount:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="purchaseSubTotal" class="text-right form-control" name="subtotal" value="" readonly="readonly" autocomplete="off">
                                        </td>                                        
                                    </tr>

                                    <tr>
                                        <td style="text-align:right;" colspan="3"><b>Cash Disount %</b></td>
                                        <td><input type="text" id="purchase_product_dis_percent" name="discount_per" class="form-control text-right" value="{{ $invoice->discount_percentage }}" readonly="readonly"  autocomplete="off"></td>
                                        <td class="text-right">
                                            <input type="text" id="purchaseTotalDiscount" class="text-right form-control" name="total_dicount" value="" readonly="readonly" autocomplete="off">
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="4" style="text-align:right;"><b>Net Return Amount:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="purchaseGrandTotal" class="text-right form-control" name="grand_total" value="" readonly="readonly" autocomplete="off">
                                        </td>                                        
                                    </tr>

                                </tfoot>
                            </table>
                        </div>

                         <div class="form-group row">
                            <label for="example-text-input" class=" col-form-label"></label>
                            <div class="col-sm-12 text-right">
                                <input type="submit" id="add_invoice" class="btn btn-success btn-large" name="pretid" value="Return" tabindex="9" autocomplete="off" >
                                
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>


<style type="text/css">
    .btn:focus {
      background-color: #6A5ACD;
    }
</style>


<script type="text/javascript">
      function bank_paymet(val){
        if(val==3){
           var style = 'block'; 
         //  document.getElementById('bank_id').setAttribute("required", true);
        }else{
   var style ='none';
    //document.getElementById('bank_id').setAttribute("required", false);
        }
           
    document.getElementById('bank_div').style.display = style;
    }

</script>
<script type="text/javascript">

        function calculatePurchaseReturnTotal() {

    var total = 0;
    $(".purchase_total_price").each(function() {
      if (!isNaN(this.value) && this.value.length != 0) {
        total += parseFloat(this.value);
      }
    });

    $('#purchaseSubTotal').val(total.toFixed(2));
    
    var discount =  $("#purchase_product_dis_percent").val();

    if(!isNaN(discount) && discount.length != 0){
      
     discount = total * discount;
     discount = discount/100;
     $("#purchaseTotalDiscount").val(discount.toFixed(2));
     total = total - discount;
    }else{
        $("#purchaseTotalDiscount").val(0);
    }
  
    $('#purchaseGrandTotal').val(total.toFixed(2));

  }


    $(document).on("keyup keypress keydown change", ".purchase_return_quantity", function() {
        var purchaseQty = $(this).parent().prev().children().val();
        // console.log(purchaseQty);
        var quantity    = $(this).val();
        // console.log(quantity);


        if ( parseInt(quantity) > parseInt(purchaseQty)  ) {
            $(this).css('background-color','red');
        }else{
            $(this).css('background-color','transparent');
        }

        // purchase_product_dis_percent
        var price   =$(this).parent().next().children().val();
/*

        console.log($("#purchase_product_dis_percent").val());*/

        if (!isNaN(quantity) && quantity.length != 0) {
           total = parseFloat(price * quantity);
           $(this).parent().next().next().children().val(total);
           
         }else{
          $(this).parent().next().next().children().val(0);
         }
         calculatePurchaseReturnTotal();
    
    });  



</script>

<script type="text/javascript">

    function checkboxcheck(sl){
         var check_id    ='check_id_'+sl;
        var total_qntt  ='total_qntt_'+sl;
        var product_id  ='product_id_'+sl;
        var total_price  ='total_price_'+sl;

            if($('#'+check_id).prop("checked") == true){
                document.getElementById(total_qntt).setAttribute("required","required");
                  document.getElementById(product_id).setAttribute("name","product_id[]");
                   document.getElementById(total_qntt).setAttribute("name","product_quantity[]");
                    document.getElementById(total_price).setAttribute("name","total_price[]");
                
            }
            else if($('#'+check_id).prop("checked") == false){
               document.getElementById(total_qntt).removeAttribute("required");
                document.getElementById(product_id).removeAttribute("name","");
                document.getElementById(total_qntt).removeAttribute("name","");
                document.getElementById(total_price).setAttribute("name","total_price[]");
            }
        };

    //Quantity calculat
    function quantity_calculate(item) {
         var a = 0,o = 0;
        var sold_qty = $("#sold_qty" + item).val();
        var quantity = $("#total_qntt" + item).val();
        var price_item = $("#price_item" + item).val();
      var sqty = parseInt(sold_qty);
        if(sqty > {{ $details->quantity }} ){
            alert("Sold quantity less than quantity!");
            $("#total_qntt"+item).val("");
        }
        if (quantity > 0) {
            var price = ( {{ $details->quantity }} * {{ $details->rate }} );
            $("#total_price" + item).val(price);

            $(".total_price").each(function () {
                isNaN(this.value) || o == this.value.length || (a += parseFloat(this.value));
            }),
                    $("#purchaseGrandTotal").val(a.toFixed(2, 2));
        }

    }
</script>

<script type="text/javascript">
    $('#add_invoice').prop("disabled", true);
    $('input:checkbox').click(function () {
        if ($(this).is(':checked')) {
            $('#add_invoice').prop("disabled", false);
        } else {
            if ($('.chk').filter(':checked').length < 1) {
                $('#add_invoice').attr('disabled', true);
            }
        }
    });

</script>

<script type="text/javascript">
    
    $("#supplier_return").validate();

</script>


<script>
    var fistInput = document.getElementById("sold_qty").value;
    var secondInput = document.getElementById("total_qntt").value;

    if (firstInput === secondInput) {
        // do something here if inputs are same
    } else if (firstInput > secondInput) {
        alert('Big');
    } else {
        // do something if the first input is less than the second
    }
</script>




@endsection