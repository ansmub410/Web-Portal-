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
<body >
<?php 
  include 'header.php';
?>

<!-- Sidebar-->

    <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="col-md-2 border-end bg-dark" style="height:800px;" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-dark"><h1 class="text-white text-center p-3" >Dashboard</h1>
                 </div><hr class="bg-white">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action bg-dark p-3 text-white" href="product/p-index.php">Post Product</a>
                    <a class="list-group-item list-group-item-action bg-dark p-3 text-white" href="update-order.php">Update Product</a>
                    <a class="list-group-item list-group-item-action bg-dark p-3 text-white" href="pending-order.php">Manage Order</a>
                </div>
            </div>
                <!-- Page content-->
                <div class="container-fluid">
                    <!-- main body -->
                  <div class="container-fluid row">
                   <section class="section-products">
    <div class="container mt-5 mb-5">
         <div class="row">
            <h1>Supplier Products</h1><hr>

<?php
  
  
  $conn = mysqli_connect('localhost','root','','portal');
   $supplier_email=$_SESSION['email'];

     $result=mysqli_query($conn,"SELECT * FROM `product` WHERE sup_email='$supplier_email'");
    while ($row=mysqli_fetch_array($result))
        

  echo"
    <!-- Single Product -->
            <div class='col-md-4 col-lg-2 col-xl-2 '>
              <div class='card shadow-sm border-warning mt-3 text-center'>
              <img class='card-img-top m-auto' style='width:187px; height:190px'  src='product/$row[ProImg]' alt='Card image cap'>
                <h5 class='card-title'>$row[ProName]</h5>
        <p class='card-text'>Rs: $row[ProPrice]</p>
        <input type='hidden' name='ProName' value='$row[ProName]'>
        <input type='hidden' name='ProPrice' value='$row[ProPrice]'>
                </div>
            </div>
                
  ";

?>

        </div>
    </div>
</section>

                  </div>
                </div>
            </div>



<?php 
  include '../footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>