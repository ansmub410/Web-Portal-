<?php 
 $conn = mysqli_connect('localhost','root','','portal');
 
 $status=$_POST['status'];
 $id=$_POST['id'];

 $result=mysqli_query($conn,"UPDATE `orders` SET `Status`='$status' WHERE O_id=$id");
  if (($result)) {
      echo "
      <script>
        alert('Status Update Sucessfully');
        window.location.href='pending-order.php';
      </script>
      ";     
   }
  else{
      echo "
      <script>
        alert('Status Update Failed');
        window.location.href='pending-order.php';
      </script>
      ";
  }

?>

<!-- delete order Start -->
<?php
$id=$_GET['ID'];

  $conn = mysqli_connect('localhost','root','','portal');
  $result=mysqli_query($conn,"DELETE FROM `orders` WHERE O_id=$id");
  header("location:pending-order.php");

?>


<!-- delete order Start -->