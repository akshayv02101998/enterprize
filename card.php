<?php
 SESSION_START();
 if(!isset( $_SESSION['Name'])){
   echo "your are logout!";
   header('location:index.php');
 }else{
  $user=$_SESSION['Name'];
 }
  
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Document</title>
    <style>
      *{
        box-sizing: border-box;
        padding: 0px;
        margin: 0px;
      }

h1{
  text-align: center;
  margin-top: 200px;

}
.box{
  background-color: brown;
}
p{
  animation-name: akshay;
  animation-duration:100s ;
  width:1200px;
  text-align: center;
  color: white;

 

}

@keyframes akshay {
  0%   {background-color:red ;}
  25%  {background-color:blue ;}
  50%  {background-color:navy ;} 
  100% {background-color:yellow ;}
 100% {background-color: brown;} 
}


.btn{
  color:green;
  background-color:black;
  width:150px;
  height: 30px;
  margin-left:850px;
  margin-top: 7px;
  padding:5px;
   border-radius: 5px;
   border-color: green;

}
.btn:hover{
color:green;
background-color: black;
border-color: black;
}

nav{
  background-color: black;
  
}
thead{
background-color: black;
color: white;
height: 40px;

}
table{
  width:1000px;
  margin-left:200px;

}
 img{
  width:100px;
}
h4{
  margin-left:950px;
}
hr{
  width:250px;
  margin-left:950px;
}
.total-amount {
            text-align: center;
            margin-top: 20px;
        }

        .subtotal {
            text-align: center;
        }
         thead th{
          padding-left:10px;
        }
    #myModal{
      width:350px;
      margin-left: 400px;
      margin-top: 250px;
      
    }  
    .Edit{
      margin-right: 200px;
      color: white;
      background-color: navy;
      border-color: navy;
      width: 200px;
      height: 30px;
      border-radius: 5px;
    }
    .modal-title {
      padding-top: 20px;
    }
    .input{
      width:250px;
      height: 30px;
      margin-left: 40px;
    }
    label{
      margin-left: 40px;
      margin-bottom: 10px;
    }
    .class{
      width:20px;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#">INTERPRISES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">My Card <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item dropdown">
        
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="#"></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"></a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>

     
       <a href="/enterprize/logout.php"  class="btn btn-outline-success " >LOGOUT</a>
   
  
  </div>
</nav> 
<table  class="table-striped table-hover">
  <thead>
  <tr>
     <th>Product Image</th>
    <th>Product Name </th>
    <th>Product Quentity </th>
    <th>Product Prize </th>
    <th>Action</th>
    <th>Sub Total</th>
  </tr>
</thead>
<tbody>
<?php
  include 'connection.php';
  $select_product="SELECT * FROM `product_card` WHERE `login_user`='$user'";
  $fetch_product=mysqli_query($conn,$select_product);
  $num=mysqli_num_rows($fetch_product);
  $totalAmount = 0;
  if($num>0){
  while($row=mysqli_fetch_assoc($fetch_product)){
    $product_id=$row['product_id'];
    
    ?>
    <tr>
      <th><img src="<?php echo $row['product_image'];?>" alt="product_image" ></th>
      <th><?php echo $row['product_name'];?><br> <a href="update_quentity.php?id=<?php echo $row['product_id'];?>" ><i class="glyphicon glyphicon-edit"></i></a></th>
      <th><?php echo $row['product_quentity'];?></th>
      <th>&#8377;<?php echo $row['product_prize'];?></th>
      <th><a href="remove.php?id=<?php echo $row['product_id'];?>"><i class="glyphicon glyphicon-remove"></i></a></th>
     <th>&#8377;<?php  $subtotal = $row['product_prize'] * $row['product_quentity'];
                                $totalAmount += $subtotal;
                                echo $subtotal;
                                ?></th>
   
    </tr>
  



<?php
  }
}else{
  ?>
  <th><h1><?php echo "No Add Product";?></h1></th>
  <?php
}
?>
 
</tbody>

</table>
<hr>
<h4 class="total-amount">Total Amount: &#8377;<?php echo $totalAmount; ?> </h4>
<hr>




</body>
</html>