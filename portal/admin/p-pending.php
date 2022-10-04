<?php 
 $conn = mysqli_connect('localhost','root','','portal');
 
 $status=$_POST['status'];
 $id=$_POST['id'];

 $result=mysqli_query($conn,"UPDATE `product` SET `status`='$status' WHERE Id=$id");
  if (($result)) {
      echo "
      <script>
        alert('Product Status Update Sucessfully');
        window.location.href='product-requests.php';
      </script>
      ";     
   }
  else{
      echo "
      <script>
        alert('Status Update Failed');
        window.location.href='product-requests.php';
      </script>
      ";
  }

?>