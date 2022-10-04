<?php

  $conn = mysqli_connect('localhost','root','','portal');
   if (isset($_POST['submit'])) {

  $id=$_POST['Id'];
  $F_name=$_POST['Fname'];
  $L_name=$_POST['Lname'];
  $U_name=$_POST['Uname'];
  $Email=$_POST['email'];
  $Address=$_POST['address'];
  $City=$_POST['city'];
  $Mobile=$_POST['mobile'];
  $Birthday=$_POST['birthday'];
  $Password=$_POST['password'];
  $New_Password=$_POST['new_password'];
  if ($Password === $New_Password) {
      $image_name=$_FILES['image']['name'];
      $image_tmp_name=$_FILES['image']['tmp_name'];
      $image_size=$_FILES['image']['size'];
      $image_new_name= rand(). $image_name;
  

      if ($image_size> 5242880) {
            echo "<script>alert('Image size is to large. Maximan size 5mb ');</script>";
      }
      else{
        $result=mysqli_query($conn,"UPDATE `registration` SET `F_name`='$F_name',`L_name`='$L_name',`U_name`='$U_name',`Email`='$Email',`Password`='$Password',`Address`='$Address',`City`='$City',`Mobile`='$Mobile',`Birthday`='$Birthday',`Image`='$image_new_name' WHERE Id=$id ");
        if ($result) {
          echo "
      <script>
        alert('Update successfull');
        window.location.href='personal-info.php';
      </script>
      ";             
        }
        else{
        echo "
         <script>
        alert('Update Unsuccessfull');
        window.location.href='personal-info.php';
      </script>
      "; ;
        }
      }
  }
  else{
    echo "<script>alert('Password not match. Please try again');</script>";

  }
  }
?>