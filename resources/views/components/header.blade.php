<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.graygrids.com/themes/shopgrids/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Dec 2022 23:35:35 GMT -->
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>ShopGrids - Bootstrap 5 eCommerce HTML Template.</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="{{asset('web')}}/images/favicon.svg" />

<link rel="stylesheet" href="{{asset('web')}}/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{asset('web')}}/css/LineIcons.3.0.css" />
<link rel="stylesheet" href="{{asset('web')}}/css/tiny-slider.css" />
<link rel="stylesheet" href="{{asset('web')}}/css/glightbox.min.css" />
<link rel="stylesheet" href="{{asset('web')}}/css/main.css" />

<style>
    .pagination{
        display: flex;
    justify-content: center;
    }
</style>
</head>
<body>
<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

<div class="preloader">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div>


<header class="header navbar-area">

<div class="topbar">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-4 col-md-4 col-12">
<div class="top-left">
<ul class="menu-top-link">
<li>
<div class="select-position">
<select id="select4">
<option value="0" selected>$ USD</option>
<option value="1">€ EURO</option>
<option value="2">$ CAD</option>
<option value="3">₹ INR</option>
<option value="4">¥ CNY</option>
<option value="5">৳ BDT</option>
</select>
</div>
</li>
<li>
<div class="select-position">
<select id="select5">
<option value="0" selected>English</option>
<option value="1">Español</option>
<option value="2">Filipino</option>
<option value="3">Français</option>
<option value="4">العربية</option>
<option value="5">हिन्दी</option>
<option value="6">বাংলা</option>
</select>
</div>
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="top-middle">
<ul class="useful-links">
<li><a href="index-2.html">Home</a></li>
<li><a href="about-us.html">About Us</a></li>
<li><a href="contact.html">Contact Us</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="top-end">
<div class="user">
<i class="lni lni-user"></i>
Hello {{ Auth::user()->name??"" }}
</div>
<ul class="user-login">
@if (Auth::check())

<li>
<a href="{{ route("web/logout") }}">logout</a>
</li>

@else
<li>
<a href="{{ route("web/login") }}">Sign In</a>
</li>

<li>
<a href="{{ route("web/register") }}">Register</a>
</li>

@endif



</ul>
</div>
</div>
</div>
</div>
</div>


<div class="header-middle">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-7">

<a class="navbar-brand" href="index-2.html">
<img src="{{asset('web')}}/images/logo/logo.svg" alt="Logo">
</a>

</div>
<div class="col-lg-5 col-md-7 d-xs-none">

    @livewire("search")
<div class="col-lg-4 col-md-2 col-5">
<div class="middle-right-area">
<div class="nav-hotline">
<i class="lni lni-phone"></i>
<h3>Hotline:
<span>(+100) 123 456 7890</span>
</h3>
</div>
<div class="navbar-cart">
<div class="wishlist">
<a href="javascript:void(0)">
<i class="lni lni-heart"></i>
<span class="total-items">0</span>
</a>
</div>
<div class="cart-items">
<a href="javascript:void(0)" class="main-btn">
<i class="lni lni-cart"></i>
 <span class="total-items">2</span>
</a>

<div class="shopping-item">
<div class="dropdown-cart-header">
<span class="count_item">2 Items</span>
<a href="cart.html">View Cart</a>
</div>
<ul class="shopping-list all_cart">

    @foreach ($item as $item)
    <li>
    <a product_id="{{$item->product_id }}" href="javascript:void(0)" class="remove r_item"
    title="Remove this item"><i class="lni lni-close"></i></a>
    <div class="cart-img-head">
    <a  class="cart-img" href="product-details.html"><img src="{{asset('storage')}}/images/{{ $item["products"][0]["images"][0]["file"] }}" alt="#"></a>
    </div>
    <div class="content">
    <h4><a href="product-details.html">{{ $item["products"][0]["name"] }}</a></h4>
    <p class="quantity">
        <span class="_count">{{ $item->count }}</span>
        x -$
        <span class="amount _price">{{ $item["products"][0]["price"] }}</span>
    </p>
    </div>
    </li>

    @endforeach



