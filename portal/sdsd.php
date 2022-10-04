$check_product = array_column($_SESSION['cart'],'ProductName');

   if (in_array($product_name,$check_product)) {
      echo"
      <script>
      alert('Product Already Added');
      window.location.href='index.php';
      </script>
      ";
   }else{
 			


/*Checkout Start*/
echo "hello";
$conn = mysqli_connect('localhost','root','','portal');
if (isset($_POST['submit'])) {

   $address=$_POST['address'];
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $method=$_POST['method'];

   if (isset($_SESSION['cart'])) { if (count($_SESSION['cart'])==0) {
      echo "
      <script>
        alert('Cart is empty');
        window.location.href='view-cart.php';
      </script>
      ";       
   }else{

      $date=date("d,M Y H:i:s");
      $total=0;
      $products="";
      $quantity="";
      $cust_email=$_SESSION['email'];
      foreach ($_SESSION['cart'] as $key => $value) { 
         $products .= $value['ProductName']. '==';
         $quantity .= $value['ProductQuantity']. '==';
         $total =$value['ProductPrice'] * $value['ProductQuantity'] ; 
         $alltotal = $alltotal + $total;
         $p_total=number_format($alltotal,2);
      }
      $result=mysqli_query($conn,"INSERT INTO `orders`( `Name`, `Email`, `Address`, `Customer`, `Total`, `Method`, `Phone`, `Quantity`, `Date`, `Products`) VALUES 
         ('$name','$email','$address','$cust_email','$p_total','$method','$phone','$quantity','$date','$products'");
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
           alert('Order Placed Failed');
           window.location.href='view-cart.php';
          </script>
      ";   
         }


      
   }
   }
   
}
/*Checkout End*/





  $date=date("d,M Y H:i:s");
      $total=0;
      $cust_email=$_SESSION['email'];
      foreach ($_SESSION['cart'] as $key => $value) { 
         $products .= $value['ProductName']. '==';
         $quantity .= $value['ProductQuantity']. '+';
         $total =$value['ProductPrice'] * $value['ProductQuantity'] ; 
         $supplier=$value['SupplierEmail'];
         $alltotal = $alltotal + $total;
         $p_total=number_format($alltotal,2);