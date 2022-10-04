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

<!-- user account display -->
<div class="container mt-5">
<div class="row">
<div class="col-12 m-auto table-responsive">
     <h2 class=" col-md-3 bg-dark text-white text-center">User Account</h2>
                <table class=" table table-hover border mt5 ">
                    <?php
                    $conn = mysqli_connect('localhost','root','','portal');
                   $sql=mysqli_query($conn,"SELECT * FROM `registration`");

       ?>
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Status</th>
                            <th scope="col">Status</th>
                            <th scope="col">Delete Account</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php
        if (mysqli_num_rows($sql)>0) {
        while($row=$sql->fetch_assoc()){

          echo "
            
 <tr>
                            <td scope='row'> $row[Id]  </td>
                            <td> $row[F_name] </td>
                            <td> $row[L_name] </td>
                            <td> $row[U_name] </td>
                            <td>$row[Email]</td>
                            <td>$row[Password] </td>
                            <td>$row[Address]</td>
                            <td>$row[City]</td>
                            <td>$row[Mobile]</td>
                            <td>$row[Birthday] </td>
                            <td>$row[status]</td>
                            <td>
                           <form action='u-pending.php' method='POST'>       
                         <select name='status' onchange='form.submit()'>
                          <option value='Pending'>Pending</option>
                          <option value='Pending'>Pending</option>
                          <option value='Approved'>Approve</option>
                         </select>
                         <input type='hidden' name='id' value='$row[Id]'>
                        </form>
                    </td>
                            <form action='delete-user.php' method='GET'>
                                <td><a href='u-delete.php? ID=$row[Id]' name='update' class='btn btn-danger'>Delete</a></td>
                            </form>
                        </tr>";

      }
       } 
      ?>
                    </tbody>
                </table>
              </div>
<!-- user account display end -->

</div>
</div>

<?php 
  include 'footer.php';
?>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>