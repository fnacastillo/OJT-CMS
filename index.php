<?php
session_start();

	include("connection.php");
	include("functions.php");
	
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crochei</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .carousel-indicators {
      display: none;
    }
  </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <h2>CR<img src="icon.png" alt="Logo" width="30" height="30" class="d-inline-block align-top">CHEI</h2>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cheilo.html">CEO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.html">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="location.html">Location</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Custom Order</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="order.php">Create Order</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="track.php">Track Order</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Contents -->
  <div class="col-md-12">
    <div id="carousel-98920" class="carousel slide" data-bs-ride="carousel">
      <ul class="carousel-indicators">
        <li data-bs-target="#carousel-98920" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carousel-98920" data-bs-slide-to="1"></li>
        <li data-bs-target="#carousel-98920" data-bs-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="roses.jpg" alt="First slide">
          <div class="carousel-caption">
            <h1>Weaving Dreams, One Stitch at a Time</h1>
            <p>Wrap Yourself in Warmth and Wonder with Our Handcrafted Creations - Where Every Yarn Tells a Story</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="items.jpg" alt="Second slide">
          <div class="carousel-caption">
            <h1>Weaving Dreams, One Stitch at a Time</h1>
            <p>Wrap Yourself in Warmth and Wonder with Our Handcrafted Creations - Where Every Yarn Tells a Story</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="item 6.jpg" alt="Third slide">
          <div class="carousel-caption">
            <h1>Weaving Dreams, One Stitch at a Time</h1>
            <p>Wrap Yourself in Warmth and Wonder with Our Handcrafted Creations - Where Every Yarn Tells a Story</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-98920" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-98920" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="page-header">
          <h1 class="motto">
            Handcrafted with love, our customized crochet creations are the perfect gift for any occasion
          </h1>
        </div>
      </div>
      <div class="col-md-6">
        <div class="image-container text-center">
          <p><img src="hk.png" alt="ig logo" width="380" height="400"></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="image-container2 text-center">
          <p><img src="arranged.png" alt="ig logo" width="380" height="400"></p>
        </div>
        
      </div>
      <div class="col-md-6">
        <div class="page-header">
          <h2 class="motto2">
            From Our Hands to Your Heart
          </h2>
        </div>
      </div>
    </div>
  </div>
  <br>
  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>





    <a href="logout.php"> Logout here </a>
</body>

</html>