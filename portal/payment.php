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

  
<!-- check out form start -->
<div class="container mb-5">
    <div class="py-5 text-center">
        <h2>Thanks for choosing us</h2>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted text-center">Your cart</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
<?php

$total=0;
$alltotal=0;
$i=0;
  foreach ($_SESSION['cart'] as $key => $value) { 

   $total=((int)$value['ProductPrice'] * (int)$value['ProductQuantity']) ; 
   $alltotal +=((int) $value['ProductPrice'] * (int)$value['ProductQuantity']) ;


  $i= $key +1;
    echo "

            
                <li class='list-group-item d-flex justify-content-between lh-condensed'>
                    <div>
                        <h6 class='my-0'>$value[ProductName]</h6>
                        <small class='text-muted'>Brief description</small>
                    </div>
                    <span class='text-muted'>$value[ProductPrice] </span>
                </li>
            
       
";     
}       
?> 
</ul>
<li class="list-group-item d-flex justify-content-between">
                    <span>Total Amount</span>
                    <strong><?php echo $alltotal; ?></strong>
                </li>
 </div>
        <div class="col-md-8 order-md-1 bg-light">
            <h4 class="mb-3">Billing address</h4>
            <form  action="insert-cart.php" method="POST">
                <div class="mb-3">
                    <label for="username">Full Name</label>
                    <div class="input-group">
                      <input class="form-control" type="text" name="name" placeholder="Enter Name" autocomplete="off" required>
                        <div class="invalid-feedback" style="width: 100%;"> Your Name is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                          <input class="form-control"  type="text" name="email" placeholder="Enter Your Email " autocomplete="off" >
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input class="form-control"  type="text" name="address" placeholder="Enter Your Address" autocomplete="off" required>
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <hr class="mb-4">
                <h4 class="mb-3">Payment</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                     <input type="radio" name="method" value="Cash On Delivery" checked>
                     <label>Cash On Delivery</label><br>
                     <input type="radio" name="method" value="Bank Transfer" >
                     <label>Bank Transfer</label><br>
                     <input type="radio" name="method" value="Jazz Cash / EasyPaisa">       
                     <label>Jazz Cash / EasyPaisa</label>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary mb-3 w-100" type="submit" name="submit">Place Order</button>
            </form>
        </div>
    </div>
</div>
<!-- check out form start -->






<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>