</ul>
<div class="bottom">
<div class="total">
<span>Total</span>
<span class="total-amount">$134.00</span>
</div>
<div class="button">
<a href="checkout.html" class="btn animate">Checkout</a>
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


<div class="container">
<div class="row align-items-center">
<div class="col-lg-8 col-md-6 col-12">
<div class="nav-inner">

<div class="mega-category-menu">
<span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
<ul class="sub-category">
<li><a href="product-grids.html">Electronics <i class="lni lni-chevron-right"></i></a>
<ul class="inner-sub-category">
<li><a href="product-grids.html">Digital Cameras</a></li>
<li><a href="product-grids.html">Camcorders</a></li>
<li><a href="product-grids.html">Camera Drones</a></li>
<li><a href="product-grids.html">Smart Watches</a></li>
<li><a href="product-grids.html">Headphones</a></li>
<li><a href="product-grids.html">MP3 Players</a></li>
<li><a href="product-grids.html">Microphones</a></li>
<li><a href="product-grids.html">Chargers</a></li>
<li><a href="product-grids.html">Batteries</a></li>
<li><a href="product-grids.html">Cables & Adapters</a></li>
</ul>
</li>
<li><a href="product-grids.html">accessories</a></li>
<li><a href="product-grids.html">Televisions</a></li>
<li><a href="product-grids.html">best selling</a></li>
<li><a href="product-grids.html">top 100 offer</a></li>
<li><a href="product-grids.html">sunglass</a></li>
<li><a href="product-grids.html">watch</a></li>
<li><a href="product-grids.html">man’s product</a></li>
<li><a href="product-grids.html">Home Audio & Theater</a></li>
<li><a href="product-grids.html">Computers & Tablets </a></li>
<li><a href="product-grids.html">Video Games </a></li>
<li><a href="product-grids.html">Home Appliances </a></li>
</ul>
</div>


<nav class="navbar navbar-expand-lg">
<button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul id="nav" class="navbar-nav ms-auto">
<li class="nav-item">
<a href="index-2.html" class="active" aria-label="Toggle navigation">Home</a>
</li>
<li class="nav-item">
<a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Pages</a>
<ul class="sub-menu collapse" id="submenu-1-2">
<li class="nav-item"><a href="about-us.html">About Us</a></li>
 <li class="nav-item"><a href="faq.html">Faq</a></li>
<li class="nav-item"><a href="login.html">Login</a></li>
<li class="nav-item"><a href="register.html">Register</a></li>
<li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
<li class="nav-item"><a href="404.html">404 Error</a></li>
</ul>
</li>
<li class="nav-item">
<a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Shop</a>
<ul class="sub-menu collapse" id="submenu-1-3">
<li class="nav-item"><a href="product-grids.html">Shop Grid</a></li>
<li class="nav-item"><a href="product-list.html">Shop List</a></li>
<li class="nav-item"><a href="product-details.html">shop Single</a></li>
<li class="nav-item"><a href="cart.html">Cart</a></li>
<li class="nav-item"><a href="checkout.html">Checkout</a></li>
</ul>
</li>
<li class="nav-item">
<a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Blog</a>
<ul class="sub-menu collapse" id="submenu-1-4">
<li class="nav-item"><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
</li>
<li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
<li class="nav-item"><a href="blog-single-sidebar.html">Blog Single
Sibebar</a></li>
</ul>
</li>
<li class="nav-item">
<a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
</li>
</ul>
</div>
</nav>

</div>
</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="nav-social">
<h5 class="title">Follow Us:</h5>
<ul>
<li>
<a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
</li>
</ul>
</div>

</div>
</div>
</div>

</header>
