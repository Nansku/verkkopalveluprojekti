<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css" integrity="sha384-OLYO0LymqQ+uHXELyx93kblK5YIS3B2ZfLGBmsJaUyor7CpMTBsahDHByqSuWW+q" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/css/style.css');?>">
<<<<<<< HEAD

=======
    <link rel = "stylesheet" type = "text/css" 
    href = "<?php echo base_url(); ?>css/parallax.css">
>>>>>>> 66986c46b9b821a8fa7b1341a1fd078c6e2b7fe0
    <title>Vienon Kahvikauppa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand ml-5" href="kahvikauppa.php"><img class="img-fluid" src="<?= base_url('img/logo_mk1_2.png')?>" ></img></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown ml-5">
                <a class="nav-link active dropdown-toggle" href="#" id="products" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products <span class="sr-only">(current)</span></a>
                <div class="dropdown-menu" aria-labelledby="products">
                <a class="dropdown-item" href="#">Coffee beans</a>
                <a class="dropdown-item" href="#">Filter Papers</a>
                <a class="dropdown-item" href="#">Machines & French Presses</a>
                <a class="dropdown-item" href="#">Accessories</a>
                </div>
            </li>

            <li class="nav-item dropdown ml-5">
            <a class="nav-link dropdown-toggle" href="#" id="about_us" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us
                </a>
                <div class="dropdown-menu" aria-labelledby="about_us">
                <a class="dropdown-item" href="<?= site_url('/Coffee/contact_us')?>">Contact Information</a>
                <a class="dropdown-item" href="<?= site_url('/Coffee/faq')?>">FAQ</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= site_url('/Coffee/story')?>">Our Story</a>
                </div>
            </li>
            
            <li class="nav-item ml-5">
                <a class="nav-link" href="#">My Page</a>
            </li>

            <li class="nav-item ml-5">
                <a class="nav-link" href="#"><i class="fas fa-shopping-cart mr-2"></i>Shopping Cart</a>
            </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
        
    <div class="container">
