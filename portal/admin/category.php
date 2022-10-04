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
	<title>Portal</title>
</head>
<body>
<?php 
  include 'header.php';
?>
  
<!-- ADD Category Products -->

<div class="col-5 mt-5 m-auto table-responsive">
    <h1 class="text-center">Add Category</h1>
    <div class=" align-items-center">
    <form class=" form-control mt-5" action="categories-add.php" method="POST">
     <input class="form-control" type="text" name="categories" required="" placeholder="Add Categories">
      <button name="submit" type="submit" class="btn btn-warning mb-2 mt-2 w-100">Add Categories</button>
      </form>
      </div>
      <div class="col-md-8 m-auto">
      <table class=" table table-hover border mt5">
                    <?php
      $sql=mysqli_query($conn,"SELECT * FROM `categories`");

       ?>
                    <h1 class="text-center">Categories</h1>
                    <thead class="bg-dark text-white ">
                        <tr class="text-center">
                            <th scope="">Categories</th>
                            <th  scope="">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        if (mysqli_num_rows($sql)>0) {
        while($row=$sql->fetch_assoc()){
            
        echo"
        <input type='hidden' name='id' value=' $row[ID]'>
                        <tr class='text-center'>
                          <td> $row[categories] </td>
                          <td><a href='categories-delete.php? ID=$row[ID]' name='update' class='btn btn-danger'>Delete</a></td>
                        </tr>

               
      ";}
       } 
      ?>
                    </tbody>
                </table>
</div>
</div>

<!-- ADD Category product -->


</div>


<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>