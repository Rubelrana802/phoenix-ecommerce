         <!--header area start-->
        <div class="header_area">
           
            <!--header top start-->
            <div class="header_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="top_left_sidebar">
                                <div class="contact_link">
                                    <span>Call us toll free : <strong>(+8801775034549)</strong></span>
                                </div>
                                <div class="switcher">
                                    <ul>
                                        <li class="languages"><a href="#"><img src="{{ asset('public/web') }}/assets/img/logo/lion.jpg" alt=""> English <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown_languages">
                                                <li class="select"><img src="{{ asset('public/web') }}/assets/img/logo/lion.jpg" alt=""> English</li>
                                                <li class="select"><img src="{{ asset('public/web') }}/assets/img/logo/bangla.jpg" alt="বাংলা" title="বাংলা"> বাংলা </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header_right_info text-right">
                                <ul>
                                    <li class="my_account"><a href="{{ route('myaccount.customer') }}">
                                    <i class="fa fa-user" aria-hidden="true"></i> My account</a></li>
                                    <li class="my_wishlist"><a href="{{ route('wishlist.customer') }}">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>My wishlist</a></li>
                                    <li class="link_checkout"><a href="{{ route('checkout.customer') }}">
                                    <i class="fa fa-check" aria-hidden="true"></i> checkout </a></li>
                                    <li class="log_in"><a href="{{ route('login.customer') }}"><i class="fa fa-lock" aria-hidden="true"></i> Log in  </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="{{ route('home.page') }}"><img src="{{ asset('public/web') }}/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="search_form">
                                <form action="#">
                                    <input type="text" name="country_name" id="country_name" class="form-control input-lg" placeholder="Enter your search..." />
                                    <div id="countryList">
                                    </div>

                                    <div class="select_categories">
                                        <select name="select" id="categorie">

                                            <?php 
                                                    $categories = DB::table('categories')->where(['parent_id' => 0])->get();
                                                    $categories_drop_down = "<option value='' selected disabled>Select</option>";
                                                    foreach($categories as $cat){
                                                      $categories_drop_down .= "<option value='".$cat->id."'>".$cat->name."</option>";
                                                      $sub_categories = DB::table('categories')->where(['parent_id' => $cat->id])->get();
                                                      foreach($sub_categories as $sub_cat){
                                                        $categories_drop_down .= "<option value='".$sub_cat->id."'>&nbsp;&nbsp;--&nbsp;".$sub_cat->name."</option>";  
                                                      } 
                                                    }
                                            echo $categories_drop_down; 
                                            ?>
                                        </select>
                                    </div>
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="header_widget about_widget text-right">
                                <ul>
                                    <li><a href="{{ route('wishlist.customer') }}" title="My wishlist"><i class="fa fa-heart-o"></i></a></li>

                                    <li class="shopping_cart"><a href="#" title="View my shopping cart"><i class="fa fa-shopping-bag"></i></a> 
                                        <span class="cart__quantity">2</span>
                                        <div class="mini_cart cart_left">
                                            <div class="cart_item">
                                               <div class="cart_img">
                                                   <a href="#"><img src="{{ asset('public/web') }}/assets/img/cart/mini_cart1.jpg" alt=""></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="#">Handbag feugiat</a>
                                                    <span class="cart_price">$115.00</span>
                                                    <span class="quantity">Qty: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                               <div class="cart_img">
                                                   <a href="#"><img src="{{ asset('public/web') }}/assets/img/cart/mini_cart2.jpg" alt=""></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="#">Handbag fringilla</a>
                                                    <span class="cart_price">$115.00</span>
                                                    <span class="quantity">Qty: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_price_line">
                                                <span> Item(s) </span>
                                                <span class="prices">  2  </span>
                                            </div>
                                            <div class="cart_total">
                                                <span> Sub Total </span>
                                                <span class="prices">  $7.00  </span>
                                            </div>
                                            <div style="padding: 15px;">
                                                <span style="margin-right: 14px; padding: 10px"><a class="btn btn-danger" href="{{ route('viewcard.customer') }}"> View Cart</a></span>
                                                <a class="btn btn-danger" href="{{ route('checkout.customer') }}"> Check out</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div> 
            <!--header bottom start--> 
            <div class="header_bottom sticky-header">
               <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="main_menu_inner">
                                <div class="main_menu d-none d-lg-block">
                                    <nav>
                                        <ul>
                                            <li class="active"><a href="{{ route('home.page') }}">Home </a>
                                            </li>
                                            <li><a href="{{ route('shop.product') }}">Shop</a>
                                            </li>
                                            <li><a href="{{ route('about.page') }}">About Us</a></li>
                                            <li><a href="{{ route('contact.page') }}">Contact Us</a></li>
                                            <li class="active float-right" ><a> <span class="badge badge-danger">HOTLINE</span> <strong>(+8801775034549)</strong></a></li>                                           
                                        </ul>
                                    </nav>
                                </div>

                                <!-- mobile -->
                                <div class="mobile-menu portfolio_mobail about d-lg-none">
                                    <nav>
                                         <ul>
                                            <li><a href="{{ route('home.page') }}">Home</a></li>
                                            <li><a href="{{ route('shop.product') }}">Shop</a></li>
                                            <li><a href="{{ route('about.page') }}">About Us</a></li>
                                            <li><a href="{{ route('contact.page') }}">Contact Us</a></li>
                                            <li class="active float-right" ><a> <span class="badge badge-danger">HOTLINE</span> (+8801775034549)</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                       </div>
                   </div>
               </div> 
            </div>  
        </div>
         <!--header area end-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
    $(document).ready(function(){

     $('#country_name').keyup(function(){ 
            var query = $(this).val();
            if(query != '')
            {
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ route('autocomplete.fetch') }}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
               $('#countryList').fadeIn();  
                        $('#countryList').html(data);
              }
             });
            }
        });

        $(document).on('click', 'li', function(){  
            $('#country_name').val($(this).text());  
            $('#countryList').fadeOut();  
        });  

    });
</script>