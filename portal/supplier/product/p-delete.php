
<?php
$id=$_GET['ID'];

  $conn = mysqli_connect('localhost','root','','portal');
  $result=mysqli_query($conn,"DELETE FROM `product` WHERE Id=$id");
  header("location:p-index.php");

?>
