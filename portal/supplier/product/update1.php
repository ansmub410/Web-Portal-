<!-- Update Product  -->
<?php
if (isset($_POST['submit'])) {
	
	$id=$_POST['Id'];
	$product_name =$_POST['Pname'];
	$product_price=$_POST['Pprice'];
	$product_Info=$_POST['Pinfo'];
	$product_image=$_FILES['Pimg'];
	 $img_loc=$_FILES['Pimg']['tmp_name'];
	 $img_name=$_FILES['Pimg']['name'];
	    $img_desti="images/.$img_name";
	 move_uploaded_file($img_loc, "images/.$img_name");
	 $product_category=$_POST['Ppage'];

  $conn = mysqli_connect('localhost','root','','portal');
  $result=mysqli_query($conn,"UPDATE `product` SET `ProName`='$product_name',`ProPrice`='$product_price',`ProInfo`='$product_Info',`ProImg`='$img_desti',`Category`='$product_category' WHERE Id=$id ");
      header('location:p-index.php');

}
?>
<!-- End Update Product  -->
