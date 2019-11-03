
@extends('admin.master')

@section('title')
    Pos Invoice
@endsection

@section('content')


<script type="text/javascript">
    $(document).ready(function () {
        $("form :input").attr("autocomplete", "off");
    })
</script>

<!-- Add new invoice start -->
<style>
    #bank_info_hide
    {
        display:none;
    }
    #payment_from_2
    {
        display:none;
    }
</style>

<!-- Customer type change by javascript start -->
<script type="text/javascript">
    function bank_info_show(payment_type)
    {
        if (payment_type.value == "1") {
            document.getElementById("bank_info_hide").style.display = "none";
        } else {
            document.getElementById("bank_info_hide").style.display = "block";
        }
    }

    function active_customer(status)
    {
        if (status == "payment_from_2") {
            document.getElementById("payment_from_2").style.display = "none";
            document.getElementById("payment_from_1").style.display = "block";
            document.getElementById("myRadioButton_2").checked = false;
            document.getElementById("myRadioButton_1").checked = true;
        } else {
            document.getElementById("payment_from_1").style.display = "none";
            document.getElementById("payment_from_2").style.display = "block";
            document.getElementById("myRadioButton_2").checked = false;
            document.getElementById("myRadioButton_1").checked = true;
        }
    }
</script>
<!-- Customer type change by javascript end -->

