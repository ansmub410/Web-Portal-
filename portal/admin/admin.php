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
<!-- Sidebar-->

    <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="col-md-2 border-end bg-dark" style="height:900px;" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action bg-dark p-3 text-white" href="admin.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action bg-dark p-3 text-white" href="user-account.php">User Accounts</a>
                    <a class="list-group-item list-group-item-action bg-dark p-3 text-white" href="supplier-account.php">Supplier Account</a>
                    <a class="list-group-item list-group-item-action bg-dark p-3 text-white" href="product-requests.php">Supplier Product Request</a>
                    <a class="list-group-item list-group-item-action bg-dark p-3 text-white" href="category.php">category</a>
                </div>
            </div>
                <!-- Page content-->
                <div class="container-fluid">
                    <!-- main body -->
                  <div class="container-fluid row">
                   <section class="section-products">
    <div class="container mt-5 mb-5">
         <div class="row">
        

        </div>
    </div>
</section>

</div>
</div>
</div>

  

<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>