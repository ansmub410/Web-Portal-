<?php
error_reporting(0);
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
	<title>View Cart</title>
</head>
<body>
<?php 
  include 'header.php';
?>

<div class="container mt-5">
<div class="row">
<div class="col-12 m-auto table-responsive">
  <h3 class="bg-dark text-center text-white" >My Cart</h3>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-12 m-auto table-responsive">
  <table class="table table-hover border">
   <thead class="bg-dark text-white">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Total Price</th>
      <th scope="col">Supplier</th>
      <th scope="col">Remove Item</th>
    </tr>
   </thead>
   <tbody>

<?php

$total=0;
$alltotal=0;
$i=0;
  foreach ($_SESSION['cart'] as $key => $value) { 

   $total=((int)$value['ProductPrice'] * (int)$value['ProductQuantity']) ; 
   $alltotal +=((int) $value['ProductPrice'] * (int)$value['ProductQuantity']) ;


  $i= $key +1;
    echo "
    <form action='insert-cart.php' method='POST' >
      <tr>
      <td> $i </td>
      <td><input type='hidden' name='ProName' value='$value[ProductName]'> $value[ProductName] </td>
      <td><input type='hidden' name='ProPrice' value='$value[ProductPrice]'> $value[ProductPrice] </td>
      <td><input type='hidden' name='iquantity' value='$value[ProductQuantity]'>$value[ProductQuantity] </td>
      <td>$total</td>
      <td><input type='hidden' name='SupEmail' value='$value[SupplierEmail]'>$value[SupplierEmail] </td>
      <td><button name='remove' class='btn btn-danger'>Remove</button></td> 
      <td><input type ='hidden' name='item' value='$value[ProductName]' ></td>     
      </tr>
      </form>
      ";     
         }

       
?> 
  
   </tbody>
   </table>

<div class="col-lg-3 m-auto">
  <h3 class="bg-danger  text-white text-center ">Total Price</h3>
  <h1><?php echo number_format($alltotal,2); ?></h1>

<a class='btn btn-primary' href='payment.php'>Place Order</a>
</div>

</div>
</div>
</div>
<!-- End Uploaded product -->
<hr>




<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>