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
    <!--  header close -->
    <!-- main body -->
    <!-- Personal info -->
    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-lg-7 ">
                <form action="profile-update.php" method="POST" enctype="multipart/form-data">
<?php 


  $conn = mysqli_connect('localhost','root','','portal');

  $result=mysqli_query($conn,"SELECT * FROM `registration` WHERE Email='{$_SESSION["email"]}'");
  
   if (mysqli_num_rows($result)> 0) {
   
    while ($row=mysqli_fetch_assoc($result)) {
        
?>
                    <div class="col-12 ">
                        <!-- Account details card-->
                        <div class="card m-5">
                            <div class="card-header bg-warning text-center text-white"><h3>Account Details</h3></div>
                            <div class="card-body justify-content-center">

                                <div class="row form-row">
                                    <div class="form-group col-md-5 ">
                                        <label for="inputEmail4">First Name</label>
                                        <input name="Fname" type="text" class="form-control" id="inputEmail4"
                                            placeholder="First Name" required value="<?php echo $row['F_name']; ?>">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="inputPassword4">Last Name</label>
                                        <input name="Lname" type="text" class="form-control" id="inputPassword4"
                                            placeholder="Last Name" required value="<?php echo $row['L_name']; ?>">
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="form-group col-md-5">
                                        <label for="inputAddress">User Name</label>
                                        <input name="Uname" type="text" class="form-control" id="inputAddress"
                                            placeholder="@username" required value="<?php echo $row['U_name']; ?>">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="inputEmail4">Email</label>
                                        <input name="email" type="email" class="form-control" id="inputEmail4"
                                            placeholder="Email" required value="<?php echo $row['Email']; ?>">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="form-group col-md-5">
                                        <label for="inputAddress">Password</label>
                                        <input name="password" type="password" class="form-control" id="inputAddress"
                                            required value="<?php echo $row['Password']; ?>">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="inputEmail4">New Password</label>
                                        <input name="new_password" type="password" class="form-control" id="inputEmail4"
                                            required value="<?php echo $row['Password']; ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="inputAddress">Address</label>
                                    <input name="address" type="text" class="form-control" id="inputAddress"
                                        placeholder="Enter Your Address" required
                                        value="<?php echo $row['Address']; ?>">
                                </div>
                                <div class="row form-row">
                                    <div class="form-group col-md-5 ">
                                        <label for="inputCity">City</label>
                                        <input name="city" type="text" class="form-control" id="inputCity"
                                            placeholder="Enter Your City" required value="<?php echo $row['City']; ?>">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="inputCity">Mobile</label>
                                        <input name="mobile" type="number" class="form-control" id="inputCity"
                                            placeholder="+92 30000000" required value="<?php echo $row['Mobile']; ?>">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="form-group col-md-5">
                                        <label class="small mb-1" for="inputBirthday">Birthday</label>
                                        <input name="birthday" class="form-control" id="inputBirthday" type="date"
                                            name="birthday" placeholder="Enter your birthday" required
                                            value="<?php echo $row['Birthday']; ?>">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label class="small mb-1" for="image">Image</label>
                                        <input class="form-control" type="file" accept="image/*" id="image"
                                            name="image">
                                    </div>
                                </div>

            <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
            <button name="submit" type="submit" class="btn btn-danger text-white mt-2 w-100">Update</button>
                                <?php 
    }
    
   }
  ?>

                </form>
            </section>
        </section>
    </section>

    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Personal info end -->










    <!-- Footer -->
    <?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>>