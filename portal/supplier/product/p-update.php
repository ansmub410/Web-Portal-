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
	<title>Update Product</title>
</head>
<body>
<?php 
  include 'header.php';
?>



<?php
$id=$_GET['ID'];

  $conn = mysqli_connect('localhost','root','','portal');
  $result=mysqli_query($conn,"SELECT * FROM `product` WHERE Id=$id");
  $data=mysqli_fetch_array($result);
?>
<!-- Post Products -->
    <section class="container-fluid">
     <div class="col-md-12 ">
        <h1 class="bg-dark text-white text-center m-4">Update Products</h1>
     </div>
    <section class="row d-flex justify-content-center ">
    <form class="col-lg-5  " action="update1.php" method="POST" enctype="multipart/form-data">
        <div class="login-form">
            <h2>Update Products</h2>
            <div class="row form-row">
                <div class="form-group col-md-6">
                    <label for="ProName">Product Name</label>
                    <input name="Pname" type="text" class="form-control" id="ProName" value="<?php echo $data['ProName']; ?>" 
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="ProPrice">Product Price</label>
                    <input name="Pprice" type="text" class="form-control" id="ProPrice" value="<?php echo $data['ProPrice']; ?>"
                        required>
                </div>
            </div>
            <div class="form-group ">
                <label for="ProInfo">Product Information</label>
                <input name="Pinfo" type="text" class="form-control input-lg" id="ProInfo" value="<?php echo $data['ProInfo']; ?>" required>
            </div>
            <div class="form-group ">
                <label >Product Image</label>
                <div class="col-md-3">
                 <img class="w-75" src="<?php echo $data['ProImg']; ?>" >
                </div>
                 <input name="Pimg"  type="file" class="form-control" required>

            </div>   
             <div class="form-group">
                <label >Select Product Category</label>
                <select class="form-select" name="Ppage">
                  <option value="mobile">Mobile</option>
                  <option value="laptop">Laptop</option>
                  <option value="pc">PC</option>
                </select>
            </div>
            <input type="hidden" name="Id" value="<?php echo $data['Id']; ?>">
            <button name="submit" type="submit" class="btn btn-danger text-white mt-2 w-100">Update</button>

        </div>
    </form>
</section>
</section>




<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

