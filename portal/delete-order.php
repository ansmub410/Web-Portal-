<?php
$id=$_GET['ID'];

  $conn = mysqli_connect('localhost','root','','portal');
  $result=mysqli_query($conn,"DELETE FROM `orders` WHERE O_id=$id");
  header("location:purc_history.php");

?>