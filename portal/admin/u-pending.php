<?php 
 $conn = mysqli_connect('localhost','root','','portal');
 
 $status=$_POST['status'];
 $id=$_POST['id'];

 $result=mysqli_query($conn,"UPDATE `registration` SET `status`='$status' WHERE Id=$id");
  if (($result)) {
      echo "
      <script>
        alert('Status Update Sucessfully');
        window.location.href='user-account.php';
      </script>
      ";     
   }
  else{
      echo "
      <script>
        alert('Status Update Failed');
        window.location.href='user-account.php';
      </script>
      ";
  }

?>
