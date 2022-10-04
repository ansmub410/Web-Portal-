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
<body class="bg-faded">
<?php 
  include 'header.php';
?>

<!-- main body -->
 <section class="container-fluid ">
    <section class="col-8 rounded m-auto mt-5 mb-5">
    <section class="row m-auto justify-content-center">
    <div class="col-md-7 login-para">
        <h1>Online Portal</h1>
        <p>Online Electronic Accessories Portal is the platform where the user buys accessories that he needs at home in the Covid-19 situation.  In this portal, buyers see all necessary information about the shop and supplier. The design document has the introduction of the design document, ERD diagram, Sequence diagram, Architecture Design diagram, Class diagram, Database Design, Interface Design, and Test case that are briefly defined about the project.</p>
    </div>
    <!-- main body -->
    <!-- Login -->
    <form action="ad-login1.php" method="POST" class="col-lg-4 login-form">
        <div class="">
            <h4 class="text-dark text-center" >Admin Login</h4>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Email">Email</label>
                    <input type="email" name="email" class="form-control" id="Email" placeholder="Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Password">Password</label>
                    <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn btn-dark  w-100 mt-3">Login</button>
        </div>
    </form>
    <!-- login end -->
 </section>
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