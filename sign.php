<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <title>RAGISTRETION_FORM!</title>
         <style>
        *{
    padding: 0%;
    margin: 0%;
}

body{
    background-color: #d9dee5;
}
.container{
    background-color: #fff;
    width: 300px;
    height:430px;
    margin-left: 450px;
    margin-top: 70px;
    border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);

}

.center{
    text-align: center;
    color: rgb(81, 71, 71);
    padding-top: 20px;
}
a{
    text-decoration: none;
    color: white;
}

input{
    width: 250px;
    height: 30px;
    margin: 3px;
    border-radius: 5px;
    border-color: black;
    margin-left: 20px;
    margin-top: 5px;
}
h2{
    text-align: center;
}
.btn{
    color: white;
    background-color:rgb(244, 165, 178);
    width: 250px;
    border-radius: 5px;
    border-color:rgb(244, 165, 178);
    height: 30px;
    margin-left: 21px;
    margin-top: 5px;
}
p{
    margin-left: 60px;
}
.login{
    color: blue;
}
.get{
    margin-right: 50px;
}
.msg1{
        text-align: center;
        width: 300px;
        color: white;
        background-color: rgb(244, 165, 178);

    }
    </style> 
    </head>
  <body>
    <?php include 'connection.php';?>
    <div class="box">
    <div class="container">
      <div class="center">
      <h1>Create Account</h1>
      <p class="get">Get Started With Your Free Account</p>
    </div>
    <div class="msg1">
    <?php
      SESSION_START();
      if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      }else{
        $_SESSION['msg']=" ";
      }
     ?>
    </div>
    <form action="/enterprize/sign.php" method="POST" >
        <input type="email" name="email" placeholder="Enter email"  Required>
        <br>
        <input type="text" name="name" placeholder="Enter Name"  Required>
        <br>
        <input type="text" name="mob" placeholder="Enter Mobile Number "  Required>
        <br>
        <input type="password" name="pass" placeholder="Enter Password"  Required>
        <br>
          <input type="password" name="cpass" placeholder="Enter Confirm Password"  Required >
          <br>
        <button type="submit" name="submit" class="btn "><b>Create Account</b></button><br><br>
      <p class="main">Have An Account?<a href="/enterprize/login.php" class="login">Log in</a></p>
      
      <?php
if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $name=$_POST['name'];
  $mob=$_POST['mob'];
  $password=$_POST['pass'];
  $cpassword=$_POST['cpass'];
  $token= bin2hex(random_bytes(15));
  $Email_exist= " SELECT * FROM `ragistretion` WHERE `email`='$email'";
  $query=mysqli_query($conn,$Email_exist);
  $Email_count=mysqli_num_rows($query);
  if($Email_count>0){
    ?>
    <script>
    alert('Email Already Exist!');
    </script>
    <?php
}else{

  if($password===$cpassword){
    $pass=password_hash($password,PASSWORD_BCRYPT);
    $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
    $sql="insert into `ragistretion`(`email`,`name`,`mobile`,`password`,`cpassword`,`token`,`status`) values ('$email','$name','$mob','$pass','$cpass','$token','inactive')";
    $result=mysqli_query($conn,$sql);
    if($result){
      
      $to_email= $email;
      $subject=" Welcome to Nitin Enterprize please click here";
      $body="Active Your Account click Here:http://localhost/enterprize/active.php?token=$token";
      $header="From: techsoftwareverify@gmail.com";
      if(mail($to_email,$subject,$body,$header)){
        echo "Your Email Successfully Submited";
        SESSION_START();
        $_SESSION['msg']="check your mail active your account $email";
        header('location:sign.php');
      }else{
        ?>
        <script>
        alert('Not Send Email');
        </script>
      
    <?php
    }
      ?>
           
                    <script>
                    alert("your Account successfully Created!");
                    </script>

                    <?php
    }
  }else{
    ?>

                    <script>
                    alert("password  do not match");
                    </script>

                    <?php
  }
 
}
}
?>
    </form>
      </div>
    </div>
  

  </body>
</html>