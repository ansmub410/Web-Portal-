<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="include/css/style.css">
	<title>Portal</title>
</head>
<body>
  <nav class="navbar navbar-expand p-0 topbar position-sticky">
   <div class="container-fluid justify-content-center">
    <ul class="navbar-nav d-none d-sm-flex ">
    <li class="nav-item"><a class="nav-link" href="#" data-abc="true">Customer Care</a></li>
    <li class="nav-item"><a class="nav-link" href="#" data-abc="true">Discount offers</a></li>
    <li class="nav-item"><a class="nav-link" href="supplier/supplier_signup.php" data-abc="true">Become a Seller</a></li>
    </ul>
   </div>
  </nav> 


	<header>
		<nav class="navbar navbar-expand-lg navbar_col ">
  <div class="container-fluid">
    <a class="navbar-brand" href="supplier.php"><img src="images/logo.png" height="40" alt="CoolBrand"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="supplier.php">Supplier Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Customer care</a>
        </li>
        
      </ul>
      
      <?php 
      if (isset($_SESSION['email'])) {

    $conn = mysqli_connect('localhost','root','','portal');

    $result=mysqli_query($conn,"SELECT * FROM `suplier_register` WHERE Email='{$_SESSION["email"]}'");
  
     if (mysqli_num_rows($result)> 0) {
   
      while ($row=mysqli_fetch_assoc($result)) {
    
    echo "
    <h5>
    <ul class='navbar-nav'>
      <li class='nav-item dropdown text-decoration-none'>
          <a class='nav-link dropdown-toggle' href='' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
           <span><i class='fa-solid fa-circle-user'></i> $row[F_name] </span> 
          </a>
          <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
            <li><a class='dropdown-item' href='personal-info.php'>Profile</a></li>
            <hr>
            <li><a class='dropdown-item' href='logout.php'>Logout</a></li>
          </ul>
      </li>
    </ul>
    </h5>
 ";
  }}
  
  }else{
      echo "
      <h5>
      <ul class='navbar-nav'>
        <li class='nav-item'>
          <a class='nav-link' href='login.php'> | Login</a>
        </li>
         <li class='nav-item'>
          <a class='nav-link'  href='sign-up.php'> | Sign up</a>
        </li>
      </ul>
      </h5>";
    }
  ?>
      
    </div>
  </div>
</nav>
	</header>


<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>