<?php

function cart_item_count()
{
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        return count($_SESSION['cart']);
        }
        else {
            return 0;
        }
}
?>
<!-- Basic bootstrap template was used from source below-->
<!-- https://startbootstrap.com/template-overviews/shop-homepage/ -->
<!-- AC32006 - Team 8-->
<!-- University of Dundee-->
<!-- Website created by: -->
<!-- Juri Ilmjarv-->
<!-- Matthew Foulis-->
<!-- Danyal Ali -->
<!-- Lee Cook -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guitar Shop</title>
    <link rel="icon" href="./assets/productimages/guitar-black-shape.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/stylesheet.css">
    <link rel="stylesheet" href="./assets/shop-homepage.css">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">GuitarShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart(<?php echo cart_item_count() ?>)</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
