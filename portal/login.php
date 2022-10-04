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


<!-- main body -->
 <section class="container-fluid">
    <section class="row offset-1">
    <div class="col-md-6 login-para">
        <h1>Online Portal</h1>
        <p>Online Electronic Accessories Portal is the platform where the user buys accessories that he needs at home in the Covid-19 situation.  In this portal, buyers see all necessary information about the shop and supplier. The design document has the introduction of the design document, ERD diagram, Sequence diagram, Architecture Design diagram, Class diagram, Database Design, Interface Design, and Test case that are briefly defined about the project.</p>
    </div>
    <!-- Login -->
    <form action="login1.php" method="POST" class="col-lg-3 login-form">
        <div class="">
            <h2>Login</h2>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Email</label>
                    <input name="email" type="text" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Password</label>
                    <input name="password" type="password" class="form-control" id="inputPassword4"
                        placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn btn-color">Login</button>
            <div>Do you not have account?<a style="color:blue;" href="sign-up.php">Sign Up</a></div>
            <div>Are You Supplier?<a style="color:blue;" href="supplier/supplier_login.php"> Login as Supplier</a></div>
            <div>Are You Admin?<a style="color:blue;" href="admin/ad-login.php">Login</a></div>
        </div>
    </form>
 </section>
 </section>
    <!-- login end -->




<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>