<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Authors -->
    <meta name="author" content="Jenna Pennanen">
    <meta name="author" content="Eveliina Purontaus">
    <meta name="author" content="Ville Rantanen">
    <meta name="author" content="Oskari Juntunen">
    <meta name="author" content="Jukka Liimatta">
    <meta name="author" content="Jami Salmela">
    <meta name="author" content="Henri Aukee">
    <meta name="author" content="Ilari Puustinen">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css" integrity="sha384-OLYO0LymqQ+uHXELyx93kblK5YIS3B2ZfLGBmsJaUyor7CpMTBsahDHByqSuWW+q" crossorigin="anonymous">
    <!-- CSS for Parallax --> 
    <link rel="stylesheet" href="<?= base_url('/css/parallax.css');?>">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('/css/styles.css');?>">
    
    <!-- Fix for full length container -->
    <!--<style> .container-fluid{
    padding: 0;
    box-sizing: border-box;}
    </style>-->

    <title>Vienon Kahvikauppa</title>
</head>
<body>
<div class="container-fluid main">
    <nav class="navbar navbar-expand-xl navbar-light pr-5 pl-5">
        <!-- Logo -->
        <a class="navbar-brand active" href="<?= site_url('Coffee/index')?>">
            <!--<img class="img-fluid site-logo" src="<?= base_url('img/logo_mk5.png')?>"></img>-->
            <img class="img-fluid site-logo static" src="<?= base_url('img/logo.png')?>"></img>
            <img class="img-fluid site-logo active" src="<?= base_url('img/logo.gif')?>"></img>
        </a>
        <!-- Burger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- Front page button -->
                <li class="nav-item ml-5 mt-2 nav-og">
                    <a class="nav-link active nav-txt"  href="<?= site_url('Coffee/index')?>">
                    <i class="fas fa-home"></i></a>
                </li>
                <!-- Products tab -->
                <li class="nav-item nav-og dropdown ml-5">
                    <a class="nav-link active dropdown-toggle nav-txt mt-2" href="#" id="products" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="products">
                    <a class="dropdown-item nav-txt-dropdown bold" href="<?= site_url('/coffee/products/allProducts')?>">Show All Products</a>
                    
                    <div class="dropdown-divider"></div>
                        <?php foreach($categories as $category):?>
                        <a class="dropdown-item nav-txt-dropdown" href="<?= site_url('/coffee/products/' . $category['id'])?>"><?=$category['categoryname']?></a>
                        <?php endforeach; ?>
                    </div>
                </li>
                
                <!-- About us tab --> 
                <li class="nav-item dropdown ml-5 nav-og">
                <a class="nav-link active dropdown-toggle nav-txt mt-2" href="#" id="about_us" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About Us<span class="sr-only">(current)</span></a>

                    <div class="dropdown-menu" aria-labelledby="about_us">
                    <a class="dropdown-item nav-txt-dropdown" href="<?= site_url('Coffee/contact_us')?>">
                    Contact Information</a>
                    <a class="dropdown-item nav-txt-dropdown" href="<?= site_url('Coffee/faq')?>">
                    FAQ</a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item nav-txt-dropdown" href="<?= site_url('Coffee/story')?>">
                    Our Story</a>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav mr-5">
                <!-- My page tab -->
                <li class="nav-item ml-5 mt-2 nav-gr">
                    <a class="nav-link active nav-txt"  href="<?= site_url('Coffee/my_page')?>">
                    <i class="fas fa-user mr-2"></i>My Page</a>
                </li>

                <!-- Shopping cart -->
                <li class="nav-item ml-5 mt-2 nav-gr">
                    <a class="nav-link active nav-txt" href="<?= site_url('cart/index')?>">
                        <span class="badge badge-pill btn-danger">
                        <?= $cart_count ?>
                        </span>

                    <i class="fas fa-shopping-cart mr-2">
                    </i>Shopping Cart<span class="sr-only">(current)</span></a>
                </li>
            </ul>

            <!-- Search bar -->
            <form class="form-inline my-2 my-lg-0 pt-2">
                <input class="form-control mr-sm-2" type="search" 
                placeholder="Search from site" aria-label="Go">

                <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Go</button>
            </form>
        </div>
        
    </nav>
<!-- <hr> -->
