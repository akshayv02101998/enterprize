<?php
   SESSION_START();
   $user=$_SESSION['Name'];
   if(!isset( $_SESSION['Name'])){
     echo "your are logout!";
     header('location:index.php');
   }
   
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title>Document</title>
    <style>
      *{
        box-sizing: border-box;
        padding: 0px;
        margin: 0px;
        font-weight: 400!important;
    font-size: 16px!important;
      }
body{
  background-color: aliceblue;
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
  width:1303px;
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

.card{
  box-sizing: border-box;
margin:0px;
height: 360px;

/* box-shadow: 0px 0px 2px black; */
}
.card input{
  width:150px;
  text-align: center;
/* margin-right: 10px; */
   margin-right: 5px;
}
.btn{
  color:white;
  background-color:rgb(17, 17, 17);
  width:150px;
  height: 30px;
  margin-top: 5px;
  padding:1px;
  border-radius: 5px;
}


img{
  background-color: black;
}
nav{
  background-color: black;
}
a{
  margin-left: 20px;
  
}
.image{
  width:120px;
  height: 150px;
 
}
.btn:hover{
  color:white;
  background-color: black;
  border-color: black;
}
input{
  border-radius: 5px;
  border-color: black;
}
h6{
  color:white;
  margin-top:3px;
}
a.showdata{
  text-decoration:none;
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <h6><?php echo $user ;?></h6>
      <a href=""  data-toggle="tooltip"  data-placementtop="top" title="user profile"><img src="img/user.jpg" alt="profile" width="40"></a>
   <!--show card quentity  -->
<a href="card.php" class="showdata" data-toggle="tooltip"  data-placementtop="top" title="Card!"><img src="img/card1.jpg" alt="card" width="40"></a>
  </form>
  </div>
</nav> 
<div class="box"><p> Hello,  <?php echo $user;?>  Welcome to a world of endless possibilities. Explore our selection of products and services crafted to enrich your life.</p></div>


<?php
    include 'connection.php';
    $sql = "SELECT * FROM `img`";
    $result = mysqli_query($conn, $sql);
    echo '<div class="container"><div class="card-row row">';
    
    $count = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      $id=$row['id'];
      $pic = $row['pic'];
        $name=$row['name'];
        $prize=$row['prize'];
        $discount=$row['discount'];
      ?>
            <div class="col-md-3 my-2 col-sm-6 ">
                <div class="card" style="width: 11.5rem;">
                    <img class="image" src= <?php echo $pic ?> alt="Card image cap" >
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $name ?></h5>
                        <h5 class="card-text">&#8377; <?php echo $prize ?><span>
                         (<?php echo $discount ?>% OFF)
                        </span></h5>
              <h6 class="badge badge-success">4.4 star</h6>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
              <!-- <input type="text" name="login_user" value="<?php echo $user;?>" hidden=""> -->
              <input type="text" name="product_id" value="<?php echo $row['id'];?>" hidden="">
              <input type="text" name="product_image" value="<?php echo $row['pic'];?>" hidden="">
              <input type="text" name="product_name" value="<?php echo $row['name'];?>" hidden="">
              <input type="number" name="product_prize" value="<?php echo $row['prize'];?>" hidden="">
                        <input type="number" min="1" max="10" name="product_quentity" placeholder="Quantity">
                        <input type="text" name="id" value="<?php echo $row['id'];?>" hidden="">
                        <button type="submit" class="btn" onclick="addToCart()" name="add_product" >Add Card</button>
                    </form>
                    <?php
                      include 'connection.php';
                    
                      if(isset($_POST['add_product']) && isset($_POST['product_id']) && $_POST['product_id'] == $row['id']){
                //  $product_id=$_POST['product_id'];
                 $product_name=$_POST['product_name'];
                 $product_image=$_POST['product_image'];
                 $product_prize=$_POST['product_prize'];
                 $product_quentity=$_POST['product_quentity'];
                 $id=$_POST['id'];
                 $sql1 = "INSERT INTO `product_card` (`product_name`,`product_image`,`product_prize`,`product_quentity`,`login_user`,`id`) VALUES ('$product_name','$product_image','$product_prize','$product_quentity','$user','$id')";
                 $fetch_card = mysqli_query($conn,$sql1);
                 if($fetch_card){
                  ?>
<script>
        function addToCart() {
            alert('Product added to the cart! please check card ');
            // Additional logic to handle adding the product to the cart
        }
</script>

<?php
                 }else{
                  echo "";
                 }




                    }else{
                      echo "";
                    }
                        ?>
                      </div>
                </div>
               
            </div>
<?php
    
        
        $count++;
        
        // Close the card-row div and open a new one after every third card
        if ($count % 4 == 0) {
            echo '</div><div class="card-row row">';
        }
      }
    ?>

<!-- <h1>Welcome to <?php echo $_SESSION['Name'];?> </h1> -->
<!-- <img src="https://images.pexels.com/photos/1144176/pexels-photo-1144176.jpeg?auto=compress&cs=tinysrgb&w=600"  alt="nature"> -->
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });
  </script>

</body>
</html>