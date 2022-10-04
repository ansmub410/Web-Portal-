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

     <div class="col-md-12 ">
        <h1 class="bg-dark text-white text-center m-4">Purchasing History</h1>
     </div>

<!-- Pending Order -->

<div class="container">
<div class="row">
<div class="col-12 m-auto table-responsive">
  <table class="table table-hover border">
   <thead class="bg-dark text-white">
    <tr>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Email</th>
      <th scope="col">Products</th>
      <th scope="col">Quantity</th>
      <th scope="col">Phone</th>
      <th scope="col">Total</th>
      <th scope="col">Method</th>
      <th scope="col">Status</th>
      <th scope="col">Cancel Order</th>
    </tr>
   </thead>
   <tbody>
<?php
  
  $conn = mysqli_connect('localhost','root','','portal');
  $email=$_SESSION['email'];

     $result=mysqli_query($conn,"SELECT * FROM `orders` WHERE Customer = '$email'");
    while ($row=mysqli_fetch_array($result)) 


  echo"
<tr>
     <td>$row[Name]</td>
     <td>$row[Customer]</td>
     <td>$row[Products]</td>
     <td>$row[Quantity]</td>
     <td>$row[Phone]</td>
     <td>$row[Total]</td>
     <td>$row[Method]</td>
     <td>$row[Status]</td>
     
     <td><a href='delete-order.php? ID=$row[O_id]' name='update' class='btn btn-danger'>cancel Order</a></td>
</tr>

  ";
?>

   </tbody>
   </table>
</div>
</div>
</div>
<!-- pending order end -->



<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>