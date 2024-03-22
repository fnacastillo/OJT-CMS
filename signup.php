<?php
session_start();
	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		// posted something
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
			
			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}
		else
		{
			echo "Please enter valid information";
		}

	}


?>

<html>
<head>
	<title>Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="signup.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
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
            <li><a class="dropdown-item" href="order.html">Create Order</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="">Track Order</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


	<div id="box">
		<form method="post">
		<div style="font-size: 20px; margin: 10px; color:white;">Signup</div>
		<input id="text" "type="text" name="user_name"><br><br>
		<input id="text" type="password" name="password"><br><br>
		<input id="button" type="submit" value="signup"><br><br>

		<a href="login.php">Click to login</a><br><br>
		</form>
	</div>

</body>

</html>