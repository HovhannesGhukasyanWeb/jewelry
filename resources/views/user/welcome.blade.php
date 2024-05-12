<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<link rel="icon" href="img/favicon.png" />
         Place favicon.ico in the root directory -->
    <!-- google-font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ asset("css/jquery-ui.min.css") }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset("css/meanmenu.min.css") }}">
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="{{ asset("css/nivo-slider.css") }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.css") }}">
    <!--linearicons css -->
    <link rel="stylesheet" href="{{ asset("css/linearicons-icon-font.min.css") }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset("css/responsive.css") }}" />

</head>

<body>

    <header>
        <div class="header-top-area ptb-10 hidden-xs header-top-area-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="header-top-right header-top-left-4">
                            <p>FREE SHIPPING ON ORDERS OVER 50.000 AMD</p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-7 header-top-right-4">

                        <div class="header-top-left">
                            <ul>
                                <li class="click_menu"><a href="#">My Account <i class="fa fa-angle-down"></i></a>
                                    <ul class="click_menu_show">
                                        <li><a href="customer-login.html">Compare Products</a></li>
                                        <li><a href="customer-login.html">My Account</a></li>
                                        <li><a href="wishlist.html">My Wish List</a></li>
                                        <li><a href="customer-login.html">Sign In</a></li>
                                    </ul>
                                </li>
                                <li><a href="customer-account.html">Create an Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area home-page-2 ptb-10">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="menu-search-box scnd-fix">
                            <form action="#">
                                <input type="text" placeholder="Search here..." />
                                <button><span class="lnr lnr-magnifier"></span></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="logo logo2">
                            <a href="index.html"><img src="{{ asset("img/logo-4.png") }}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                        <div class="header-bottom-right-4-inner">
                            <a href="#"><span class="lnr lnr-heart"></span></a>
                        </div>
                        <div class="header-bottom-right header-bottom-right-4">
                            <div class="shop-cart shop-cart-4">
                                <a href="#"><span class="lnr lnr-cart"></span></a>
                            </div>
                            <div class="shop-cart-hover shop-cart-hover-4 fix">
                                <ul>
                                    <li>
                                        <div class="cart-img">
                                            <a href="#"><img src="{{ asset("img/cart/1.jpg") }}" alt="" /></a>
                                        </div>
                                        <div class="cart-content">
                                            <h4><a href="#">1 x Faded...</a></h4>
                                            <span><a href="#">S, Orange</a></span>
                                            <span class="cart-price">25.000 AMD</span>
                                        </div>
                                        <div class="cart-del">
                                            <i class="fa fa-times-circle"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-img">
                                            <a href="#"><img src="{{ asset("img/cart/1.jpg") }}" alt="" /></a>
                                        </div>
                                        <div class="cart-content">
                                            <h4><a href="#">1 x Faded...</a></h4>
                                            <span><a href="#">S, Orange</a></span>
                                            <span class="cart-price">25.000 AMD</span>
                                        </div>
                                        <div class="cart-del">
                                            <i class="fa fa-times-circle"></i>
                                        </div>
                                    </li>
                                    <li class="total-price"><span> Total 35.000 AMD </span></li>
                                    <li class="checkout-bg">
                                        <a href="checkout.html">checkout <i class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- mainmenu-area-start -->
    <div class="mainmenu-area home-page-2 mainmenu-area-4" id="main_h">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mainmenu hidden-xs">
                        <!-- 	<nav>
								<ul>
									<li><a href="shop.html">Women</a>
										<div class="megamenu">
											<span>
												<a href="#" class="megatitle">EXCUTIVE MODULAR  TABLES</a>
												<a href="#">EXECUTIVE TRADITIONAL TABLES</a>
												<a href="#">COMPUTER TABLES</a>
												<a href="#">STEEL TABLES</a>
												<a href="#">ACCESSORIES</a>
												
											</span>
											<span>
												<a href="#" class="megatitle">Nightstands</a>
												<a href="#">Brown Finish</a>
												<a href="#">Distressed</a>
												<a href="#">Cherry Finish</a>
												<a href="#">Weathered</a>
												<a href="#">Laundry</a>
											</span>
											<span>
												<a href="#" class="megatitle">Headboards</a>
												<a href="#">Upholstered</a>
												<a href="#">Tufted</a>
												<a href="#">Storage</a>
												<a href="#">padded</a>
												<a href="#">Outdoor</a>
											</span>
										</div>
									</li>
									<li><a href="shop.html">Kids</a>
										<div class="megamenu">
											<span>
												<a href="#" class="megatitle">EXCUTIVE MODULAR  TABLES</a>
												<a href="#">EXECUTIVE TRADITIONAL TABLES</a>
												<a href="#">COMPUTER TABLES</a>
												<a href="#">STEEL TABLES</a>
												<a href="#">ACCESSORIES</a>
												
											</span>
											<span>
												<a href="#" class="megatitle">Nightstands</a>
												<a href="#">Brown Finish</a>
												<a href="#">Distressed</a>
												<a href="#">Cherry Finish</a>
												<a href="#">Weathered</a>
												<a href="#">Laundry</a>
											</span>
											<span>
												<a href="#" class="megatitle">Headboards</a>
												<a href="#">Upholstered</a>
												<a href="#">Tufted</a>
												<a href="#">Storage</a>
												<a href="#">padded</a>
												<a href="#">Outdoor</a>
											</span>
										</div>
									</li>
									<li><a href="shop.html">Artificial Jewellery</a>
										<div class="megamenu megamenu2 living-megamenu">
											<span>
												<a href="#" class="megatitle">Living Chairs</a>
												<a href="#">mattress</a>
												<a href="#">bunk bed</a>
												<a href="#">Weathered</a>
												<a href="#">sideboard</a>
												<a href="#">Dresses</a>
											</span>
											<span>
												<a href="#" class="megatitle">Bootees Bags</a>
												<a href="#">Brown Finish</a>
												<a href="#">Distressed</a>
												<a href="#">Tufted</a>
												<a href="#">Cherry Finish</a>
												<a href="#">Weathered</a>											
											</span>
											<span>
												<a href="#" class="megatitle">Headboards</a>
												<a href="#">Upholstered</a>
												<a href="#">Tufted</a>
												<a href="#">Storage</a>
												<a href="#">Sweaters</a>
												<a href="#">padded</a>											
											</span>
											<span>
												<a href="#" class="megatitle">Headboards</a>
												<a href="#">Upholstered</a>
												<a href="#">Tufted</a>
												<a href="#">Storage</a>
												<a href="#">Wedges</a>
												<a href="#">padded</a>											
											</span>
										</div>									
									</li>
									<li><a href="shop.html">Footware</a>
										<div class="megamenu dining-megamenu">
											<span>
												<a href="#" class="megatitle">Dining tables</a>
												<a href="#">Crochet</a>
												<a href="#">Sleeveless</a>
												<a href="#">Stripes</a>
												<a href="#">Sweaters</a>
											</span>
											<span>
												<a href="#" class="megatitle">Dining chairs</a>
												<a href="#">Dining chairs</a>
												<a href="#">Ankle</a>
												<a href="#">Cherry Finish</a>
												<a href="#">Weathered</a>
											</span>
											<span>
												<a href="#" class="megatitle">Dining sets</a>
												<a href="#">Upholstered</a>
												<a href="#">Tufted</a>
												<a href="#">Footwear</a>
												<a href="#">Wedges</a>
											</span>
										</div>									
									</li>
									<li><a href="shop.html">Accessories</a>
										<div class="megamenu dining-megamenu">
											<span>
												<a href="#" class="megatitle">Dining tables</a>
												<a href="#">Crochet</a>
												<a href="#">Sleeveless</a>
												<a href="#">Stripes</a>
												<a href="#">Sweaters</a>
											</span>
											<span>
												<a href="#" class="megatitle">Dining chairs</a>
												<a href="#">Dining chairs</a>
												<a href="#">Ankle</a>
												<a href="#">Cherry Finish</a>
												<a href="#">Weathered</a>
											</span>
											<span>
												<a href="#" class="megatitle">Dining sets</a>
												<a href="#">Upholstered</a>
												<a href="#">Tufted</a>
												<a href="#">Footwear</a>
												<a href="#">Wedges</a>
											</span>
										</div>									
									</li>
