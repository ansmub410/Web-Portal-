<!-- delete order Start -->
<?php
$id=$_GET['ID'];

  $conn = mysqli_connect('localhost','root','','portal');
  $result=mysqli_query($conn,"DELETE FROM `product` WHERE id=$id");
  header("location:admin.php");

?>