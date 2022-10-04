<?php
session_start();
error_reporting(0);
   $product_name= $_POST['ProName'];
   $product_price= $_POST['ProPrice'];
   $product_quantity= $_POST['iquantity'];
   $supplier_email =$_POST['SupEmail'];


/*insert data in cart*/
if (isset($_POST['AddCart'])) {

 	
 	$_SESSION['cart'][]= array('ProductName'  => $product_name,
 		                     'ProductPrice'    => $product_price,
 		                     'ProductQuantity' => $product_quantity,
                           'SupplierEmail' => $supplier_email,);

                         header("location:view-cart.php");
}
/*insert data in cart end*/

/*remove from cart*/
if (isset($_POST['remove'])) {
   foreach($_SESSION['cart'] as $key => $value){
      if ($value['ProductName'] === $_POST['item']) {
         unset($_SESSION['cart'][$key]);
         $_SESSION['cart']= array_values($_SESSION['cart']);
         header('location:view-cart.php');
         
      }
   }
   
}
/*remove from cart end*/

/*order placed start*/



if ($_SESSION['email']) {
   

$conn = mysqli_connect('localhost','root','','portal');
if (isset($_POST['submit'])) {


   $address=$_POST['address'];
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $method=$_POST['method'];



      $date=date("d,M Y H:i:s");
      $total=0;
      $cust_email=$_SESSION['email'];
      foreach ($_SESSION['cart'] as $key => $value) { 
         $products = $value['ProductName'];
         $quantity = $value['ProductQuantity'];
         $total =$value['ProductPrice'] ; 
         $supplier=$value['SupplierEmail'];
         $p_total=number_format($total,2);
      
      $result=mysqli_query($conn,"INSERT INTO `orders`( `Name`, `Email`, `Address`, `Customer`, `Total`, `Method`, `Phone`, `Quantity`, `Date`,`Products`,`Supplier`) VALUES 
         ('$name','$email','$address','$cust_email','$p_total','$method','$phone','$quantity','$date','$products','$supplier')");}
         if ($result) {
     echo "
         <script>
           alert('Order successfully Placed');
           window.location.href='view-cart.php';
         </script>
      ";              
         }else{
         echo "
          <script>
           alert('Cart is Empty');
           window.location.href='index.php';
          </script>
      ";   
         }


      
   }

}else{
      echo "
          <script>
           alert('Please Login First Than Plce Order');
           window.location.href='login.php';
          </script>
      "; 
}
/*order placed End*/
?>