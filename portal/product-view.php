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


<?php

$id=$_GET['id'];
  $conn = mysqli_connect('localhost','root','','portal');

     $result=mysqli_query($conn,"SELECT * FROM `product` WHERE Id=$id");
     while ($row=mysqli_fetch_array($result)) {
      $status=$row['status'];
      if($status=='Approved'){
      

  echo"  

  <div class='container mt-5 mb-5' >
  <div class='card border-warning'  >
  <div class='container-fluid' >
  <div class='wrapper row'>
      <div class='col-md-4 '>
       <img class='card-img-top col-md-4 mt-2 ' style='width:350px;height:400px' src='supplier/product/$row[ProImg]' alt='Card image cap'>
       </div>
      <div class='col-md-5 mt-2'>
        <form action='insert-cart.php' method='POST'>
       <h3 class='product-title'>$row[ProName]</h3>
       <p class='product-description'>$row[ProInfo]</p>
       <hr><br>
        <h3 class='card-text text-warning mt-2'>Rs: $row[ProPrice]</h3><br>
        <input type='hidden' name='ProName' value='$row[ProName]'>
        <input type='hidden' name='ProPrice' value='$row[ProPrice]'>
        <lable for='iquantity'><b> Quantity:</b> </lable>
        <input class='w-25 border-warning' type='number' name='iquantity' id='iquantity' value='1' min='1' max='20' placeholder='Quantity'><br><br>
         <input type='hidden' name='SupEmail' value='$row[sup_email]'>
        <input type='submit' name='AddCart' class='btn btn-warning text-white w-50 'value='Add to Cart' >
        </form>
       </div>
        <div class='col-md-3 bg-color'>
        
        <p class='text-dark text-center' ><b>Service</b></p>
        <p><i class='fa-solid fa-truck'></i> <b>Delivery:</b> 4-7(days)</p>
        <p><i class='fa-solid fa-truck-fast'></i> <b>Express:</b> Tomorrow</p>
        <p><i class='fa-solid fa-money-bill-1-wave'></i> <b>Cash on delivery:</b> Avalable</p><hr>
        <h3 class='mt-2  text-center bg-warning'>Supplier Details</h3>
        <h7 class='card-text'>Supplier Email: $row[sup_email]</h7><hr>
        </div>
      
     </div>
    
  </div>
  </div>
  </div>
  </div>
  </div>
";
  }
}?>

	<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>