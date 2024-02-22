<?php
session_start();
include('./server/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--Css-->
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
  <style>
    .cart-quantity{
    background-color:#ea7500 ;
    color: wheat;
    padding: 1px 3px;
    border-radius: 70%;
    margin: -5%;
    font-size: 1rem;
}
    </style>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
       <img class="logo" src="assets/imgs/logo.jpeg"/>
       <h2 class="brand">Oragins</h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
           
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a href="cart.php">
                  <i class="fa-solid fa-user">
                <?php if(isset($_SESSION['quantity']) && $_SESSION['quantity'] != 0){?>
                  <span class="cart-quantity"><?php echo $_SESSION['quantity']; ?></span>
               <?php } ?>

                </i>
              </a>
               <a href="account.php"><i class="fa-solid fa-user"></i></a>
              </li>
             
           
          </ul>
        </div>
      </nav>