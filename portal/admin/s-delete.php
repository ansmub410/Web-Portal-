
<?php
$id=$_GET['ID'];

  $conn = mysqli_connect('localhost','root','','portal');
  $result=mysqli_query($conn,"DELETE FROM `suplier_register` WHERE Id=$id");
  header("location:supplier-account.php");

?>