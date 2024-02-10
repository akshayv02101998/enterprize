<?php
include 'connection.php';
if(isset($_GET['id'])){
   $id=$_GET['id'];

   $delete_product="DELETE FROM  `product_card` WHERE `product_id`='$id'";
   $query=mysqli_query($conn,$delete_product);
   if($query){
 header('location:card.php');
   }else{
      echo"error";
   }
}

?>