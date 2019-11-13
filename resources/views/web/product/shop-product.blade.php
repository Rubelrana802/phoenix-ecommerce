@extends('web.master')

@section('title')
  Shop product
@endsection

@section('content')  

        <!--categorie details start-->
        <div class="categorie_details sidebar_direction">
            <div class="container">
                <div class="row"> 
                    <div class="col-lg-9 col-md-12">
                        <div class="categorie_d_right">
                            <div class="shop_fullwidth_img right_sidebar mb-40">
                                <img src="{{ asset('public/web') }}/assets/img/slider/slider9.jpg" alt="">
                            </div>
                            <div class="categorie__name mb-20 fix">
                                <h2>shop</h2>
                            </div>
                            <div class="categorie_product_toolbar mb-30">
                                <div class="categorie_product_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <form action="#">
                                    <label>Sort By</label>
                                    <select name="orderby" id="short">
                                        <option selected value="1">Default sorting</option>
                                        <option value="1">Sort by popularity</option>
                                        <option value="1">Sort by average rating</option>
                                        <option value="1">Sort by rating</option>
                                        <option value="1">Sort by price: low to high</option>
                                        <option value="1">Sort by price: high to low</option>
                                        <option value="1">Price: Lowest first</option>
                                        <option value="1">Product Name: A to Z</option>
                                        <option value="1">In stock</option>
                                        <option value="1">Reference: Lowest first</option>
                                        <option value="1">Reference: Highest first</option>
                                    </select>
                                </form>
                                <p>Showing 1–12 of 46 results</p>
                            </div>
                            
                            
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="large" role="tabpanel">
                                    <div class="row cate_tab_product">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product11.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Dignissim venenatis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product12.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Aliquam lobortis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product27.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Dignissim venenatis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6"> 
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product28.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Aliquam lobortis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product29.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Dignissim venenatis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product30.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Aliquam lobortis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product31.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Dignissim venenatis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product32.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Aliquam lobortis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product33.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Dignissim venenatis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product34.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Aliquam lobortis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product35.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Dignissim venenatis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="single_product categorie">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product36.jpg" alt=""></a>
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
                                                        <a title="Printed Summer Dress" href="single-product.html">Aliquam lobortis</a>
                                                    </div>
                                                    <div class="small_product_price">
                                                        <span class="new_price"> $140.00 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="tab-pane fade" id="list" role="tabpanel">
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product44.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product14.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product15.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product16.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product17.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product18.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product19.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product20.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product21.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product22.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product23.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single_product categorie">   
                                        <div class="row cate_tab_product">
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/product/product24.jpg" alt=""></a>
                                                    <div class="product_discount">
                                                        <span>-10%</span>
                                                    </div>

                                                    <div class="quick_view categorie_view">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-search"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6">
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
                                                    <div class="small_product_name categorie_name">
                                                        <a title="Printed Summer Dress" href="single-product.html"> Faded Short Sleeves T-shirt </a>
                                                    </div>
                                                    <div class="small_product_price categorie_prie mb-10">
                                                        <span class="new_price"> $140.00 </span>
                                                        <span class="old_price">  $150.50  </span>
                                                    </div>
                                                    <div class="single__product_drsc">
                                                        <p> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    </div>
                                                    <div class="product_action action_categorie mb-10">
                                                        <ul>
                                                            <li><a href="#" title=" Add to Wishlist "><i class="fa fa-heart"></i></a></li>
                                                            
                                                            <li><a href="#" title=" Add to cart "><i class="fa fa-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_in_stock">
                                                        <span> In stock </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                </div>
                            </div>
                            
                            <div class="page_numbers_toolbar">
                                <ul>
                                    <li><a class="current_page" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a class="next_page" href="#">next</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="sidebar_categorie_area">
                           <div class="categories_menu categorie_page_menu right_categorie mb-30">
                                <div class="categories_title ca_title_two">
                                    <h2 class="categori_toggle"><img src="{{ asset('public/web') }}/assets/img/logo/categorie.png" alt=""> All categories</h2>
                                </div>
                                <div class="categories_menu_inner categorie_sidebar_inner">
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
                                            <ul class="categories_mega_menu  hobbies">
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
                            
                            <div class="sidebar_categorie_item">
                                <div class="categorie__titile">
                                    <h2>Manufacturer</h2>
                                </div>
                                <div class="categorie_filter">
                                    <ul>
                                        <li>
                                            <input id="fashion" type="checkbox">
                                            <label for="fashion">Fashion Manufacturer <span>(14)</span></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar_categorie_item">
                                <div class="categorie__titile">
                                    <h2>Price</h2>
                                </div>
                                <div class="categorie_filter">
                                    <div class="ca_search_filters">
                                       <label for="amount"> Range:</label>
                                        <input type="text" name="text" id="amount" />  
                                        <div id="slider-range"></div>   
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar_categorie_item">
                                <div class="categorie__titile">
                                    <h2>Size</h2>
                                </div>
                                <div class="categorie_filter">
                                    <ul>
                                        <li>
                                            <input id="size1" type="checkbox">
                                            <label for="size1">S <span>(14)</span></label>
                                        </li>
                                        <li>
                                            <input id="size2" type="checkbox">
                                            <label for="size2">M <span>(12)</span></label>
                                        </li>
                                        <li>
                                            <input id="size3" type="checkbox">
                                            <label for="size3">L<span>(11)</span></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_banner right_sidebar fix mb-30">
                                <a href="#"><img src="{{ asset('public/web') }}/assets/img/banner/banner1.jpg" alt=""></a>
                            </div>
                             <div class="top_sellers top_seller_two featured mb-40">
                                <div class="top_title">
                                    <h2> Bestseller</h2>
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
                                                    <a title="Printed Summer Dress" href="single-product.html">Faded T-shirt</a>
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
                                        <div class="small_product">
                                            <div class="small_product_thumb">
                                                <a href="single-product.html"><img src="{{ asset('public/web') }}/assets/img/cart/cart5.jpg" alt=""></a>
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
                                                    <a title="Printed Summer Dress" href="single-product.html">Summer Dress</a>
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
                                                    <a title="Printed Summer Dress" href="single-product.html">Summer Dress</a>
                                                </div>
                                                <div class="small_product_price">
                                                    <span class="new_price"> $27.00 </span>
                                                    <span class="old_price">  $30.50  </span>
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
                                                    <a title="Printed Summer Dress" href="single-product.html">Printed Dress</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--categorie details end-->

@endsection