<!-- Add New Invoice Start -->

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>New Invoice</h1>
            <small>Add New Invoice</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Invoice</a></li>
                <li class="active">New Invoice</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Alert Message -->
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('invoice.manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Invoice  </a>
                </div>
            </div>
        </div>


        <!--Add Invoice -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>New Invoice</h4>
                        </div>
                    </div>
                    <form action="{{ route('invoice.save') }}" class="form-vertical" id="invoice_new" name="invoice_new" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        @csrf
                    <div class="panel-body">
                        <div class="row">
                          <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Date <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="datepicker form-control" type="text" size="50" name="invoice_date" id="date" required value="{{ date('Y-m-d') }}" tabindex="6" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">Payment Type <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="payment_type" class="form-control" required=""  onchange="bank_paymet(this.value)">
                                            <option value="">Select Payment Option</option>
                                            <option value="1">Cash Payment</option>
                                            <option value="2">Due Payment</option>
                                            <option value="3">Bank Payment</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                             <div class="col-sm-6" id="name">
                                <div class="form-group row">
                                    <label for="customer_id" class="col-sm-4 col-form-label">Customer Name <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select select name="customer_id" class="form-control"  id="customer_id" required="">
                                            <option value="">Select One</option>
                                            @foreach($customers as $customer)
                                                <option value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                             <div class="col-sm-6" id="">
                                <div class="form-group row">
                                    <label for="mobile" class="col-sm-4 col-form-label">Mobile <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100"  name="mobile" class=" form-control" placeholder='Mobile' id="mobile" tabindex="1" readonly/>
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

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="store" class="col-sm-4 col-form-label">Store <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                       <select name="store_id" class="form-control"  id="store_code" required="">
                                            <option value="">Select Location</option>
                                            @foreach($stores as $store)
                                                <option value="{{ $store->id }}">{{ $store->store_name }}</option>
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
                                                <option value="{{ $bank->id }}">{{ $bank->bank_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="add_item" class="col-sm-4 col-form-label">Barcode <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="product_name" class="form-control" placeholder='Barcode or QR-code scan here' id="add_item" autocomplete='off' tabindex="1">
                                        <input type="hidden" id="product_value" name="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr style="border-top: 3px double #8c8b8b;">
                        <div class="text-center"><h2>Sales Invoice : {{ $newInvoiceID }}</h2></div>

                        <div class="row"></div>

                        <div class="table-responsive" style="margin-top: 10px"><table class="table table-bordered table-hover" id="normalinvoice">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 220px">Item code <i class="text-danger">*</i></th>
                                        <th class="text-center" style="width: 220px">Item Information <i class="text-danger">*</i></th>
                                        <th class="text-center">Av. Qnty.</th>
                                        <th class="text-center">Qnty <i class="text-danger">*</i></th>
                                        <th class="text-center">Rate <i class="text-danger">*</i></th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">
                                    <tr></tr>
                                </tbody>
                                <tfoot>
                              
                             
                                <tr>
                                    <td colspan="5"  style="text-align:right;"><b>Total:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="total" class="form-control text-right" name="total" value="0.00"  />
                                    </td>
                                   
                                </tr>
                                 <tr>
                                    <td colspan="4"  style="text-align:right;"><b>Discount %</b></td>
                                    <td class="text-right">
                                        <input type="text" id="discount" class="form-control text-right" name="discount_per" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" placeholder="0.00" />
                                    </td>
                                     <td class="text-right">
                                        <input type="text" id="total_dicount" class="form-control text-right" name="total_dicount" value="0.00" readonly="" />
                                    </td>
                                   
                                </tr>
                                 <tr>
                                    <td colspan="4"  style="text-align:right;"><b>Vat%</b></td>
                                    <td class="text-right">
                                        <input type="text" id="vat_per" class="form-control text-right" name="vat_per" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" value="" placeholder="0.00" />
                                    </td>
                                    <td class="text-right">
                                        <input type="text" id="total_vat" class="form-control text-right" name="total_vat" value="0.00" readonly="" />
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td colspan="4"  style="text-align:right;"><b>Tax%</b></td>
                                    <td class="text-right">
                                        <input type="text" id="tax_per" class="form-control text-right" name="tax_per" value=""  onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" placeholder="0.00" />
                                    </td>
                                    <td class="text-right">
                                        <input type="text" id="total_tax" class="form-control text-right" name="total_tax" value="0.00" readonly="" />
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td colspan="5"  style="text-align:right;"><b>Grand Total:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="grandTotal" class="form-control text-right" name="grand_total_price" value="0.00" readonly="readonly" />
                                    </td>
                                    <td> <input type="button" id="add_invoice_item" class="btn btn-info"  name="add-invoice-item"  onClick="addInputField('addinvoiceItem');" value="Add More" tabindex="12"/></td>
                                </tr>
                               
                               
                              
                                <tr>
                                    <td align="right" colspan="7">
                                        <input type="submit" id="add_invoice" class="btn btn-success" name="add-invoice" value="Submit" tabindex="15"/>
                                    </td>

                                
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        </form>                    
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->
<!-- <script src="{{ asset('public/admin') }}/admin_js/numberconverter.js" type="text/javascript"></script> -->

<script type="text/javascript">

    //Onload filed select
    window.onload = function () {
        var text_input = document.getElementById('add_item');
        text_input.focus();
        text_input.select();
    }

    //Invoice js
    $('#add_item').keypress(function (e) {
        var product_id = String.fromCharCode(e.keyCode);
        // alert(res);
        //     var product_id = $(this).val();
            var store_code = $("#store_code").val();
            if(store_code ==''){
                alert('Please Select Store');
                return false;
            }
            $.ajax({
                type: "post",
                async: false,
                url: 'http://dynomotorsbd.com/Cinvoice/insert_pos_invoice',
                data: {product_id: product_id,store_code:store_code},
                success: function (data) {
                    if (data == false) {
                        alert('This Product Not Found !');
                        document.getElementById('add_item').value = '';
                        document.getElementById('add_item').focus();
                        calculateSum();
                        invoice_paidamount();
                    } else {
                        $("#hidden_tr").css("display", "none");
                        document.getElementById('add_item').value = '';
                        document.getElementById('add_item').focus();
                        $('#normalinvoice tbody').append(data);
                        calculateSum();
                        invoice_paidamount();
                    }
                },
                error: function () {
                    alert('Request Failed, Please check your code and try again!');
                }
            });
        
    });
</script>

<script>
//Add Input Field Of Row
function addInputField(t) {
    var row = $("#normalinvoice tbody tr").length;
    var count = row + 1;
    var limits = 500;
    if (count == limits)
        alert("You have reached the limit of adding " + count + " inputs");
    else {
        var a = "product_code" + count,
                tabindex = count * 5,
                e = document.createElement("tr");
        //e.setAttribute("id", count);
        tab1 = tabindex + 1;
        tab2 = tabindex + 2;
        tab3 = tabindex + 3;
        tab4 = tabindex + 4;
        tab5 = tabindex + 5;
        tab6 = tabindex + 6;
        e.innerHTML = "<td><input name='product_code' id='" + a + "' tabindex='" + tab1 + "' class='form-control text-left productSelection common_product' value='' onkeypress='invoice_productList(" + count + ");'  type='text' placeholder='item code'><input type='hidden' class='common_product autocomplete_hidden_value  product_id_" + count + "' name='product_id[]' id='SchoolHiddenId'/></td><td><input type='text' name='product_name' class='form-control product_name_" + count + "' placeholder='item name' readonly='readonly' id='product_name_" + count + "' ></td>   <td><input type='text' name='available_quantity[]' id='' class='form-control text-right common_avail_qnt available_quantity_" + count + "' value='0' readonly='readonly' /></td><td> <input type='text' name='product_quantity[]' required='required' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' id='total_qntt_" + count + "' class='common_qnt total_qntt_" + count + " form-control text-right'  placeholder='0.00' min='0' tabindex='" + tab2 + "'/></td><td><input type='number' name='product_rate[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' id='price_item_" + count + "' class='common_rate price_item" + count + " form-control text-right' required placeholder='0.00' min='0' tabindex='" + tab3 + "'/></td><td class='text-right'><input class='common_total_price total_price form-control text-right' type='text' name='total_price[]' id='total_price_" + count + "' value='0.00' readonly='readonly'/></td><td><button tabindex='" + tab5 + "' style='text-align: right;' class='btn btn-danger' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-close'></i></button></td>",
                document.getElementById(t).appendChild(e),
                document.getElementById(a).focus(),
                document.getElementById("add_invoice_item").setAttribute("tabindex", tab6);
        count++
    }
}
//Quantity calculat
function quantity_calculate(item) {
//    alert(item);
    var quantity = $("#total_qntt_" + item).val();
    var available_quantity = $(".available_quantity_" + item).val();
    var price_item = $("#price_item_" + item).val();
    // var invoice_discount = $("#invoice_discount").val();
    
//    alert(available_quantity);
    if (parseInt(quantity) > parseInt(available_quantity)) {
        var message = "You can purchase maximum " + available_quantity + " Items";
        alert(message);
    }

        var n = quantity * price_item;  
        $("#total_price_" + item).val(n);
   
    calculateSum();

}
//Calculate Sum
function calculateSum() {
    var t = 0;
    var dis = 0;
    var vatamount = 0;
    var taxamount = 0;

            //Total Price
            $(".total_price").each(function () {
        isNaN(this.value) || 0 == this.value.length || (t += parseFloat(this.value))
    }),

        
    $("#total").val(t.toFixed(2, 2));

     var dis_per = $("#discount").val();
     var dis = (t*dis_per)/100;
      $("#total_dicount").val(dis.toFixed(2, 2));
      var amount_withoutdis = t - dis;
      var vat_per = $("#vat_per").val();
      var vatamount = (vat_per*amount_withoutdis)/100;
      $("#total_vat").val(vatamount.toFixed(2, 2));
      var tax_per = $("#tax_per").val();
      var taxamount = (tax_per*amount_withoutdis)/100;
     $("#total_tax").val(taxamount.toFixed(2, 2));
    var grandtotalamount = amount_withoutdis + vatamount + taxamount;
     $("#grandTotal").val(grandtotalamount.toFixed(2, 2))
}

//Invoice Paid Amount
function invoice_paidamount() {
    var  prb = parseInt($("#previous").val(), 10);
    if(prb > 0){
        pr =  prb;
    }else{
        pr = 0;
    }
    var t = $("#grandTotal").val(),
            a = $("#paidAmount").val(),
            e = t - a,
            f = e + pr,
            nt = parseInt(t, 10) + pr;
          
    $("#dueAmmount").val(f.toFixed(2, 2))
     $("#n_total").val(nt.toFixed(2, 2));
}
// function shippingCost(){
   
//         var t = $("#grandTotal").val();
// alert(t);
//     //         a = $("#shipping_cost").val(),
//     //         e = +t+ + a;
          
//     // $("#grandTotal").val(e);
// }
//Stock Limit
function stockLimit(t) {
    var a = $("#total_qntt_" + t).val(),
            e = $(".product_id_" + t).val(),
            o = $(".baseUrl").val();

    $.ajax({
        type: "POST",
        url: o + "Cinvoice/product_stock_check",
        data: {
            product_id: e
        },
        cache: !1,
        success: function (e) {
            alert(e);
            if (a > Number(e)) {
                var o = "You can purchase maximum " + e + " Items";
                alert(o), $("#qty_item_" + t).val("0"), $("#total_qntt_" + t).val("0"), $("#total_price_" + t).val("0")
            }
        }
    })
}

function stockLimitAjax(t) {
    var a = $("#total_qntt_" + t).val(),
            e = $(".product_id_" + t).val(),
            o = $(".baseUrl").val();
            
    $.ajax({
        type: "POST",
        url: o + "Cinvoice/product_stock_check",
        data: {
            product_id: e
        },
        cache: !1,
        success: function (e) {
            alert(e);
            /*if (a > Number(e)) {
                var o = "You can purchase maximum " + e + " Items";
                alert(o), $("#qty_item_" + t).val("0"), $("#total_qntt_" + t).val("0"), $("#total_price_" + t).val("0.00"), calculateSum()
            }*/
        }
    })
}

//Invoice full paid
function full_paid() {
    var grandTotal = $("#n_total").val();
    $("#paidAmount").val(grandTotal);
    invoice_paidamount();
    calculateSum();
}

//Delete a row of table
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
//    alert(a);
    if (1 == a)
        alert("There only one row you can't delete.");
    else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e),
                calculateSum();
        invoice_paidamount();
//        alert(a);
        var current = 1;
        $("#normalinvoice > tbody > tr td input.productSelection").each(function () {
            current++;
            $(this).attr('id', 'product_name' + current);
        });
        var common_qnt = 1;
        $("#normalinvoice > tbody > tr td input.common_qnt").each(function () {
            common_qnt++;
            $(this).attr('id', 'total_qntt_' + common_qnt);
            $(this).attr('onkeyup', 'quantity_calculate('+common_qnt+');');
            $(this).attr('onchange', 'quantity_calculate('+common_qnt+');');
        });
        var common_rate = 1;
        $("#normalinvoice > tbody > tr td input.common_rate").each(function () {
            common_rate++;
            $(this).attr('id', 'price_item_' + common_rate);
            $(this).attr('onkeyup', 'quantity_calculate('+common_qnt+');');
            $(this).attr('onchange', 'quantity_calculate('+common_qnt+');');
        });
       
        var common_total_price = 1;
        $("#normalinvoice > tbody > tr td input.common_total_price").each(function () {
            common_total_price++;
            $(this).attr('id', 'total_price_' + common_total_price);
        });




    }
}
var count = 2,
        limits = 500;
