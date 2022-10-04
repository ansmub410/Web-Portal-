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
<?php 
  include 'header.php';
?>

<!-- image slider start -->
<div id="carouselExampleDark" class="carousel carousel-dark slide mt-1" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/sl4.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-white">
        <h5>Gaming Mouse</h5>
        <p>Latest Moble Asus Mouse</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/sl2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-white">
        <h5>Mobile Asserices</h5>
        <p>New Stock</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/sl3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-white">
        <h5>RGB Gaming Pc Case</h5>
        <p>New RGB Design</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- image slider end -->

<section class="section-products">
    <div class="container mt-5 mb-5">
         <div class="row">
<?php
  
  $conn = mysqli_connect('localhost','root','','portal');

     $result=mysqli_query($conn,"SELECT * FROM `product`");
    while ($row=mysqli_fetch_array($result)) {
      $status=$row['status'];
      if($status=='Approved'){
        

  echo"
    <!-- Single Product -->
            <div class='col-md-4 col-lg-2 col-xl-2 '>
              <div class='card shadow-sm border-warning mt-3'>
                <a class='text-decoration-none text-center text-dark' href='product-view.php?id=$row[Id]'>
              <img class='card-img-top m-auto' style='width:187px; height:190px'  src='supplier/product/$row[ProImg]' alt='Card image cap'>
                <h5 class='card-title'>$row[ProName]</h5>
        <p class='card-text'>Rs: $row[ProPrice]</p>
        <input type='hidden' name='ProName' value='$row[ProName]'>
        <input type='hidden' name='ProPrice' value='$row[ProPrice]'>
                </a>
                </div>
            </div>
                
  ";
  }
}
?>

        </div>
    </div>
</section>


<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>