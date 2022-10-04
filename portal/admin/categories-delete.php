 <?php
$id=$_GET['ID'];

  $conn = mysqli_connect('localhost','root','','portal');
  $result=mysqli_query($conn,"DELETE FROM `categories` WHERE ID=$id");
  header("location:category.php");

?>