@extends('web.master')

@section('title')
  Phoenix Online Shop
@endsection

@section('content')

    <!--baner slide show-->

        <div class="banner_slide_show mb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="categories_menu">
                            <div class="categories_title">
                                <h2 class="categori_toggle"><img src="{{ asset('public/web') }}/{{ asset('public/web') }}/{{ asset('public/web') }}/assets/img/logo/categorie.png" alt=""> All categories</h2>
                            </div>
                            <div class="categories_menu_inner">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Electronics <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu">
                                            <li><a href="#">Laptops</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Dell Laptops Dell Laptops</a></li>
                                                        <li><a href="#">HP Laptops</a></li>
                                                        <li><a href="#">Lenovo Laptops</a></li>
                                                        <li><a href="#">Apple Laptops</a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Fashion  <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu hobbies">
                                            <li><a href="#">Dresses</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Sweater</a></li>
                                                        <li><a href="#">Evening</a></li>
                                                        <li><a href="#">Day</a></li>
                                                        <li><a href="#">Sports</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Handbags</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Shoulder</a></li>
                                                        <li><a href="#">Satchels</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">coats</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">shoes</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Ankle Boots</a></li>
                                                        <li><a href="#">Clog sandals </a></li>
                                                        <li><a href="#">run</a></li>
                                                        <li><a href="#">Books</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Clothing</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Coats  Jackets </a></li>
                                                        <li><a href="#">Raincoats</a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">T-shirts</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Furnitured & Decor <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu hobbies">
                                            <li><a href="#">Chair</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Dining room</a></li>
                                                        <li><a href="#">bedroom</a></li>
                                                        <li><a href="#"> Home & Office</a></li>
                                                        <li><a href="#">living room</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Lighting</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Ceiling Lighting</a></li>
                                                        <li><a href="#">Wall Lighting</a></li>
                                                        <li><a href="#">Outdoor Lighting</a></li>
                                                        <li><a href="#">Smart Lighting</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Sofa</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Fabric Sofas</a></li>
                                                        <li><a href="#">Leather Sofas</a></li>
                                                        <li><a href="#">Corner Sofas</a></li>
                                                        <li><a href="#">Sofa Beds</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Toys & Hobbies <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu hobbies">
                                            <li><a href="#">Boys' Toys</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Building Toys</a></li>
                                                        <li><a href="#">Electronics Toys</a></li>
                                                        <li><a href="#">action figures </a></li>
                                                        <li><a href="#">specialty & boutique toy</a></li>
                                                        <li><a href="#">Dolls for Girls</a></li>
                                                        <li><a href="#">Girls' Learning Toys</a></li>
                                                        <li><a href="#">Arts and Crafts for Girls</a></li>
                                                        <li><a href="#">Video Games for Girls</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                             <li>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Dolls for Girls</a></li>
                                                        <li><a href="#">Girls' Learning Toys</a></li>
                                                        <li><a href="#">Arts and Crafts for Girls</a></li>
                                                        <li><a href="#">Video Games for Girls</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Accessories</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Jewelry & Watches</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Health & Beauty</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Books & Office</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Sport & Outdoor</a></li>
                                    <li id="cat_toggle" class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> More Categories</a>
                                        <ul class="categorie_sub">
                                            <li><a href="#"><i class="fa fa-caret-right"></i> Computer - Laptop</a></li>
                                        </ul>   

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-9 col-md-8">
                        <div class="banner_slider">
                            <div class="slider_active owl-carousel">
                                @foreach($slider as $slider)
                                <div class="single_slider" style="background-image: url({{ asset('public/admin/images/slider/'.$slider->image) }})">
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                                            <div class="slider_content">
                                                <h1>Phoenix <br>Shop </h1>
                                                <div class="slider_desc">
                                                    <p>E-commerce quality and adoptive<br> elements of e-ticketing for sporting events </p>
                                                </div>
                                                <div class="slider_button">
                                                    <a href="{{ $slider->slider_link }}">shop it! </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--baner slide end-->

        
        <!--home two block section start--> 
        <div class="home_two_block_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                      
                      <!--product banner start-->
                       <div class="product_banner product_banner_two fix mb-40">
                            <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner1.jpg" alt=""></a>
                        </div>
                      <!--product banner end--> 
                      
                      <!--Bestseller small product start-->

                       <div class="top_sellers top_seller_two featured mb-40">
                            <div class="top_title">
                                <h2> Bestseller</h2>
                            </div>
                            <div class="small_product_active owl-carousel">
                                <div class="small_product_item">
                                    @foreach($bestsale as $bestpro)
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product',$bestpro->id ) }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart13.jpg" alt=""></a>
                                            <div class="product_discount">
                                                <span>-10%</span>
                                            </div>
                                        </div>
                                        <div class="small_product_content">
                                            <div class="samll_product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="small_product_name">
                                                <a title="Printed Summer Dress" href="{{ route('single.product',$bestpro->id ) }}"> Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>                                    
                                    @endforeach 
                                </div>                                
                            </div>
                        </div>
                      <!--Bestseller small product end-->
                      
                      <!--blog post area start-->
                        <div class="top_title mb-30">
                            <h2> Blog Posts</h2>
                        </div>
                        <div class="blog_active_two owl-carousel mb-40">
                            <div class="single_blog single_blog_two">
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{ asset('public/web') }}/assets/img/blog/blog1.jpg" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <h4 class="blog_title"><a href="blog-details.html">Share the Love for PrestaShop 1.6</a></h4>
                                    <p class="blog_desc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                                    <div class="blog_post blog_p_two">
                                        <ul>
                                            <li class="post_date">Dec 01</li>
                                            <li class="read_more"><a href="blog-details.html">Read More</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_blog single_blog_two">
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{ asset('public/web') }}/assets/img/blog/blog4.jpg" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <h4 class="blog_title"><a href="blog-details.html">Share the Love for PrestaShop 1.6</a></h4>
                                    <p class="blog_desc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                                    <div class="blog_post blog_p_two">
                                        <ul>
                                            <li class="post_date">Dec 01</li>
                                            <li class="read_more"><a href="blog-details.html">Read More</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single_blog single_blog_two">
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{ asset('public/web') }}/assets/img/blog/blog2.jpg" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <h4 class="blog_title"><a href="blog-details.html">Share the Love for PrestaShop 1.6</a></h4>
                                    <p class="blog_desc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                                    <div class="blog_post blog_p_two">
                                        <ul>
                                            <li class="post_date">Dec 01</li>
                                            <li class="read_more"><a href="blog-details.html">Read More</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <!--blog post area end-->
                      
                      <!--barnd logo area start-->
                      <div class="brand_logo brand_logo_two">  
                           <div class="top_title">
                                <h2> logo brands</h2>
                            </div>
                            <div class="brand_active_two owl-carousel">
                               <div class="single_brand_item">
                                   <div class="single_brand">
                                       <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand1.jpg" alt=""></a>
                                   </div>
                                   <div class="single_brand">
                                       <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand2.jpg" alt=""></a>
                                   </div>
                                   <div class="single_brand">
                                       <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand3.jpg" alt=""></a>
                                   </div>
                                   <div class="single_brand">
                                       <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand4.jpg" alt=""></a>
                                   </div>
                                   <div class="single_brand">
                                       <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand5.jpg" alt=""></a>
                                   </div>
                               </div>
                               <div class="single_brand_item">
                                   <div class="single_brand">
                                       <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand1.jpg" alt=""></a>
                                   </div>
                                   <div class="single_brand">
                                       <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand2.jpg" alt=""></a>
                                   </div>
                                   <div class="single_brand">
                                       <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand3.jpg" alt=""></a>
                                   </div>
                                   <div class="single_brand">
                                       <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand4.jpg" alt=""></a>
                                   </div>
                                   <div class="single_brand">
                                       <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand5.jpg" alt=""></a>
                                   </div>
                               </div>
                            </div>
                        </div> 
                      <!--barnd logo area end-->               
                    </div>

                    <div class="col-lg-9 col-md-8">
                        <!--hot deals product area-->
                        <div class="product_inner product_inner_two mb-40">
                            <div class="top_title">
                                <h2> hot deals</h2>
                            </div>
                            <div class="row">
                                <div class="product_active owl-carousel">
                                   <div class="col-lg-3">
                                       <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="{{ route('single.product',$product->id ) }}"><img src="{{ asset('public/web') }}/assets/img/product/product1.jpg" alt=""></a>
                                                <div class="product_discount">
                                                    <span>-10%</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"  title=" Add to Compare "><i class="fa fa-retweet"></i></a></li>
                                                        <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="quick_view">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_timing">
                                                    <div data-countdown="2020/12/15"></div>
                                                </div>
                                                <div class="samll_product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="small_product_name">
                                                    <a title="Printed Summer Dress" href="{{ route('single.product',$product->id ) }}">Printed Summer Dress</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> $140.00 </span>
                                                    <span class="old_price">  $150.50  </span>
                                                </div>
                                            </div>
                                        </div>
                                   </div>

                                   <div class="col-lg-3">
                                       <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="{{ route('single.product',$product->id ) }}"><img src="{{ asset('public/web') }}/assets/img/product/product2.jpg" alt=""></a>
                                                
                                                <div class="product_action">
                                                    <ul>
                                                        <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                        
                                                        <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="quick_view">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_timing">
                                                    <div data-countdown="2020/12/15"></div>
                                                </div>
                                                <div class="samll_product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="small_product_name">
                                                    <a title="Printed Summer Dress" href="{{ route('single.product',$product->id ) }}">Handbag fringilla</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> $130.00 </span>
                                                </div>
                                            </div>
                                        </div>
                                   </di v>

                                   <div class="col-lg-3">
                                       <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="{{ route('single.product',$product->id ) }}"><img src="{{ asset('public/web') }}/assets/img/product/product4.jpg" alt=""></a>
                                                <div class="product_discount">
                                                    <span>-10%</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                        
                                                        <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="quick_view">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_timing">
                                                    <div data-countdown="2020/12/15"></div>
                                                </div>
                                                <div class="samll_product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="small_product_name">
                                                    <a title="Printed Summer Dress" href="{{ route('single.product',$product->id ) }}">Printed  Dress</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> $140.00 </span>
                                                    <span class="old_price">  $150.50  </span>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-3">
                                       <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="{{ route('single.product',$product->id ) }}"><img src="{{ asset('public/web') }}/assets/img/product/product3.jpg" alt=""></a>
                                            
                                                <div class="product_action">
                                                    <ul>
                                                        <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                        
                                                        <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="quick_view">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_timing">
                                                    <div data-countdown="2020/12/15"></div>
                                                </div>
                                                <div class="samll_product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="small_product_name">
                                                    <a title="Printed Summer Dress" href="{{ route('single.product',$product->id ) }}">Handbag fringilla</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> $140.00 </span>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-3">
                                       <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="{{ route('single.product',$product->id ) }}"><img src="{{ asset('public/web') }}/assets/img/product/product5.jpg" alt=""></a>
                                                <div class="product_discount">
                                                    <span>-10%</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                        
                                                        <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="quick_view">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_timing">
                                                    <div data-countdown="2020/12/15"></div>
                                                </div>
                                                <div class="samll_product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="small_product_name">
                                                    <a title="Printed Summer Dress" href="{{ route('single.product',$product->id ) }}">Printed  Dress</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> $140.00 </span>
                                                    <span class="old_price">  $150.50  </span>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-3">
                                       <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="{{ route('single.product',$product->id ) }}"><img src="{{ asset('public/web') }}/assets/img/product/product6.jpg" alt=""></a>
                                            
                                                <div class="product_action">
                                                    <ul>
                                                        <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                        
                                                        <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="quick_view">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <div class="product_timing">
                                                    <div data-countdown="2020/12/15"></div>
                                                </div>
                                                <div class="samll_product_ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="small_product_name">
                                                    <a title="Printed Summer Dress" href="{{ route('single.product',$product->id ) }}">Handbag fringilla</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> $140.00 </span>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                               
                            </div>
                        </div>
                        <!--hot deals product end-->
                        
                        <!--banner section two start-->
                        <div class="banner_area">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_banner fix">
                                        <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner6.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_banner fix">
                                        <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner7.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_banner b_three fix">
                                        <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner8.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!--banner section two nd-->
                        
                        <!--featured product area-->
                        <div class="featured_left featured_left_two mb-40">   
                            <div class="top_title">
                                <h2> Featured products</h2>
                            </div>
                            <div class="featured_produt featured_p_two">
                                <div class="featured_active_two owl-carousel">
                                    @foreach($products as $product)
                                    <div class="single_featured text-center">
                                        <div class="single_product">
                                                <div class="product_thumb">
                                                    <a href="{{ route('single.product',$product->id ) }}"><img src="{{ asset('public/web/assets/img/product/product13.jpg') }}" alt=""></a>
                                                    <div class="product_action">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="quick_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                                <div class="product_content">
                                                    <div class="samll_product_ratting text-center">
                                                        <div style="color: #999">
                                                            <span>{{ $product->name }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="small_product_name text-center">
                                                        <a title="Printed Summer Dress" href="{{ route('single.product',$product->id ) }}">{{ $product->product_name }}</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                    <span class="new_price"> ${{ $product->sale_price }} </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> 
                        <!--featured product end-->
                        
                        <!--banner section three start-->
                        <div class="featured_banner featured_bn_two mb-10">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="feature_banner_box fix">
                                        <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner15.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="feature_banner_box fix">
                                        <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner16.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="feature_banner_box b_three fix">
                                        <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner17.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--banner section three end-->
                        
                        <!--New arrivals products start-->
                        <div class="featured_left mb-40">   
                            <div class="top_title">
                                <h2> New arrivals products</h2>
                            </div>
                            <div class="featured_produt fashion_product">
                                <div class="featured_active_two owl-carousel">
                                    @foreach($newproduct as $new)
                                    <div class="single_featured text-center">
                                        <div class="single_product">
                                                <div class="product_thumb">
                                                    <a href="{{ route('single.product',$new->id ) }}"><img src="{{ asset('public/web') }}/assets/img/product/product20.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>New</span>
                                                    </div>
                                                    <div class="product_action">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="quick_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                                <div class="product_content">
                                                    <div class="samll_product_ratting">
                                                        <div style="color: #999">
                                                            <span>{{ $new->name }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="small_product_name">
                                                        <a title="Printed Summer Dress" href="{{ route('single.product',$new->id ) }}">{{ $product->product_name }}</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> ${{ $product->sale_price }} </span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> 
                        <!--New arrivals products end-->
                        
                        <!--banner section three start-->
                        <div class="banner_area">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_banner fix">
                                        <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner2.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_banner fix">
                                        <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner3.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_banner b_three fix">
                                        <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner4.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!--banner section three end-->
                        
                        <!--Trending products area start-->
                        <div class="featured_left featured_left_two mb-40">   
                            <div class="top_title">
                                <h2> Trending products</h2>
                            </div>
                            <div class="featured_produt">
                                <div class="featured_active_two owl-carousel">
                                    @foreach($discoutproduct as $discout)
                                    <div class="single_featured text-center">          
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="{{ route('single.product',$discout->id ) }}"><img style="width: 250px; height: 250px;" src="{{ asset('public/admin/product/images/'.$discout->image) }}" alt="img"></a>
                                                <div class="product_discount">
                                                    <span>Discout</span>
                                                </div>
                                                <div class="product_action">
                                                    <ul>
                                                        <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                        
                                                        <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="quick_view">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <div class="samll_product_ratting">
                                                    <div style="color: #999">
                                                        <span>{{ $discout->name }}</span>
                                                    </div>
                                                </div>
                                                <div class="small_product_name">
                                                    <a title="Printed Summer Dress" href="{{ route('single.product', $discout->id) }}">{{ $discout->product_name }}</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> ${{ $discout->offer_price }} </span>
                                                    <span class="old_price">  ${{ $discout->sale_price }}  </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> 
                        <!--Trending products area end-->
                        
                    </div>
                </div>
            </div>
        </div> 
        <!--home two block section end-->  



        
        <!--static area start-->
        <div class="static_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_static mb-30">
                            <div class="icone_static">
                                <i class="fa fa-coffee"></i>
                            </div>
                            <div class="content_static">
                                <h4>Free Delivery</h4>
                                <p>All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_static mb-30">
                            <div class="icone_static">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <div class="content_static">
                                <h4>Big Saving</h4>
                                <p>All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_static mb-30">
                            <div class="icone_static">
                                <i class="fa fa-tags"></i>
                            </div>
                            <div class="content_static">
                                <h4>Gift Vouchers</h4>
                                <p>All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_static">
                            <div class="icone_static">
                                <i class="fa fa-codepen"></i>
                            </div>
                            <div class="content_static">
                                <h4>Easy return</h4>
                                <p>All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_static">
                            <div class="icone_static">
                                <i class="fa fa-cut"></i>
                            </div>
                            <div class="content_static">
                                <h4>Save 20% When You</h4>
                                <p>All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_static">
                            <div class="icone_static">
                                <i class="fa fa-diamond"></i>
                            </div>
                            <div class="content_static">
                                <h4>Free Delivery Worldwide</h4>
                                <p>All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--static area end-->
        
             


    <!-- shipping area start -->

        <div class="shipping_area mb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single_shipping">
                            <div class="shippin_icone">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="shipping_content">
                                <h3>Free shipping on orders over $100</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_shipping">
                            <div class="shippin_icone">
                                <i class="fa fa-history"></i>
                            </div>
                            <div class="shipping_content">
                                <h3>30-day returns money back guarantee</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_shipping box3">
                            <div class="shippin_icone">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="shipping_content">
                                <h3>24/7 online support consultations</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- shipping area end -->


@endsection



