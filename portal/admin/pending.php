<?php 
 $conn = mysqli_connect('localhost','root','','sst');
 
 $status=$_POST['status'];
 $id=$_POST['id'];

 $result=mysqli_query($conn,"UPDATE `registration` SET `status`='$status' WHERE Id=$id");
  if (($result)) {
      echo "
      <script>
        alert('Status Update Sucessfully');
        window.location.href='admin.php';
      </script>
      ";     
   }
  else{
      echo "
      <script>
        alert('Status Update Failed');
        window.location.href='admin.php';
      </script>
      ";
  }

?>

<!-- delete order Start -->
<?php
$id=$_GET['ID'];

  $conn = mysqli_connect('localhost','root','','sst');
  $result=mysqli_query($conn,"DELETE FROM `registratio` WHERE id=$id");
  header("location:admin.php");

?>