<?php
session_start();

include("connection.php");
include("functions.php");

// Check if the user is logged in
$user_data = check_login($con);

// If the user is not logged in, redirect them to the login page
if(!$user_data) {
    header("Location: login.php");
    exit; // Stop further execution
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Order Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
   margin: 0; /* Remove default body margin */
    padding-top: 100px; /* Add padding to push content downwards */
}

/* Navbar Styles */
.navbar {
    background-color: #5E503F !important;
    margin-bottom: 0;
}

/* Navbar Text Color */
.navbar-brand, .navbar-nav .nav-link {
    color: white !important;
}

/* Hover Effect */
.navbar-nav .nav-link:hover {
    color: #001D4A !important;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #5E503F;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

label {
    font-weight: bold;
}

input[type="text"], input[type="email"], input[type="number"], textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
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


    <div class="container mt-5">
        <h1 class="text-center mb-4">Custom Order Form</h1>
        <form action="/submit_custom_order" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required min="1">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Photo Inspiration:</label>
                <input type="file" class="form-control-file" id="photo" name="photo" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit Order</button>

        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
