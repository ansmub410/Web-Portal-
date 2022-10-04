
<?php
$id=$_GET['ID'];

  $conn = mysqli_connect('localhost','root','','portal');
  $result=mysqli_query($conn,"DELETE FROM `registration` WHERE Id=$id");
  header("location:user-account.php");

?>