-->

                        <li><a href="#"></a>
                            <ul>
                                <li><a href="wishlist.html">my wishlist</a></li>
                                <li><a href="cart.html">cart page</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                                <li><a href="product-details.html">product-details</a></li>
                                <li><a href="user_accountpage.html">User account</a></li>
                                <li><a href="customer-login.html">login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="shop.html">shop </a></li>
                                <li><a href="contact.html">contact us</a></li>
                            </ul>
                        </li>




                        <li><a href="contact.html">contact</a></li>

                        </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="active"><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">home version 1</a></li>
                                        <li><a href="index-2.html">home version 2</a></li>
                                        <li><a href="index-3.html">home version 3</a></li>
                                        <li><a href="index-4.html">home version 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Bedroom</a>
                                    <ul>
                                        <li><a href="#">Beds</a>
                                            <ul>
                                                <li><a href="#">Platform Beds</a></li>
                                                <li><a href="#">Storage Beds</a></li>
                                                <li><a href="#">Regular Beds</a></li>
                                                <li><a href="#">Sleigh Beds</a></li>
                                                <li><a href="#">modern beds</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Nightstands</a>
                                            <ul>
                                                <li><a href="#">Brown Finish</a></li>
                                                <li><a href="#">Distressed</a></li>
                                                <li><a href="#">Cherry Finish</a></li>
                                                <li><a href="#">Weathered</a></li>
                                                <li><a href="#">Laundry</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Headboards</a>
                                            <ul>
                                                <li><a href="#">Upholstered</a></li>
                                                <li><a href="#">Tufted</a></li>
                                                <li><a href="#">Platform Beds</a></li>
                                                <li><a href="#">Platform Beds</a></li>
                                                <li><a href="#">Platform Beds</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Living Room </a>
                                    <ul>
                                        <li><a href="#">Beds</a>
                                            <ul>
                                                <li><a href="#">Platform Beds</a></li>
                                                <li><a href="#">Storage Beds</a></li>
                                                <li><a href="#">Regular Beds</a></li>
                                                <li><a href="#">Sleigh Beds</a></li>
                                                <li><a href="#">modern beds</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Nightstands</a>
                                            <ul>
                                                <li><a href="#">Brown Finish</a></li>
                                                <li><a href="#">Distressed</a></li>
                                                <li><a href="#">Cherry Finish</a></li>
                                                <li><a href="#">Weathered</a></li>
                                                <li><a href="#">Laundry</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Headboards</a>
                                            <ul>
                                                <li><a href="#">Upholstered</a></li>
                                                <li><a href="#">Tufted</a></li>
                                                <li><a href="#">Platform Beds</a></li>
                                                <li><a href="#">Platform Beds</a></li>
                                                <li><a href="#">Platform Beds</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Headboards</a>
                                            <ul>
                                                <li><a href="#">Upholstered</a></li>
                                                <li><a href="#">Tufted</a></li>
                                                <li><a href="#">Platform Beds</a></li>
                                                <li><a href="#">Platform Beds</a></li>
                                                <li><a href="#">Platform Beds</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Dining Room</a>
                                    <ul>
                                        <li><a href="#">Dining tables</a>
                                            <ul>
                                                <li><a href="#">Crochet</a></li>
                                                <li><a href="#">Sleeveless</a></li>
                                                <li><a href="#">Regular Beds</a></li>
                                                <li><a href="#">Stripes</a></li>
                                                <li><a href="#">Sweaters</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Dining chairs</a>
                                            <ul>
                                                <li><a href="#">Ankle</a></li>
                                                <li><a href="#">Distressed</a></li>
                                                <li><a href="#">Cherry Finish</a></li>
                                                <li><a href="#">Weathered</a></li>
                                                <li><a href="#">Laundry</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Headboards</a>
                                            <ul>
                                                <li><a href="#">Upholstered</a></li>
                                                <li><a href="#">Tufted</a></li>
                                                <li><a href="#">Phery Finiss</a></li>
                                                <li><a href="#">Platform Beds</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">pages</a>
                                    <ul>
                                        <li><a href="wishlist.html">my wishlist</a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="product-details.html">product-details</a></li>
                                        <li><a href="user_accountpage.html">User account</a></li>
                                        <li><a href="customer-login.html">login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="shop.html">shop </a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                                <li><a href="blog.html">blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mainmenu-area-end -->
    <!-- slider-area-start -->

    <!-- slider-area-end -->
    <!-- service-area-start -->

    <!-- service-area-end -->
    <div class="new-product-area hot-deal-area dotted-5 new-product-4 pt-80">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="section-title section-title-4">
                        <h2>New Products</h2>
                    </div>
                    <div class="row">
                        <div class="new-product-home-4-active">
                            <div class="col-lg-12">
                                <div class="single-new-product">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{ asset("img/product/1.jpg") }}" class="first_img" alt="" />

                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <a href="product-details.html">
                                            <h3>Beaumont Summit</h3>
                                        </a>
                                        <div class="product-price-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                            <h4>55.000 AMD</h4>
                                            <h3 class="del-price"><del>65.000 AMD</del></h3>
                                        </div>
                                    </div>
                                    <div class="product-icon-wrapper">
                                        <div class="product-icon">
                                            <ul>
                                                <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-new-product">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{ asset("img/product/2.jpg") }}" class="first_img" alt="" />

                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <a href="product-details.html">
                                            <h3>Beaumont Summit</h3>
                                        </a>
                                        <div class="product-price-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h4>45.000 AMD</h4>
                                    </div>
                                    <div class="product-icon-wrapper">
                                        <div class="product-icon">
                                            <ul>
                                                <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-new-product">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{ asset("img/product/4.jpg") }}" class="first_img" alt="" />

                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <a href="product-details.html">
                                            <h3>Beaumont Summit</h3>
                                        </a>
                                        <div class="product-price-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h4>56.000 AMD</h4>
                                    </div>
                                    <div class="product-icon-wrapper">
                                        <div class="product-icon">
                                            <ul>
                                                <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-new-product">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{ asset("img/product/6.jpg") }}" class="first_img" alt="" />

                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <a href="product-details.html">
                                            <h3>Beaumont Summit</h3>
                                        </a>
                                        <div class="product-price-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                            <h4>35.000 AMD</h4>
                                            <h3 class="del-price"><del>45.000 AMD</del></h3>
                                        </div>
                                    </div>
                                    <div class="product-icon-wrapper">
                                        <div class="product-icon">
                                            <ul>
                                                <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-new-product">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{ asset("img/product/8.jpg") }}" class="first_img" alt="" />

                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <a href="product-details.html">
                                            <h3>Beaumont Summit</h3>
                                        </a>
                                        <div class="product-price-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                            <h4>36.000 AMD</h4>
                                            <h3 class="del-price"><del>45.000 AMD</del></h3>
                                        </div>
                                    </div>
                                    <div class="product-icon-wrapper">
                                        <div class="product-icon">
                                            <ul>
                                                <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-new-product">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{ asset("img/product/1.jpg") }}" class="first_img" alt="" />

                                        </a>
                                    </div>
                                    <div class="product-content text-center">
                                        <a href="product-details.html">
                                            <h3>Beaumont Summit</h3>
                                        </a>
                                        <div class="product-price-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                            <h4>39.000 AMD</h4>
                                            <h3 class="del-price"><del>55.000 AMD</del></h3>
                                        </div>
                                    </div>
                                    <div class="product-icon-wrapper">
                                        <div class="product-icon">
                                            <ul>
                                                <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                                <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-static-banner">
                                <div class="single-static-img">
                                    <a href="bedroom.html"><img src="{{ asset("img/banner/ads-middle-grand4.jpg") }}"
                                            alt="" /></a>
                                    <div class="single-static-text single-static-text-4">
                                        <h3>The world's most popular office sofa</h3>
                                        <span>Over 1.3 Million Sold Worldwide</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--new-product-area-start -->
    <div class="new-product-area hot-deal-area dotted-5 new-product-4 ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title section-title-4 section_4">
                        <h2>featured products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="new-product-home-2-active">
                    <div class="col-lg-12">
                        <div class="single-new-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset("img/product/1.jpg") }}" class="first_img" alt="" />

                                </a>
                            </div>
                            <div class="product-content text-center">
                                <a href="product-details.html">
                                    <h3>Beaumont Summit</h3>
                                </a>
                                <div class="product-price-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price">
                                    <h4>45.000 AMD</h4>
                                    <h3 class="del-price"><del>60.000 AMD</del></h3>
                                </div>
                            </div>
                            <div class="product-icon-wrapper">
                                <div class="product-icon">
                                    <ul>
                                        <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-new-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset("img/product/2.jpg") }}" class="first_img" alt="" />

                                </a>
                            </div>
                            <div class="product-content text-center">
                                <a href="product-details.html">
                                    <h3>Beaumont Summit</h3>
                                </a>
                                <div class="product-price-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h4>40.000 AMD</h4>
                            </div>
                            <div class="product-icon-wrapper">
                                <div class="product-icon">
                                    <ul>
                                        <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-new-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset("img/product/4.jpg") }}" class="first_img" alt="" />

                                </a>
                            </div>
                            <div class="product-content text-center">
                                <a href="product-details.html">
                                    <h3>Beaumont Summit</h3>
                                </a>
                                <div class="product-price-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h4>30.000 AMD</h4>
                            </div>
                            <div class="product-icon-wrapper">
                                <div class="product-icon">
                                    <ul>
                                        <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-new-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset("img/product/6.jpg") }}" class="first_img" alt="" />
                                </a>
                            </div>
                            <div class="product-content text-center">
                                <a href="product-details.html">
                                    <h3>Beaumont Summit</h3>
                                </a>
                                <div class="product-price-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price">
                                    <h4>40.000 AMD</h4>
                                    <h3 class="del-price"><del>55.000 AMD</del></h3>
                                </div>
                            </div>
                            <div class="product-icon-wrapper">
                                <div class="product-icon">
                                    <ul>
                                        <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-new-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset("img/product/8.jpg") }}" class="first_img" alt="" />

                                </a>
                            </div>
                            <div class="product-content text-center">
                                <a href="product-details.html">
                                    <h3>Beaumont Summit</h3>
                                </a>
                                <div class="product-price-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price">
                                    <h4>30.000 AMD</h4>
                                    <h3 class="del-price"><del>55.000 AMD</del></h3>
                                </div>
                            </div>
                            <div class="product-icon-wrapper">
                                <div class="product-icon">
                                    <ul>
                                        <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-new-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset("img/product/1.jpg") }}" class="first_img" alt="" />

                                </a>
                            </div>
                            <div class="product-content text-center">
                                <a href="product-details.html">
                                    <h3>Beaumont Summit</h3>
                                </a>
                                <div class="product-price-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price">
                                    <h4>20.000 AMD</h4>
                                    <h3 class="del-price"><del>55.000 AMD</del></h3>
                                </div>
                            </div>
                            <div class="product-icon-wrapper">
                                <div class="product-icon">
                                    <ul>
                                        <li><a href="#"><span class="lnr lnr-sync"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#"><span class="lnr lnr-cart"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- new-product-area-end -->
    <!-- static-slider-area-start -->
    <div class="static-slider-area dotted-style new-product-4 pb-80 hidden-xs">
        <div class="static-slider-active">
            <div class="static-single-slider">
                <div class="static-slider-img">
                    <img src="{{ asset("img/static/4.jpg") }}" alt="" />
                </div>
                <!-- <div class="static-slider-text">
						<h2>Chairs & Chaises</h2>
						<h1>Ethen Accent Chair - Laguna</h1>
						<p>Vacation at Home. With its dashingly refined good looks, the Ethen accent chair is <br /> perfectly suited for any room that can use a dose of vibrant colour. Tight-back upholstery <br /> from top to bottom gives the chair.</p>
						<a href="bedroom.html" class="shopnow">shop now</a>
					</div> -->
            </div>
            <div class="static-single-slider">
                <div class="static-slider-img">
                    <img src="{{ asset("img/static/5.jpg") }}" alt="" />
                </div>
                <!-- <div class="static-slider-text">
						<h2>Chairs & Chaises</h2>
						<h1>Ethen Accent Chair - Laguna</h1>
						<p>Vacation at Home. With its dashingly refined good looks, the Ethen accent chair is <br /> perfectly suited for any room that can use a dose of vibrant colour. Tight-back upholstery <br /> from top to bottom gives the chair.</p>
						<a href="bedroom.html" class="shopnow">shop now</a>
					</div> -->
            </div>
            <div class="static-single-slider">
                <div class="static-slider-img">
                    <img src="{{ asset("img/static/6.jpg") }}" alt="" />
                </div>
                <!-- <div class="static-slider-text">
						<h2>Chairs & Chaises</h2>
						<h1>Ethen Accent Chair - Laguna</h1>
						<p>Vacation at Home. With its dashingly refined good looks, the Ethen accent chair is <br /> perfectly suited for any room that can use a dose of vibrant colour. Tight-back upholstery <br /> from top to bottom gives the chair.</p>
						<a href="bedroom.html" class="shopnow">shop now</a>
					</div> -->
            </div>
        </div>
    </div>
    <!-- static-slider-area-end -->
    <!-- feature-preduct-area-start -->
    <div class="feature-preduct-area home-page-2 feature-product-4 dotted-5 new-product-4 hot-deal-area  pb-50">
        <div class="container">
            <div class="row">
                <div class="section-title hot-deal-title sale-4 section-title-4">
                    <h2>sale products</h2>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="feature-home-2-active feature-home-4-active">
                        <div class="single-product-items">
                            <div class="single-new-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset("img/product/1.jpg") }}" class="first_img" alt="" />

                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <a href="product-details.html">
                                        <h3>Beaumont Summit</h3>
                                    </a>
                                    <div class="product-price-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h4>45.000 AMD</h4>
                                </div>
                            </div>


                        </div>

                        <div class="single-product-items">
                            <div class="single-new-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset("img/product/1.jpg") }}" class="first_img" alt="" />

                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <a href="product-details.html">
                                        <h3>Beaumont Summit</h3>
                                    </a>
                                    <div class="product-price-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h4>55.000 AMD</h4>
                                </div>
                            </div>


                        </div>


                        <div class="single-product-items">
                            <div class="single-new-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset("img/product/1.jpg") }}" class="first_img" alt="" />

                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <a href="product-details.html">
                                        <h3>Beaumont Summit</h3>
                                    </a>
                                    <div class="product-price-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h4>45.000 AMD</h4>
                                </div>
                            </div>


                        </div>


                        <div class="single-product-items">
                            <div class="single-new-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{ asset("img/product/1.jpg") }}" class="first_img" alt="" />

                                    </a>
                                </div>
                                <div class="product-content text-center">
                                    <a href="product-details.html">
                                        <h3>Beaumont Summit</h3>
                                    </a>
                                    <div class="product-price-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h4>30.000 AMD</h4>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="">
                        <div class="single-static-banner">
                            <div class="single-static-img">
                                <a href="bedroom.html"><img src="{{ asset("img/banner/ads-middle-grand4.jpg") }}"
                                        alt="" /></a>
                                <div class="single-static-text single-static-text-4">
                                    <h3>The world's most popular office sofa</h3>
                                    <span>G64 - Over 1.3 Million Sold Worldwide</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-3 col-md-3 hidden-sm">
                    <div class="single-banner mar_b-30">
                        <a href="bedroom.html"><img src="{{ asset("img/banner/12.jpg") }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature-preduct-area-end -->
    <!-- contact-area-start -->
    <div class="contact-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar_b-30">
                    <div class="contuct-info text-center">
                        <h4>Sign up for news & offers!</h4>
                        <p>You may safely unsubscribe at any time</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-1 col-xs-12">
                    <div class="search-box">
                        <form action="#">
                            <input type="email" placeholder="Enter your email address" />
                            <button><span class="lnr lnr-envelope"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-area-end -->
    <!-- footer-area-start -->
    <div class="footer-area footer-area-4 ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 mar_b-30">
                    <div class="footer-wrapper">
                        <div class="footer-logo">
                            <a href="#"><img src="{{ asset("img/logo-4.png") }}" alt="" /></a>
                        </div>
                        <p>We are a team of designers and developers that create high quality Magento, Prestashop,
                            Opencart themes and provide premium and support to our products.</p>
                        <ul>
                            <li>
                                <span>Address : </span> YEREVAN, ARMENIA
                            </li>
                            <li>
                                <span>Phone: </span> +374 55 55 55 59
                            </li>
                            <li>
                                <span>Email:</span> <a href="#">admin@yerevan.company</a>
                            </li>
                        </ul>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
                    <div class="footer-wrapper">
                        <div class="footer-title">
                            <a href="#">
                                <h3>useful links</h3>
                            </a>
                        </div>
                        <div class="footer-wrapper">
                            <ul class="usefull-link">
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Site map</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">My Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Custom service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 hidden-md hidden-sm col-xs-12 mar_b-30">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- footer-area-end -->
    <!-- .copyright-area-start -->
    <div class="copyright-area copyright-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mar_b-30">
                    <div class="copyright text-left">
                        <p>2024 @ All Rights Reserved - <a href="#"></a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright-img text-right">
                        <a href="#"><img src="{{ asset("img/payment.png") }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .copyright-area-end -->

    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{ asset("js/vendor/jquery-1.12.0.min.js") }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
    <!-- meanmenu js -->
    <script src="{{ asset("js/jquery.meanmenu.js") }}"></script>
    <!-- jquery-ui js -->
    <script src="{{ asset("js/jquery-ui.min.js") }}"></script>
    <!-- wow js -->
    <script src="{{ asset("js/wow.min.js") }}"></script>
    <!-- scrolly js -->
    <script src="{{ asset("js/jquery.scrolly.js") }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!--  countdown js -->
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <!-- nivo.slider js -->
    <script src="{{ asset("js/jquery.nivo.slider.js") }}"></script>
    <!-- plugins js -->
    <script src="{{ asset("js/plugins.js") }}"></script>
    <!-- main js -->
    <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>