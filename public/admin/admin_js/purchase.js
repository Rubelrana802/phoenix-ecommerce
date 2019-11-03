

$().ready(function() {

    $("#personal-info").validate();

//    validate signup form on keyup and submit
    $("#insert_purchase").validate({
        rules: {
            
            "product_quantity[]" : {
                required: true,
                minlength: 1,
            },
            
            username: {
                required: true,
                minlength: 2
            },
            
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
          
            topic: "Please select at least 2 topics"
        }
    });

   

});


$(document).ready(function(){
   
    
    
  function  fetchProductInfo(val = null,id = null){
        var inventory_id = $("#inventory_id").val();
        var inventory = $("#inventory_id").attr("id");
        var godown_id = $("#godown_id").val();
        var godown = $("#godown_id").attr("id");
        
        var direct_sell = $("#direct_sell").val();
      
       

        

        if(inventory_id == '' && godown_id == '' && direct_sell == ''){
            $("#"+id).val('');
            $("#alertMessage").modal("show"); 
           
        }


        if(!direct_sell == '' ){    
        }else{

                if(!inventory_id == '' && godown_id == ''){
                
                    console.log(val);
                    console.log(id);
                    if(!val == '' && id != ''){
                    
                    var  route  = "{{url('get/product-info/')}}"+'/'+val+'/'+inventory_id+'/inventory';
                    console.log(route);

                        $.get(route,function(data){
                            $("#"+id).parent().next().children().val(data.purchase_qty);
                            console.log(data.purchase_qty);
                            
                        });


                    }
                    
                }

                if(inventory_id == '' && !godown_id == ''){
                
                console.log(val);
                console.log(id);
                if(!val == '' && id != ''){
                
                console.log('111');
                
                var  route  = "{{url('get/product-info/')}}"+'/'+val+'/'+godown_id+'/godown';
                console.log(route);

                    $.get(route,function(data){
                        $("#"+id).parent().next().children().val(data.purchase_qty);
                        console.log(data.purchase_qty);
                    });

                }
                
            }

        }
        
    }

    $(document).on("keyup keypress keydown change",".products_id",function(e){
        e.preventDefault();
        var id = $(this).attr("id");
        var val = $(this).val();
        fetchProductInfo(val,id);

    }) 

    function cleanDynamicInputs(){
        $("#products_id_0").val('');
        $("#available_quantity_0").val('');
        $("#table .removeInputs").each(function() {
            $(this).parent().parent().remove();
        })
    };
    
    $(document).on("keyup keypress keydown change","#direct_sell",function(e){
        e.preventDefault();
        $("#inventory_id").val('');
        $("#godown_id").val('');

        cleanDynamicInputs();
        fetchProductInfo();
    })

    $(document).on("keyup keypress keydown change","#inventory_id",function(e){
        e.preventDefault();
        $("#direct_sell").val('');
        $("#godown_id").val('');
        cleanDynamicInputs();
        fetchProductInfo();
    })


    $(document).on("keyup keypress keydown change","#godown_id",function(e){
        e.preventDefault();
        $("#direct_sell").val('');
        $("#inventory_id").val('');

        cleanDynamicInputs();
        fetchProductInfo()
        
    })


function calculateTotal() {
    //Initialize total to 0
    var total = 0;
    $(".total_price").each(function() {
      // Sum only if the text entered is number and greater than 0
      if (!isNaN(this.value) && this.value.length != 0) {
        total += parseFloat(this.value);
      }
    });

    $('#subTotal').val(total.toFixed(2));
    
    var discount =  $("#discount").val();
    

    if(!isNaN(discount) && discount.length != 0){
      
     discount = total * discount;
     discount = discount/100;
     $("#totalDiscount").val(discount.toFixed(2));

      total = total - discount;
      
    }else{
        $("#totalDiscount").val(0);
    }

   

    $('#grandTotal').val(total.toFixed(2));

    var inwords = convertNumberToWords(total);
    document.getElementById("inword").innerHTML = inwords;
  }

 
  
  
  

  $("body").on("keyup keypress change", "#discount", function() {
        var discount    = $(this).val();
         calculateTotal();
    });  

   
    

    $("#table").on("click", ".removeInputs", function(e) {
      e.preventDefault();
      $(this).parent().parent().remove();

        calculateTotal();
      
    });  

   

$(document).on("keyup keypress keydown change", ".quantity", function() {
        var quantity    = $(this).val();
        var price   =$(this).parent().next().children().val();
        var total ;

        if (!isNaN(price) && price.length != 0) {
           total = parseFloat(price * quantity);
           $(this).parent().next().next().children().val(total);
           
         }else{
          $(this).parent().next().next().children().val(0);
         }
         calculateTotal();
    
    });  


    $(document).on("keyup keypress keydown change ", ".product_rate", function() {
        var price    = $(this).val();
        var quantity   =$(this).parent().prev().children().val();
        var total ;
        if (!isNaN(price) && price.length != 0) {
           total = parseFloat(price * quantity);
           $(this).parent().next().children().val(total);
           
         }else{
          $(this).parent().next().children().val(0);
         }
         calculateTotal();
    });  
})
 



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

