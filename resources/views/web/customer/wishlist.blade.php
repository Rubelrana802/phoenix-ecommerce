@extends('web.master')

@section('title')
  Customer Wishlist
@endsection

@section('content')  

	    <!--breadcrumbs area start-->
	    <div class="breadcrumbs_area contact_bread">
	        <div class="container">
	            <div class="row">
	                <div class="col-12">
	                    <div class="breadcrumb_content">
	                        <div class="breadcrumb_header">
	                            <a href="{{ route('home.page') }}"><i class="fa fa-home"></i></a>
	                            <span><i class="fa fa-angle-right"></i></span>
	                            <span> wishlist</span>
	                        </div>
	                        <div class="breadcrumb_title">
	                            <h2>wishlist</h2>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		<!--breadcrumbs area end-->
       
        <!--shopping cart area start -->
        <div class="shopping_cart_details">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#"> 
                            <div class="table_desc wishlist_desc  table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Remove</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product name</th>
                                            <th class="product-price">Unit Price</th>
                                            <th class="product_quantity">Stock Status</th>
                                            <th class="product_add_cart ">Add To Cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <td class="product_remove"><a href="#">×</a></td>
                                            <td class="product_thumb"><a href="#"><img src="{{ asset('public/web') }}/assets/img/cart/cart17.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                            <td class="product-price">£65.00</td>
                                            <td class="product_quantity stock">In Stock</td>
                                            <td class="product_add_cart"><a href="#">Add To Cart</a></td>
                                            

                                        </tr>

                                        <tr>
                                           <td class="product_remove"><a href="#">×</a></td>
                                            <td class="product_thumb"><a href="#"><img src="{{ asset('public/web') }}/assets/img/cart/cart18.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbags justo</a></td>
                                            <td class="product-price">£90.00</td>
                                            <td class="product_quantity stock">In Stock</td>
                                            <td class="product_add_cart "><a href="#">Add To Cart</a></td>
                                            

                                        </tr>
                                        <tr>
                                           <td class="product_remove"><a href="#">×</a></td>
                                            <td class="product_thumb"><a href="#"><img src="{{ asset('public/web') }}/assets/img/cart/cart19.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbag elit</a></td>
                                            <td class="product-price">£80.00</td>
                                            <td class="product_quantity stock">In Stock</td>
                                            <td class="product_add_cart "><a href="#">Add To Cart</a></td>
                                            

                                        </tr>
                                        
                                    </tbody>
                                </table>  
                            </div>
                        </form>      
                     </div>
                 </div>                 
             </div>
         </div>
        <!-- accont area end -->

@endsection