//$('body').on('keyup', '#invoice_discount', function () {
//    var invoiceDis = $("#invoice_discount").val();
//    var ttlDis = $("#total_discount_ammount").val();
//    var xx = invoiceDis * ttlDis;
//    alert(xx);
//})

      function bank_paymet(val){
        if(val==3){
           var style = 'block'; 
           document.getElementById('bank_id').setAttribute("required", true);
        }else{
   var style ='none';
    document.getElementById('bank_id').setAttribute("required", false);
        }
           
    document.getElementById('bank_div').style.display = style;
    }
</script>

<script>
    var productList = [{}] ; 

APchange = function(event, ui){
    $(this).data("autocomplete").menu.activeMenu.children(":first-child").trigger("click");
}
    function invoice_productList(cName) {
        var priceClass = 'price_item'+cName;
        var available_quantity = 'available_quantity_'+cName;
        var product_name = 'product_name_'+cName;
        var st_code = $('#store_code').val();
        var w_code = $("#godown_code").val();
        if(st_code =='' && w_code ==''){
        alert('please select Location');
        $('#product_code').val()='';
        
    }
        $( ".productSelection" ).autocomplete(
        {
            source: productList,
            delay:300,
            focus: function(event, ui) {
                $(this).parent().find(".autocomplete_hidden_value").val(ui.item.value);
                $(this).val(ui.item.label);
                return false;
            },
            select: function(event, ui) {
                $(this).parent().find(".autocomplete_hidden_value").val(ui.item.value);
                $(this).val(ui.item.label);
                
                var id=ui.item.value;
                var dataString = 'product_id='+ id;
                var base_url = $('.baseUrl').val();
                var str_code = $('#store_code').val();
                var godown_code = $("#godown_code").val();
                
                $.ajax
                   ({
                        type: "POST",
                        url: base_url+"Cinvoice/retrieve_product_data_inv",
                        data: {
                        "product_id" :id,
                        "store_code" :str_code,
                        "godow_code" :godown_code
                    },
                        cache: false,
                        success: function(data)
                        {
                            var obj = jQuery.parseJSON(data);
                            $('.'+priceClass).val(obj.price);
                            $('.'+available_quantity).val(obj.total_product.toFixed(2,2));
                            $('.'+product_name).val(obj.product_name);
                            //This Function Stay on others.js page
                            quantity_calculate(cName);
                            
                        } 
                    });
                
                $(this).unbind("change");
                return false;
            }
        });
        $( ".productSelection" ).focus(function(){
            $(this).change(APchange);
        
        });
    }


</script>

