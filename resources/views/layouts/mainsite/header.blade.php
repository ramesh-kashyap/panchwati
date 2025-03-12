<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Panchvati BioLogical - Garden & Landscaping</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta name="author" content="themesflat.com">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}stylesheet/bootstrap.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}stylesheet/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}stylesheet/responsive.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}/stylesheet/icomoon.css">

    <!-- Favicon and touch icons  -->
    <link href="{{ asset('') }}icon/fav.png" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('') }}icon/fav.png" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('') }}icon/fav.png" rel="shortcut icon">

    <!-- anime -->
    <link rel="stylesheet" href="{{ asset('') }}stylesheet/animate.css">




</head>

<body>
    <div class="boxed blog">
        <!-- Preloader -->
        <div class="preloader">
            <div class="clear-loading loading-effect-2">
                <span></span>
            </div>
        </div>

        <!-- top header -->
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col md-4">
                        <div class="top-bar-left">
                            <p class="top-location">2072 Pinnickinick Street, WA 98370</p>
                        </div>
                    </div>
                    <div class="col md-8">
                        <div class="top-bar-right link-style3">
                            <a href="#" class="top-mail">info@website.com</a>
                            <ul class="widgets-nav-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.top -->

        <!-- header -->
        <header id="header" class="header header-style2 bg-color">
            <div class="container-fluid">
                <div class="row">
                    <div class="header-wrap">
                        <div class="col-md-3">
                            <div class="inner-header">
                                <div class="">
                                    <a href="/" title="">
                                        <img src="{{ asset('')}}icon/logo.png" style="width:100px;height:auto;">
                                    </a>
                                </div>
                                <!-- /#logo -->

                                <div class="btn-menu">
                                    <span></span>
                                </div>
                                <!-- //mobile menu button -->
                            </div>

                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-6">
                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li class="{{ request()->is('/') ? 'current-menu-item' : '' }}">
                                            <a href="{{ url('/') }}" title="">Home</a>
                                        </li>
                                        <li class="{{ request()->is('about-us') ? 'current-menu-item' : '' }}">
                                            <a href="{{ url('/about-us') }}" title="">About</a>
                                        </li>
                                        <li class="{{ request()->is('services') ? 'current-menu-item' : '' }}">
                                            <a href="{{ url('/services') }}" title="">Services</a>
                                        </li>
                                        <li class="{{ request()->is('contact-us') ? 'current-menu-item' : '' }}">
                                            <a href="{{ url('/contact-us') }}" title="">Contact</a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="site-header-right">
                                <div class="header-inner">
                                    <div class="search flat-show-search">
                                        <div class="show-search">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                        <div class="top-search widgets-input">
                                            <form action="get" id="searchform-all" class="header-search search-form">
                                                <div class="input-group">
                                                    <input type="search" id="s" class="search-field"
                                                        placeholder="Search here" aria-label="Search" />
                                                    <button class="search-submit" type="submit" title="Search"></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <a href="#" class="cart-btn"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                    <div class="button">
                                        @if(Auth::check())
                                        <p style="color: green;">Hi, {{ substr(Auth::user()->name, 0, 8) }}</p>

                                        @else
                                        <a href="{{ route('login') }}" class="btn">Login</a>
                                        @endif

                                    </div>

                                </div>
                            </div>
                            <!-- header right -->
                        </div>
                    </div>
                    <!-- /.header-wrap -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </header>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const navLinks = document.querySelectorAll(".menu li a");
                navLinks.forEach(link => {
                    if (link.href === window.location.href) {
                        link.parentElement.classList.add("current-menu-item");
                    }
                });
            });
        </script>