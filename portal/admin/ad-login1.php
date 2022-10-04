<?php

  $Email = $_POST['email'];
  $Password = $_POST['password'];
  
  $conn = mysqli_connect('localhost','root','','portal');
  $result=mysqli_query($conn,"SELECT * FROM `admin` WHERE  Ad_Email='$Email' AND Ad_Password='$Password' ");

  session_start();

  if (mysqli_num_rows($result)) {

    $_SESSION['email']=$Email;
      echo "
      <script>
        alert('Login successfull');
        window.location.href='admin.php';
      </script>
      ";     
   }
  else{
      echo "
      <script>
        alert('Incorrect Email or Password');
        window.location.href='ad-login.php';
      </script>
      ";
  }

  ?>