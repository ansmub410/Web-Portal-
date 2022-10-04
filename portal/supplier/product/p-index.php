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
	<title>Product Post</title>
</head>
<body>
<?php 
  include 'header.php';
?>
<!-- Post Products -->
    <section class="container-fluid">
     <div class="col-md-12 ">
        <h1 class="bg-dark text-white text-center m-4">Post Products</h1>
     </div>
    <section class="row d-flex justify-content-center ">
    <form class="col-lg-5  " action="p-insert.php" method="POST" enctype="multipart/form-data">
        <div class="login-form">
            <h2>Post Products</h2>
            <div class="row form-row">
                <div class="form-group col-md-6">
                    <label for="ProName">Product Name</label>
                    <input name="Pname" type="text" class="form-control" id="ProName" placeholder="Product Name"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="ProPrice">Product Price</label>
                    <input name="Pprice" type="text" class="form-control" id="ProPrice" placeholder="Product Price"
                        required>
                </div>
            </div>
            <div class="form-group ">
                <label for="ProInfo">Product Information</label>
                <input name="Pinfo" type="text" class="form-control input-lg" id="ProInfo" placeholder="Product Information" required>
            </div>
            <div class="form-group">
                <label >Product Image</label>
                <input name="Pimg" type="file" class="form-control" required>
            </div>
             <div class="form-group">
                <label >Select Product Category</label>
                <select class="form-select" name="Ppage">
                    <?php
                     $sql=mysqli_query($conn,"SELECT * FROM `categories`");
                     if (mysqli_num_rows($sql)>0) {
                     while($row=$sql->fetch_assoc()){
                    echo"
                  <option value='$row[categories]'> $row[categories]</option>
                ";
                }}?>
                </select>
            </div>
            <button name="submit" type="submit" class="btn btn-danger text-white mt-2">Upload</button>

        </div>
    </form>
</section>
</section>


<!-- Uploaded Products -->

<div class="container">
<div class="row">
<div class="col-12 m-auto table-responsive">
  <table class="table table-hover border">
   <thead class="bg-dark text-white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Information</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Catrgory</th>
      <th scope="col">Status</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
   </thead>
   <tbody>
<?php
  
  $conn = mysqli_connect('localhost','root','','portal');
   $supplier_email=$_SESSION['email'];

     $result=mysqli_query($conn,"SELECT * FROM `product` WHERE sup_email='$supplier_email'");
    while ($row=mysqli_fetch_array($result)) 


  echo"
<tr>
     <td>$row[Id]</td>
     <td>$row[ProName]</td>
     <td>$row[ProPrice]</td>
      <td>$row[ProInfo]</td>
     <td><img src='$row[ProImg]' height='50px'></td>
     <td>$row[Category]</td>
     <td>$row[status]</td>
     <td><a href='p-update.php? ID=$row[Id]' name='update' class='btn btn-info'>Update</a></td>
     <td><a href='p-delete.php? ID=$row[Id]' name='update' class='btn btn-danger'>Delete</a></td>
</tr>

  ";
?>

   </tbody>
   </table>
</div>
</div>
</div>
<!-- End Uploaded product -->
  



<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>