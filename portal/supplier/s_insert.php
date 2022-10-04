<?php
 
 $conn = mysqli_connect('localhost','root','','portal');

 if (isset($_POST['submit'])) {

 	$F_name = $_POST['Fname'];
 	$L_name = $_POST['Lname'];
 	$U_name = $_POST['Uname'];
 	$Email = $_POST['email'];
 	$Password = $_POST['password'];
 	$Address = $_POST['address'];
 	$City = $_POST['city'];
 	$Mobile = $_POST['mobile'];
 	$Birthday = $_POST['birthday'];

   $Dup_Email=mysqli_query($conn,"SELECT * FROM `suplier_register` WHERE Email='$Email' ");
   $Dup_Uname=mysqli_query($conn,"SELECT * FROM `suplier_register` WHERE U_name='$U_name' ");

   if (mysqli_num_rows($Dup_Email)) {
      echo "
      <script>
        alert('This Email is already taken');
        window.location.href='supplier_signup.php';
      </script>
      ";
      
   }
   if (mysqli_num_rows($Dup_Uname)) {
      echo "
      <script>
        alert('This unername is already taken');
        window.location.href='supplier_signup.php';
      </script>
      ";   
   }
   else {
      mysqli_query($conn, "INSERT INTO `suplier_register`( `F_name`, `L_name`, `U_name`, `Email`, `Password`, `Address`, `City`, `Mobile`, `Birthday`) VALUES ('$F_name','$L_name','$U_name','$Email','$Password','$Address','$City','$Mobile','$Birthday')");
      echo "
      <script>
        alert('Register Successfully');
        window.location.href='supplier_login.php';
      </script>
      ";

   }
  } 
 ?>