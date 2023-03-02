<?php

require 'connect.php';

/**
 *@var PDO $db
 */


$sql_select_goods = "select * from goods";
$data = $db->query($sql_select_goods);
$goods = $data->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Jantrik Bootstrap4 Template for Tools, Equipment Store</title>
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">
    <!-- Google Font css -->
    <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet"> 

    <!-- mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- nivo slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- slick css -->
   <link rel="stylesheet" href="css/slick.css">
    <!-- price slider css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <!-- fancybox css -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">     
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- default css  -->
    <link rel="stylesheet" href="css/default.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- modernizr js -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Wrapper Start -->
    <div class="wrapper homepage">
        <!-- Newsletter Popup Start -->
        <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off">Close</span>
                <div class="subscribe_area text-center mt-60">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Jantrik mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Popup End -->
        <!-- Header Area Start -->
        <header>
            <!-- Header Top Start -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Header Top left Start -->                        
                        <div class="col-lg-4 col-md-12 d-center">
                            <div class="header-top-left">
                                <img src="img/icon/call.png" alt="">Call Us : +11 222 3333
                            </div>                        
                        </div>
                        <!-- Header Top left End -->
                        <!-- Search Box Start -->                                        
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                            <div class="search-box-view">
                                <form action="#">
                                    <input type="text" class="email" placeholder="Search Your Product" name="product">
                                    <button type="submit" class="submit"></button>
                                </form>
                            </div>                                           
                        </div>
                        <!-- Search Box End --> 
                        <!-- Header Top Right Start -->                                       
                        <div class="col-lg-4 col-md-12">
                            <div class="header-top-right">
                                <ul class="header-list-menu f-right">
                                    <!-- Language Start -->
                                    <li><a href="#">Language: English <i class="fa fa-angle-down"></i></a>
                                        <ul class="ht-dropdown">
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Bengali</a></li>
                                            <li><a href="#">Russian</a></li>
                                        </ul>
                                    </li>
                                    <!-- Language End -->                                
                                    <!-- Currency Start -->
                                    <li><a href="#">Currency:  USD <i class="fa fa-angle-down"></i></a>
                                        <ul class="ht-dropdown">
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">GBP</a></li>
                                            <li><a href="#">EUR</a></li>
                                        </ul>
                                    </li>
                                    <!-- Currency End -->
                                </ul>
                                <!-- Header-list-menu End -->
                            </div>
                        </div>
                        <!-- Header Top Right End -->
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End -->
            <!-- Header Bottom Start -->
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-sm-5 col-5">
                            <div class="logo">
                                <a href="index.html"><img src="img/logo/logo.png" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Primary Vertical-Menu End -->
                        <!-- Search Box Start -->
                        <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="middle-menu pull-right">
                                <nav>
                                    <ul class="middle-menu-list">
                                        <li><a href="index.html">home<i class="fa fa-angle-down"></i></a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown home-dropdown">
                                                <li><a href="index.html">Home Version One</a></li>
                                                <li><a href="index-2.html">Home Version Two</a></li>
                                                <li><a href="index-3.html">Home Box Layout</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="about.html">about us</a></li>                                        
                                        <li><a href="shop.html">shop<i class="fa fa-angle-down"></i></a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown dropdown-style-two">
                                                <li><a href="shop.html">Shop</a>
                                                    <!-- Start Two Step -->
                                                    <ul class="ht-dropdown dropdown-style-two sub-menu">
                                                        <li><a href="shop.html">Product Category Name</a>
                                                            <!-- Start Three Step -->
                                                            <ul class="ht-dropdown dropdown-style-two sub-menu">
                                                                <li><a href="shop.html">Product Category Name</a></li>
                                                                <li><a href="shop.html">Product Category Name</a></li>
                                                                <li><a href="shop.html">Product Category Name</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="shop.html">Product Category Name</a></li>
                                                        <li><a href="shop.html">Product Category Name</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="product.html">product details Page</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.php">Checkout Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>                                        
                                        <li><a href="blog.html">Blog<i class="fa fa-angle-down"></i></a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown dropdown-style-two">
                                                <li><a href="blog.html">Blog Page</a></li>
                                                <li><a href="blog-details.html">Blog Details Page</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="#">pages<i class="fa fa-angle-down"></i></a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown dropdown-style-two">
                                                <li><a href="login.html">Login Page</a></li>
                                                <li><a href="register.html">Register Page</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="forgot-password.html">Forgot Password Page</a></li>
                                                <li><a href="account.html">Account Page</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="contact.html">contact us</a></li>                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Search Box End -->
                        <!-- Cartt Box Start -->
                        <div class="col-lg-3 col-sm-7 col-7">
                            <div class="cart-box text-right">
                                <ul>
                                    <li><a href="compare.html"><i class="fa fa-cog"></i></a>
                                        <ul class="ht-dropdown">
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="account.html">Account</a></li>                                            
                                        </ul>
                                    </li>                                    
                                    <li><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-basket"></i><span class="cart-counter">0</span></a>
                                        <ul class="ht-dropdown main-cart-box">
                                            <li>
                                                <div class="cart-header">

                                                </div>
                                                <!-- Cart Footer Inner Start -->
                                                <div class="cart-footer fix">
                                                    <h5>Total :<span class="f-right cart-total"></span></h5>
                                                    <div class="cart-actions">
                                                        <a class="checkout" href="checkout.php">Checkout</a>
                                                    </div>
                                                </div>
                                                <!-- Cart Footer Inner End -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cartt Box End -->
                        <div class="col-sm-12 d-lg-none">
                            <div class="mobile-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">home</a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul>
                                                <li><a href="index.html">Home Version One</a></li>
                                                <li><a href="index-2.html">Home Version Two</a></li>
                                                <li><a href="index-3.html">Home Box Layout</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="shop.html">shop</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="product.html">Shop</a>
                                                    <ul>
                                                        <li><a href="shop.html">Product Category Name</a>
                                                            <!-- Start Three Step -->
                                                            <ul>
                                                                <li><a href="shop.html">Product Category Name</a></li>
                                                                <li><a href="shop.html">Product Category Name</a></li>
                                                                <li><a href="shop.html">Product Category Name</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="shop.html">Product Category Name</a></li>
                                                        <li><a href="shop.html">Product Category Name</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="product.html">product details Page</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.php">Checkout Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="blog-details.html">Blog Details Page</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="#">pages</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="login.html">login Page</a></li>
                                                <li><a href="register.html">Register Page</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu  End -->                        
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End -->
        </header>
        <!-- Header Area End -->
        <!-- Slider Area Start -->
        <div class="slider-area slider-style-three">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="slider-wrapper theme-default">
                            <!-- Slider Background  Image Start-->
                            <div id="slider" class="nivoSlider">
                                <a href="shop.html"> <img src="img/slider/5.jpg" data-thumb="img/slider/5.jpg" alt="" title="#slider-1-caption1"/></a>
                                <a href="shop.html"><img src="img/slider/6.jpg" data-thumb="img/slider/6.jpg" alt="" title="#slider-1-caption2"/></a>
                            </div>
                            <!-- Slider Background  Image Start-->
                            <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                                <div class="text-content-wrapper">
                                    <div class="text-content">
                                        <h4 class="title2 wow bounceInLeft text-white mb-16" data-wow-duration="2s" data-wow-delay="0s">Big Sale</h4>
                                        <h1 class="title1 wow bounceInRight text-white mb-16" data-wow-duration="2s" data-wow-delay="1s">Hand Tools <br>Power Saw Machine</h1>
                                        <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="2s" data-wow-delay="2s">
                                            <a class="button slider-btn" href="shop.html">Shop Now</a>                    
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                                <div class="text-content-wrapper">
                                    <div class="text-content slide-2">
                                        <h4 class="title2 wow bounceInLeft text-white mb-16" data-wow-duration="1s" data-wow-delay="1s">Big Sale</h4>
                                        <h1 class="title1 wow flipInX text-white mb-16" data-wow-duration="1s" data-wow-delay="2s">Hand Tools <br>Power Saw Machine</h1>
                                        <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="1s" data-wow-delay="3s">
                                            <a class="button slider-btn" href="shop.html">Shop Now</a>                    
                                        </div>
                                    </div>       
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="col-md-4">
                         <!-- Single Banner Start -->
                        <div class="single-banner zoom mb-20">
                            <a href="#"><img src="img/banner/9.jpg" alt="slider-banner"></a>
                        </div>
                        <!-- Single Banner End -->
                        <!-- Single Banner Start -->
                        <div class="single-banner zoom">
                            <a href="#"><img src="img/banner/10.jpg" alt="slider-banner"></a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End --> 
        <!-- Product Area Start -->
        <div class="product-area pt-30">
            <div class="container">
                <div class="row">
                    <?php foreach($goods as $good): ?>
                    <!-- Single Product Start -->                    
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product" data-id="<?=$good["id"]?>">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="product.html">
                                    <img class="primary-img" src="img/products/<?=$good["img"]?>" alt="single-product">
                                    <!-- <img class="secondary-img" src="img/products/2.jpg" alt="single-product"> -->
                                </a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>                                
                                <h4><a href="product.html"><?=$good["name"]?></a></h4>
                                <p><span class="price"><?=$good["price"]?> руб.</span></p>
                                <div class="pro-actions">
                                    <div class="actions-secondary">
                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Content End -->
                        </div>
                    </div>
                    <!-- Single Product End --> 
                    <?php endforeach; ?>                  
                </div>
            </div>
        </div> 
        <!-- Product Area End --> 
        <!-- Banner Start -->
        <div class="upper-banner banner pb-60">
            <div class="container">
               <div class="row">
                   <!-- Single Banner Start -->
                   <div class="col-sm-6">
                        <div class="single-banner zoom">
                            <a href="#"><img src="img/banner/1.png" alt="slider-banner"></a>
                        </div>
                    </div>
                   <!-- Single Banner End -->
                    <!-- Single Banner Start -->
                   <div class="col-sm-6">
                        <div class="single-banner zoom">
                            <a href="#"><img src="img/banner/2.png" alt="slider-banner"></a>
                        </div>
                    </div>
                   <!-- Single Banner End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>                                
        <!-- Banner End -->
        <!-- New Products Start -->
        <div class="new-products pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-2">
                        <div class="side-product-list">
                            <div class="group-title">
                                <h2>Top Products</h2>
                            </div>
                            <!-- Deal Pro Activation Start -->
                            <div class="slider-right-content side-product-list-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-pro">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/1.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/2.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/3.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/4.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/5.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-pro">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/6.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/7.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/8.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/5.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/4.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-pro">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/1.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/2.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/3.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/4.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="product.html"><img class="img" src="img/products/5.jpg" alt="product-image"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4><a href="product.html">Products Name Here</a></h4>
                                            <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->                                
                            </div>
                            <!-- Deal Pro Activation End -->
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8  order-lg-2">
                        <!-- New Pro Content End -->
                        <div class="new-pro-content">
                            <div class="pro-tab-title border-line">
                                <!-- Featured Product List Item Start -->
                                <ul class="nav product-list product-tab-list">
                                    <li><a  class="active" data-toggle="tab" href="#new-arrival">New Arrivals</a></li>
                                    <li><a data-toggle="tab" href="#toprated">Featured</a></li>
                                    <li><a data-toggle="tab" href="#new-arrival">Top Rated</a></li>
                                </ul>
                                <!-- Featured Product List Item End -->
                            </div>
                            <div class="tab-content product-tab-content jump">
                                <div id="new-arrival" class="tab-pane active">
                                    <!-- New Products Activation Start -->
                                    <div class="new-pro-active owl-carousel">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/3.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/4.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">-30%</span>
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/5.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/6.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">-30%</span>
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/2.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/3.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/3.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/4.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">-30%</span>
                                        </div>                                        
                                        <!-- Single Product End -->
                                    </div>
                                    <!-- New Products Activation End -->
                                </div>
                                <!-- New Products End -->
                                <div id="toprated" class="tab-pane">
                                    <!-- New Products Activation Start -->
                                    <div class="new-pro-active owl-carousel">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/4.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/3.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/3.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">-30%</span>
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/2.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/3.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="img/products/3.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img/products/4.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>                                
                                                <h4><a href="product.html">Products Name Here</a></h4>
                                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                                                <div class="pro-actions">
                                                    <div class="actions-secondary">
                                                        <a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        <a class="add-cart" href="cart.html" data-toggle="tooltip" title="Add to Cart">Add To Cart</a>
                                                        <a href="compare.html" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>                                        
                                        <!-- Single Product End -->
                                    </div>
                                    <!-- New Products Activation End -->
                                </div>
                            </div>
                            <!-- Tab-Content End -->
                            <div class="single-banner zoom mt-30 mt-sm-10">
                            <a href="#"><img src="img/banner/tab-banner.jpg" alt="slider-banner"></a>
                        </div>
                        </div>
                        <!-- New Pro Content End -->                        
                    </div>
                </div>

            </div>
            <!-- Container End -->
        </div>
        <!-- New Products End -->
        <!-- Company Policy Start -->
        <div class="company-policy pb-60">
            <div class="container">
                <div class="row">
                    <!-- Single Policy Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-policy">
                            <div class="icone-img">
                                <img src="img/icon/1.png" alt="">
                            </div>
                            <div class="policy-desc">
                                <h3>Free Delivery</h3>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Policy End -->
                    <!-- Single Policy Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-policy">
                            <div class="icone-img">
                                <img src="img/icon/2.png" alt="">
                            </div>
                            <div class="policy-desc">
                                <h3>Online Support 24/7</h3>
                                <p>Support online 24 hours</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Policy End -->
                    <!-- Single Policy Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-policy">
                            <div class="icone-img">
                                <img src="img/icon/3.png" alt="">
                            </div>
                            <div class="policy-desc">
                                <h3>Money Return</h3>
                                <p>Back guarantee under 7 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Policy End -->
                    <!-- Single Policy Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-policy">
                            <div class="icone-img">
                                <img src="img/icon/4.png" alt="">
                            </div>
                              <div class="policy-desc">
                                <h3>Member Discount</h3>
                                <p>Onevery order over $30.00</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Policy End -->
                </div>
            </div>
        </div>
        <!-- Company Policy End -->   
        <!-- Best Products Start -->
        <div class="best-seller-product pb-40">
            <div class="container">
                <div class="group-title">
                    <h2>Best Seller Products</h2>
                </div>
                <!-- Best Product Activation Start -->
                <div class="best-seller-pro-active  owl-carousel slider-right-content">
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/1.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/2.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/3.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/4.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/5.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/6.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/7.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/8.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/5.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/6.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                    <!-- Double Product Start -->
                    <div class="double-pro">
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/7.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$30.00</span><del class="prev-price">$32.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <div class="pro-img">
                                <a href="product.html"><img class="img" src="img/products/8.jpg" alt="product-image"></a>
                            </div>
                            <div class="pro-content">
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h4><a href="product.html">Products Name Here</a></h4>
                                <p><span class="price">$150.00</span><del class="prev-price">$200.00</del></p>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                    <!-- Double Product End -->
                </div>
                <!-- Best Product Activation End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Best Product End -->             
        <!-- Blog Page Start -->
        <div class="blog-area pb-60">
            <div class="container">
                <div class="group-title">
                    <h2>From The Blog</h2>
                </div>
                 <!-- Popular Categorie Activation Start -->
                 <div class="blog-active owl-carousel">
                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="img/blog/1.jpg" alt="blog-image"></a>
                        </div>
                        <div class="blog-content">
                                <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By: </span> <a href="#">Jantrik,</a></li>
                                    <li><span>On: </span> <a href="#">05 Nov, 2018</a></li>
                                </ul>
                            </div>
                            <div class="readmore">
                                <a href="blog-details.html">Read More.....</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="img/blog/2.jpg" alt="blog-image"></a>
                        </div>
                        <div class="blog-content">
                                <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By </span> <a href="#">Jantrik, </a></li>
                                    <li><span>On </span> <a href="#">05 Nov, 2018</a></li>
                                </ul>
                            </div>
                            <div class="readmore">
                                <a href="blog-details.html">Read More.....</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="img/blog/3.jpg" alt="blog-image"></a>
                        </div>
                        <div class="blog-content">
                                <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By </span> <a href="#">Jantrik, </a></li>
                                    <li><span>On </span> <a href="#">05 Nov, 2018</a></li>
                                </ul>
                            </div>
                            <div class="readmore">
                                <a href="blog-details.html">Read More.....</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="img/blog/1.jpg" alt="blog-image"></a>
                        </div>
                        <div class="blog-content">
                                <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By </span> <a href="#">Jantrik, </a></li>
                                    <li><span>On </span> <a href="#">05 Nov, 2018</a></li>
                                </ul>
                            </div>
                            <div class="readmore">
                                <a href="blog-details.html">Read More.....</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="img/blog/2.jpg" alt="blog-image"></a>
                        </div>
                        <div class="blog-content">
                                <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By </span> <a href="#">Jantrik, </a></li>
                                    <li><span>On </span> <a href="#">05 Nov, 2018</a></li>
                                </ul>
                            </div>
                            <div class="readmore">
                                <a href="blog-details.html">Read More.....</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    <!-- Single Blog Start -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="img/blog/3.jpg" alt="blog-image"></a>
                        </div>
                        <div class="blog-content">
                                <h4 class="blog-title"><a href="blog-details.html">Lorem ipsum dolor sit amet, consectl adip elit, sed do eiusmod tempor</a></h4>
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By </span> <a href="#">Jantrik, </a></li>
                                    <li><span>On </span> <a href="#">05 Nov, 2018</a></li>
                                </ul>
                            </div>
                            <div class="readmore">
                                <a href="blog-details.html">Read More.....</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                 </div>
                 <!-- Popular Categorie Activation End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Blog Page End -->
        <!-- Brand Logo Start -->
        <div class="brand-area pb-60">
            <div class="container">
                <!-- Brand Banner Start -->
                <div class="brand-banner owl-carousel">
                    <div class="single-brand">
                        <a href="#"><img class="img" src="img/brand/1.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/2.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/3.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/4.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/5.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img class="img" src="img/brand/1.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/2.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/3.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/4.png" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/5.png" alt="brand-image"></a>
                    </div>
                </div>
                <!-- Brand Banner End -->                
            </div>
        </div>
        <!-- Brand Logo End -->

        <footer class="off-white-bg">
            <!-- Footer Top Start -->
            <div class="footer-top pt-50 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mr-auto ml-auto">
                            <div class="newsletter text-center">
                                <div class="main-news-desc">
                                     <div class="news-desc">
                                         <h3>Sign Up For Newsletters</h3>
                                         <p>Get e-mail updates about our latest shop and special offers.</p>
                                     </div>
                                </div>
                                <div class="newsletter-box">
                                    <form action="#">
                                        <input class="subscribe" placeholder="Enter your email address" name="email" id="subscribe" type="text">
                                        <button type="submit" class="submit">subscribe</button>
                                    </form>
                                </div>
                             </div>                            
                        </div>
                    </div>                    
                    <div class="row">
                        <!-- Single Footer Start -->
                        <div class="col-lg-4  col-md-7 col-sm-6">
                            <div class="single-footer">
                                <h3>Contact us</h3>
                                <div class="footer-content">
                                    <div class="loc-address">
                                        <span><i class="fa fa-map-marker"></i>184 Main Rd E, St Albans VIC 3021, Australia.</span>
                                        <span><i class="fa fa-envelope-o"></i>Mail Us : yourinfo@example.com</span>
                                        <span><i class="fa fa-phone"></i>Phone: + 00 254 254565 54</span>
                                    </div>
                                    <div class="payment-mth"><a href="#"><img class="img" src="img/footer/1.png" alt="payment-image"></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-2  col-md-5 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">Information</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">Site Map</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-2  col-md-4 col-md-4 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">My Account</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="account.html">My account</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">address</a></li>
                                        <li><a href="#">Order status</a></li>
                                        <li><a href="#">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">customer service</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="account.html">My account</a></li>
                                        <li><a href="#">New</a></li>
                                        <li><a href="#">Gift Cards</a></li>
                                        <li><a href="#">Return Policy</a></li>
                                        <li><a href="#">Your Orders</a></li>
                                        <li><a href="#">Subway</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">Let Us Help You</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">Your Account</a></li>
                                        <li><a href="#">Your Orders</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Amazon Prime</a></li>
                                        <li><a href="#">Replacements</a></li>
                                        <li><a href="#">Manage </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Top End -->
            <!-- Footer Bottom Start -->
            <div class="footer-bottom off-white-bg2">
                <div class="container">
                    <div class="footer-bottom-content">
                        <p class="copy-right-text">Copyright © <a  href="#">Jantrik</a> All Rights Reserved.</p>
                        <div class="footer-social-content">
                            <ul class="social-content-list">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-wifi"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Bottom End -->
        </footer>
        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->
    <!-- jquery 3.12.4 -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- mobile menu js  -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- scroll-up js -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- owl-carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- price slider js -->
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <!-- nivo slider js -->
    <script src="js/jquery.nivo.slider.js"></script>
    <!-- fancybox js -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- popper -->
    <script src="js/popper.js"></script>
    <!-- plugins -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
    <!-- cart js -->
    <script src="js/cart.js"></script>
</body>

</html>