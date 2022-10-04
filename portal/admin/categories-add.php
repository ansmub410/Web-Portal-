<?php
 
 $conn = mysqli_connect('localhost','root','','portal');

 if (isset($_POST['submit'])) {

  $Categories = $_POST['categories'];

   $Dup_categories=mysqli_query($conn,"SELECT * FROM `categories` WHERE categories='$Categories' ");

   if (mysqli_num_rows($Dup_categories)) {
      echo "
      <script>
        alert('This Categories is already Have');
        window.location.href='category.php';
      </script>
      ";      
   }
   else {
    mysqli_query($conn,"INSERT INTO `categories`(`categories`) VALUES ('$Categories')");
      echo "
      <script>
        alert('Categories Add Successfully');
        window.location.href='category.php';
      </script>
      ";

   }
  } 
 ?>
