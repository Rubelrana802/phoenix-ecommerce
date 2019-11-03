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
                                <h2 class="categori_toggle"><img src="{{ asset('public/web') }}/assets/img/logo/categorie.png" alt=""> All categories</h2>
                            </div>
                            <div class="categories_menu_inner">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Electronics <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu">
                                            <li><a href="#">Laptops</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Dell Laptops</a></li>
                                                        <li><a href="#">HP Laptops</a></li>
                                                        <li><a href="#">Lenovo Laptops</a></li>
                                                        <li><a href="#">Apple Laptops</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Camera</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">Camcorders</a></li>
                                                        <li><a href="#">Photo Accessories</a></li>
                                                        <li><a href="#">Memory Cards</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Smart Phone</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">Apple Phones</a></li>
                                                        <li><a href="#">Samsung Phones</a></li>
                                                        <li><a href="#">Motorola Phones</a></li>
                                                        <li><a href="#">Lenovo Phones</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Television</a>
                                                <div class="categorie_sub_menu">
                                                    <ul>
                                                        <li><a href="#">All-in-One Computers</a></li>
                                                        <li><a href="#">Towers Only</a></li>
                                                        <li><a href="#">Refurbished Desktops</a></li>
                                                        <li><a href="#">Gaming Desktops</a></li>
                                                    </ul>
                                                </div>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Fashion  <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu">
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
                                        <ul class="categories_mega_menu decor">
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
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Girls' Toys</a>
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
                                <div class="single_slider" style="background-image: url({{ asset('public/web') }}/assets/img/slider/slider1.jpg)">
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                                            <div class="slider_content">
                                                <h1>Elegant <br>Bags </h1>
                                                <div class="slider_desc">
                                                    <p>Lorem ipsum dolor sit amet, ex <br> eam mundi populo accusamus, aliquam </p>
                                                </div>
                                                <div class="slider_discount">
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> Save up to 10% off</li>
                                                        <li><i class="fa fa-check"></i>  Free Shipping</li>
                                                        <li><i class="fa fa-check"></i>   Start at $99.00</li>
                                                    </ul>
                                                </div>
                                                <div class="slider_button">
                                                    <a href="#">shop it! </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_slider" style="background-image: url({{ asset('public/web') }}/assets/img/slider/slider2.jpg)">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="slider_content sale">
                                                <h2>Tablets </h2>
                                                <h1>Sale </h1>
                                                <div class="slider_desc_up ">
                                                    <p>Up to 40 % off on all tablets </p>
                                                </div>
                                                <div class="slider_button">
                                                    <a href="#">shop it! </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-4">
                        <div class="top_sellers">
                            <div class="top_title">
                                <h2> Top sellers</h2>
                            </div>
                            <div class="small_product_active owl-carousel">
                                <div class="small_product_item">
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/cart/cart13.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="single-product.html">Printed Summer</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/cart/cart1.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="single-product.html">Short T-shirt</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/cart/cart2.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="single-product.html">Printed Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/cart/cart3.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="single-product.html">Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="small_product_item">
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/cart/cart4.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="single-product.html">Printed  Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/cart/cart10.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="single-product.html">Printed Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/cart/cart8.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="single-product.html"> Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/cart/cart7.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="single-product.html">Printed  Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>   
                                </div>  
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    <!--baner slide end-->


    <!-- product area start -->

        <div class="product_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="product_inner">
                            <div class="top_title">
                                <h2> hot deals</h2>
                            </div>
                            <div class="row">
                                <div class="product_active owl-carousel">
                                   <div class="col-lg-3">
                                       <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product1.jpg" alt=""></a>
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
                                                    <a title="Printed Summer Dress" href="{{ route('single.product') }}">Printed Summer Dress</a>
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
                                                <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product2.jpg" alt=""></a>
                                                
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
                                                    <a title="Printed Summer Dress" href="{{ route('single.product') }}">Handbag fringilla</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> $145.00 </span>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-3">
                                       <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product4.jpg" alt=""></a>
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
                                                    <a title="Printed Summer Dress" href="{{ route('single.product') }}">Handbag lobortis</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> $130.00 </span>
                                                    <span class="old_price">  $140.50  </span>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-3">
                                       <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product3.jpg" alt=""></a>
                                            
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
                                                    <a title="Printed Summer Dress" href="{{ route('single.product') }}">Printed Summer Dress</a>
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
                                                <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product5.jpg" alt=""></a>
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
                                                    <a title="Printed Summer Dress" href="{{ route('single.product') }}">Aliquam lobortis</a>
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
                                                <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product6.jpg" alt=""></a>
                                            
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
                                                    <a title="Printed Summer Dress" href="{{ route('single.product') }}">Summer Dress</a>
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
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="product_banner fix">
                            <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product area end-->
        
        <!--banner area start-->
        <div class="banner_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single_banner fix">
                            <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_banner fix">
                            <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner3.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_banner fix">
                            <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner4.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--banner area end-->
        
        <!--home block section start-->
        <div class="home_block_seciton">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                      
                       <!--featured product area start-->
                        <div class="featured_left mb-40">   
                            <div class="top_title">
                                <h2> shop by electronic</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="hot_category" style="background-image: url({{ asset('public/web') }}/assets/img/banner/banner11.jpg)">
                                        <h2>Hot Category</h2>
                                        <ul>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">TV, Audio & Home Theater</a></li>
                                            <li><a href="#">Camera, Photo & Video</a></li>
                                            <li><a href="#">Computers & Accessories</a></li>
                                            <li><a href="#">Cell Phones & Accessories</a></li>
                                            <li><a href="#">Business & Office Electronics</a></li>
                                            <li><a href="#">Software</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="featured_produt">
                                        <div class="featured_active owl-carousel">
                                            <div class="single_featured">
                                                <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product13.jpg" alt=""></a>
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
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="small_product_name">
                                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Aliquam lobortis</a>
                                                            </div>
                                                            <div class="small_product_price">
                                                                <span class="new_price"> $140.00 </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product14.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim venenatis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $130.00 </span>
                                                            <span class="old_price">  $140.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product7.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">The Shirt Women</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product8.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Pellentesque men</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product9.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">The Shirt Women</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $130.00 </span>
                                                        </div>
                                                    </div>
                                                 </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product10.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Pellentesque men</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product11.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim furniture</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product12.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim venenatis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $145.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--featured product area end--> 
                        
                        <!-- fashion product area start-->
                        <div class="featured_left mb-40">   
                            <div class="top_title">
                                <h2> shop by fashion</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="hot_category" style="background-image: url({{ asset('public/web') }}/assets/img/banner/banner12.jpg)">
                                        <h2>Hot Category</h2>
                                        <ul>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">TV, Audio & Home Theater</a></li>
                                            <li><a href="#">Camera, Photo & Video</a></li>
                                            <li><a href="#">Computers & Accessories</a></li>
                                            <li><a href="#">Cell Phones & Accessories</a></li>
                                            <li><a href="#">Business & Office Electronics</a></li>
                                            <li><a href="#">Software</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="featured_produt fashion_product">
                                        <div class="featured_active owl-carousel">
                                            <div class="single_featured">
                                                <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product20.jpg" alt=""></a>
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
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="small_product_name">
                                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Aliquam lobortis</a>
                                                            </div>
                                                            <div class="small_product_price">
                                                                <span class="new_price"> $140.00 </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product23.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim venenatis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product21.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">coat men</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $130.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product24.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">hangbag feugiat</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $130.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product22.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">coat men</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                 </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product25.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim venenatis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product26.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">coat men</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product27.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim furniture</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $135.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- fashion product area end--> 
                        
                        <!--Furnitured product start-->
                         <div class="featured_left mb-40">   
                            <div class="top_title">
                                <h2> Furnitured & Decor</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="hot_category" style="background-image: url({{ asset('public/web') }}/assets/img/banner/banner13.jpg)">
                                        <h2>Hot Category</h2>
                                        <ul>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">TV, Audio & Home Theater</a></li>
                                            <li><a href="#">Camera, Photo & Video</a></li>
                                            <li><a href="#">Computers & Accessories</a></li>
                                            <li><a href="#">Cell Phones & Accessories</a></li>
                                            <li><a href="#">Business & Office Electronics</a></li>
                                            <li><a href="#">Software</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="featured_produt">
                                        <div class="featured_active owl-carousel">
                                            <div class="single_featured">
                                                <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product4.jpg" alt=""></a>
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
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="small_product_name">
                                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">all furniture</a>
                                                            </div>
                                                            <div class="small_product_price">
                                                                <span class="new_price"> $140.00 </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product9.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">lamp venenatis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product29.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Aliquam lobortis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product30.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim venenatis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product31.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">chair furniture</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $145.00 </span>
                                                        </div>
                                                    </div>
                                                 </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product32.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim furniture</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product33.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Aliquam lobortis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product34.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">chair venenatis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $130.00 </span>
                                                            <span class="old_price">  $140.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                 
                        <!--Furnitured product end--> 
                        
                        <!--kids & toys product start-->
                        <div class="featured_left mb-40">   
                            <div class="top_title">
                                <h2> shop by kids & toys</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="hot_category" style="background-image: url({{ asset('public/web') }}/assets/img/banner/banner14.jpg)">
                                        <h2>Hot Category</h2>
                                        <ul>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">TV, Audio & Home Theater</a></li>
                                            <li><a href="#">Camera, Photo & Video</a></li>
                                            <li><a href="#">Computers & Accessories</a></li>
                                            <li><a href="#">Cell Phones & Accessories</a></li>
                                            <li><a href="#">Business & Office Electronics</a></li>
                                            <li><a href="#">Software</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="featured_produt fashion_product">
                                        <div class="featured_active owl-carousel">
                                            <div class="single_featured">
                                                <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product35.jpg" alt=""></a>
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
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="small_product_name">
                                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">caoreet lobortis</a>
                                                            </div>
                                                            <div class="small_product_price">
                                                                <span class="new_price"> $140.00 </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product36.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim venenatis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $135.00 </span>
                                                            <span class="old_price">  $140.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product37.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">chair furniture</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product38.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim furniture</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product39.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Aliquam lobortis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                 </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product20.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim venenatis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_featured">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product19.jpg" alt=""></a>
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
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="small_product_name">
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">caroeet lobortis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/product/product13.jpg" alt=""></a>
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
                                                            <a title="Printed Summer Dress" href="{{ route('single.product') }}">Dignissim venenatis</a>
                                                        </div>
                                                        <div class="small_product_price">
                                                            <span class="new_price"> $140.00 </span>
                                                            <span class="old_price">  $150.50  </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!--kids & toys product end-->
                        
                    </div>
                    <div class="col-lg-3 col-md-4">
                       
                        <!--featured small product start-->
                        <div class="top_sellers featured mb-40">
                            <div class="top_title">
                                <h2>  Featured</h2>
                            </div>
                            <div class="small_product_active owl-carousel">
                                <div class="small_product_item">
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart13.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Printed Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart1.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Faded T-shirt</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart2.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Printed Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart3.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart5.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">hanbag elit </a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="small_product six">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart6.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                                <div class="small_product_item">
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart4.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Printed Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart10.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">hanbag elit</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart8.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}"> Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart7.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}"> hanbag justo </a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart8.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Printed  Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product six">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart9.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>     
                                </div>  
                            </div>
                        </div>
                        <!--featured small product end-->
                        
                        <!--banner section start-->
                        <div class="featured_banner mb-40">
                            <div class="feature_banner_box fix">
                                <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner6.jpg" alt=""></a>
                            </div>
                            <div class="feature_banner_box fix">
                                <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner7.jpg" alt=""></a>
                            </div>
                            <div class="feature_banner_box fix">
                                <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner8.jpg" alt=""></a>
                            </div>
                        </div>
                        <!--banner section end-->
                        
                        <!--arrivals small product start-->
                        <div class="top_sellers featured mb-40">
                            <div class="top_title">
                                <h2>  new arrivals</h2>
                            </div>
                            <div class="small_product_active owl-carousel">
                                <div class="small_product_item">
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart13.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Printed Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart1.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Short T-shirt</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart2.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Printed Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart3.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">hanbag elit </a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart5.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="small_product six">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart6.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                                <div class="small_product_item">
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart4.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Printed Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart10.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}"> Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart8.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Printed Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart7.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">hanbag justo</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart8.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}"> Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small_product six">
                                        <div class="small_product_thumb">
                                            <a href="{{ route('single.product') }}"><img src="{{ asset('public/web') }}/assets/img/cart/cart9.jpg" alt=""></a>
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
                                                <a title="Printed Summer Dress" href="{{ route('single.product') }}">Printed Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $27.00 </span>
                                                <span class="old_price">  $30.50  </span>
                                            </div>
                                        </div>
                                    </div>     
                                </div>  
                            </div>
                        </div>
                        <!--arrivals small product end-->
                        
                        <!--banner section two start-->
                        <div class="featured_banner">
                            <div class="feature_banner_box fix">
                                <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner15.jpg" alt=""></a>
                            </div>
                            <div class="feature_banner_box fix">
                                <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner16.jpg" alt=""></a>
                            </div>
                            <div class="feature_banner_box fix">
                                <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner17.jpg" alt=""></a>
                            </div>
                        </div>
                        <!--banner section two end-->
                        
                    </div>
                </div>
            </div>    
        </div>
        <!--home block section end-->
        
        <!--brand logo area start-->
        <!-- <div class="brand_logo mb-40">
           <div class="container">
               <div class="row brand_padding">
                   <div class="brand_active owl-carousel">
                       <div class="col-lg-2">
                           <div class="single_brand">
                               <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand1.jpg" alt=""></a>
                           </div>
                       </div>
                       <div class="col-lg-2">
                           <div class="single_brand">
                               <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand2.jpg" alt=""></a>
                           </div>
                       </div>
                       <div class="col-lg-2">
                           <div class="single_brand">
                               <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand3.jpg" alt=""></a>
                           </div>
                       </div>
                       <div class="col-lg-2">
                           <div class="single_brand">
                               <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand4.jpg" alt=""></a>
                           </div>
                       </div>
                       <div class="col-lg-2">
                           <div class="single_brand">
                               <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand5.jpg" alt=""></a>
                           </div>
                       </div>
                       <div class="col-lg-2">
                           <div class="single_brand">
                               <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand6.jpg" alt=""></a>
                           </div>
                       </div>
                       <div class="col-lg-2">
                           <div class="single_brand">
                               <a href="#"><img src="{{ asset('public/web') }}/assets/img/brand/brand4.jpg" alt=""></a>
                           </div>
                       </div>
                      
                   </div>
               </div>
           </div> 
        </div> -->
        <!--brand logo area end-->

                <!-- shipping area shart -->


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



