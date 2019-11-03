<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{str_replace(" ", "_", $customer_info->customer_name.'_'.'invoice')}} </title>
    <style>
        table:nth-child(1) {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table:nth-child(1) tr {
            border-right: 1px solid black;
            border-left: 1px solid black;
            border-top: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        table:nth-child(1) td {
            padding: 8px;
            text-align: center;
        }

        /* end */
        table:nth-child(2) {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table:nth-child(2) th {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }

        table:nth-child(2) td {
            border-right: 1px solid black;
            border-left: 1px solid black;
            text-align: left;
            padding: 8px;
            text-align: center;
        }

       

        table:nth-child(3) {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table:nth-child(3) td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        table:nth-child(3) td {
            border-right: 1px solid black;
            text-align: left;
            padding: 8px;
            text-align: center;
        }

        table:nth-child(3) td:first-child {
            border-left: 1px solid black;

        }

        .text-right {
            text-align: right;
        }

   

        .row {
            width: 100%;
        }
        .page-break {
    page-break-after: always;
}

       
    </style>
</head>

<body>

    <main>
            <table> 
                    <tr>
                        <td colspan="5">
                            <h1 style="margin-bottom: 5px;text-transform:uppercase;">comfort foam & mattress</h1>
                            <address style="font-size:12px;">
                                Address : Road Dhaka <br />
                                E-mail : info@goldenapexbd.com <br />
                                Website : www.goldenpaex.com <br /><br />
                            </address>
                            <h4 style="text-transform:uppercase;margin-top: 5px">Purchase Invoice</h4>
                        </td>
                    </tr>
                    <tr style="width:100%;text-align: center">
                        <td style="text-align: left">Invoice No : {{$invoice->sell_invoice_no}} </td>
                        <td style="text-align: right" colspan="4">Date : {{date("d/m/Y")}} </td>
                    </tr>
                    <tr style="width:100%;text-align: center">
                        <td style="text-align: left" colspan="3">
                            <b>Customer Information</b><br />
                            <address style="font-size:14px;">
                                Name    : {{$customer_info->customer_name}} <br />
                                Address : {{$customer_info->customer_address}} <br />
                                Phone   : {{$customer_info->customer_mobile}} <br />
                                E-mail  : {{$customer_info->customer_email}} <br />
                               <br />
                            </address>
                        </td>
                        <td colspan="2" style="text-align: right">
                            <!-- invoice no : 0100000<br>
                                    Date      : 01/01/2000   -->
                        </td>
                    </tr>
                </table>
            
            
            
                <table>
                    <tr>
                        <th style="width: 5%;">Sl</th>
                        <th style="width: 40%;">Description of Goods </th>
                        <th style="width: 15%;">Queantiy</th>
                        <th style="width: 15%;">Unit Price</th>
                        <th style="width: 25%;">Amount</th>
                    </tr>
            
                    <tbody>
                      @php
                      $i = 1;
                      
                      $subTotal = 0;
                      @endphp
                      @foreach ($invoice_details as $detail)
                      <tr>
                          <td style="width: 5%;">{{$i++}}</td>
                          <td style="width: 40%;">
                            @foreach ($products as $product)
                                @if ($product->id == $detail->product_id)
                                    {{$product->product_name}}
                                @endif
                            @endforeach
                        </td>
                          <td style="width: 15%;">{{$detail->quantity}}</td>
                          <td style="width: 15%;">{{$detail->rate}}</td>
                          <td style="width: 25%;">{{ $total = $detail->quantity * $detail->rate }}</td>
                      </tr>
                      @php($subTotal += $total )
                    
                      @endforeach
                    </tbody>
            
            
                </table>
                <table>
                    <tbody>
            
                        <tr>
                            <td style="text-align: right" colspan="4">Sub Total :</td>
                            <td>{{$subTotal}}</td>
                        </tr>
            
                        <tr>
                        
                                <td style="text-align: right" colspan="4">Discount :</td>
                           
                                                    
                            
                            
                                
                                
                                <td style="width: 25%;">{{round($invoice->total_discount,2)}}</td>
                            </tr>
            
                            <tr>
                        
                                    <td style="text-align: right" colspan="4">Special Discount :</td>
                                   
                                                    
                                   
                                
                                    
                                    
                                    <td style="width: 25%;">{{round($invoice->total_discount_two,2)}}</td>
                                </tr>
                                <tr>
                        
                                        <td style="text-align: right" colspan="1">Miscellaneous :</td>
                                        <td style="text-align: right" colspan="3">{{$invoice->others_bill}}</td>
                                       
                                                        
                                       
                                    
                                        
                                        
                                        <td style="width: 25%;">{{$invoice->others_price}}</td>
                                    </tr> 
                       
                        
                        <tr>
                            <td style="text-align: right" colspan="4">Grand Total :</td>
                            <td style="width: 25%;">{{ round($invoice->total_amount,2)}}</td>
                        </tr>
                     
                    </tbody>
                  
                </table>
    </main>
   
   <div style="position: fixed;bottom:50px;">
    
        <p style="float:left;">

           <span style="border-top:1px solid black">Signatur of Customer</span>
       </p>
          <p style="float:right;">
           <span style="border-top:1px solid black">Signatur of Proprietor</span>
         </p>
     
   </div>
  

</body>

</html>