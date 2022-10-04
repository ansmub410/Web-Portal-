<?php
  $Email = $_POST['email'];
  $Password = $_POST['password'];

  $conn = mysqli_connect('localhost','root','','portal');
  $result=mysqli_query($conn,"SELECT * FROM `suplier_register` WHERE  Email='$Email' AND Password='$Password' ");

 if (mysqli_num_rows($result)>0) {
        while($row=$result->fetch_assoc()){
          $status=$row['status'];
        }
      
      if($status=='Approved'){
  
          session_start();

  if (mysqli_num_rows($result)) {

    $_SESSION['email']=$Email;
      echo "
      <script>
        alert('Login successfull');
        window.location.href='supplier.php';
      </script>
      ";     
   }
  
}else{
  echo "
      <script>
        alert('Account Is not Approve Yet');
        window.location.href='supplier_login.php';
      </script>
      ";}

}else{
      echo "
      <script>
        alert('Incorrect Email or Password');
        window.location.href='supplier_login.php';
      </script>
      ";}
  ?>