<?php
session_start();
  $conn = mysqli_connect('localhost','root','','portal');
  $supplier_email=$_SESSION['email'];


if(isset($_POST['submit'])){
	$product_name=$_POST['Pname'];
	$product_price=$_POST['Pprice'];
	$product_Info=$_POST['Pinfo'];
	$product_image=$_FILES['Pimg'];
	 $img_loc=$_FILES['Pimg']['tmp_name'];
	 $img_name=$_FILES['Pimg']['name'];
	    $img_desti="images/.$img_name";
	 move_uploaded_file($img_loc, "images/.$img_name");
	 $product_category=$_POST['Ppage'];



	 /*insert_product*/
	 mysqli_query($conn,"INSERT INTO `product`( `ProName`, `ProPrice`, `ProInfo`, `ProImg`, `Category`,`sup_email`) VALUES ('$product_name','$product_price','$product_Info','$img_desti','$product_category','$supplier_email')");
	 echo "
      <script>
        alert('Upload Successfully');
        window.location.href='p-index.php';
      </script>
      ";

}



?>
