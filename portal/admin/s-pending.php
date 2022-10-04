<?php 
 $conn = mysqli_connect('localhost','root','','portal');
 
 $status=$_POST['status'];
 $id=$_POST['id'];

 $result=mysqli_query($conn,"UPDATE `suplier_register` SET `status`='$status' WHERE Id=$id");
  if (($result)) {
      echo "
      <script>
        alert('Status Update Sucessfully');
        window.location.href='supplier-account.php';
      </script>
      ";     
   }
  else{
      echo "
      <script>
        alert('Status Update Failed');
        window.location.href='supplier-account.php';
      </script>
      ";
  }

?>