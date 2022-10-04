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
    <!-- sign up -->
    <section class="container-fluid">
    <section class="row offset-1">
    <div class="col-md-5 signup-para">
        <h1>Online Portal</h1>
        <p>Online Electronic Accessories Portal is the platform where the user buys accessories that he needs at home in the Covid-19 situation.  In this portal, buyers see all necessary information about the shop and supplier. The design document has the introduction of the design document, ERD diagram, Sequence diagram, Architecture Design diagram, Class diagram, Database Design, Interface Design, and Test case that are briefly defined about the project.</p>
    </div>
    <form class="col-lg-6 " action="insert.php" method="POST">
        <div class="login-form">
            <h2>Sign Up</h2>
            <div class="row form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">First Name</label>
                    <input name="Fname" type="text" class="form-control" id="inputEmail4" placeholder="First Name"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Last Name</label>
                    <input name="Lname" type="text" class="form-control" id="inputPassword4" placeholder="Last Name"
                        required>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">User Name</label>
                <input name="Uname" type="text" class="form-control" id="inputAddress" placeholder="@username" required>
            </div>
            <div class="row form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input name="password" type="text" class="form-control" id="inputPassword4"
                        placeholder="Password" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input name="address" type="text" class="form-control" id="inputAddress"
                    placeholder="Enter Your Address" required>
            </div>
            <div class="row form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input name="city" type="text" class="form-control" id="inputCity" placeholder="Enter Your City"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Mobile</label>
                    <input name="mobile" type="number" class="form-control" id="inputCity" placeholder="+92 30000000"
                        required>
                </div>
            </div>
            <div class="row form-row">
                <div class="form-group col-md-4">
                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                    <input name="birthday" class="form-control" id="inputBirthday" type="date" name="birthday"
                        placeholder="Enter your birthday" value="06/10/1988" required>
                </div>
            </div>

            <button name="submit" type="submit" class="btn btn-color">Sign up</button>
            <button name="submit" type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</section>
</section>
    <!-- sign up end -->






<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>