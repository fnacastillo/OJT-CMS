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

<!-- Your HTML code continues here -->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <style> /* Navbar Styles */
        .navbar {
            background-color: #5E503F !important;
        }

        /* Navbar Text Color */
        .navbar-brand, .navbar-nav .nav-link {
            color: white !important;
        }

        /* Hover Effect */
        .navbar-nav .nav-link:hover {
            color: #001D4A !important;
        }

        /* Adjusting padding to accommodate fixed navbar */
        body {
            padding-top: 56px; /* Adjust this value based on the height of your navbar */
        }

        .greetings{
            margin-top: 40px;
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


    <h1 class="greetings"> Hello, <?php echo $user_data['user_name']; ?></h1>

    <!-- Contents -->
    <!-- Your carousel and other HTML content continues here -->

    <!-- Logout link -->
    <a href="logout.php">Logout here</a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
