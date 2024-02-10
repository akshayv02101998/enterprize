<?php
SESSION_START();
// ob_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset!</title>
    <style>
    .msg {
        text-align: center;
        width: 300px;
        color: white;
        background-color: rgb(16, 173, 16);

    }

    p {
        text-align: center;
        margin: 10px;
    }

    a {
        text-decoration: none;
        color: blue;
    }

    .login {
        color: blue;
    }

    body {
        background-color: #d9dee5;
    }

    input {
        width: 250px;
        height: 30px;
        margin: 3px;

        border-radius: 5px;
        border-color: black;
        margin-left: 20px;
    }

    .btn1 {
        color: white;
        background-color:rgb(244, 159, 173);
        width: 250px;
        border-radius: 5px;
        border-color: rgb(244, 159, 173);
        height: 30px;
        margin-left: 21px;
        margin-top: 5px;
    }

    a {
        text-decoration: none;
        color: blue;
    }

    .login {
        color: blue;
    }


    .container1 {
        background-color: #fff;
        width: 300px;
        height: 280px;
        margin-left: 450px;
        margin-top: 100px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
        padding: 10px;
    }

    h2 {
        text-align: center;
        margin: 10px;
    }

    p {
        text-align: center;
        margin: 10px;
    }
    .passmsg{
        color:white;
        background-color:green;
    }
    </style>
</head>

<body>

    <?php
    
    if(isset($_GET['token'])){
    
        $token=$_GET['token'];
if(isset($_POST['submit'])){


        $_SESSION['passmsg']=" ";

    $newpassword=$_POST['newpass'];
    $cpassword=$_POST['cpass'];

    if( $newpassword === $cpassword ){
        $newpasswords = password_hash($newpassword,PASSWORD_BCRYPT);
        $cpasswords = password_hash($cpassword,PASSWORD_BCRYPT);

$updatequery="UPDATE `ragistretion` SET `password`='$newpasswords' , `cpassword`='$cpasswords' WHERE `token`='$token'";
      
$query=mysqli_query($conn,$updatequery);
       if($query){
      $_SESSION['msg']="Your Password is Successfully Updated.";
      header('location:login.php');
       }else{
        $_SESSION['passmsg']="Password Not Updated.";
        header('location:reset.php');
       }

    }else{
        $_SESSION['passmsg']="Your Password Not Match!";

    
        
    }
  
}
}else{
    $_SESSION['passmsg']=" ";
}

  
    ?>
    <?php include 'connection.php' ?>
    <div class="container1">
        <div class="msg">

        </div>
        <h2>Create Account</h2>
        <p>Get Started With Your free Account</p>
        <p class="passmsg"><?php if(isset($_SESSION['passmsg'])){
           echo $_SESSION['passmsg'];
        }else{
            $_SESSION['passmsg']=" ";
        } ?></p>
        <form action=" " method="POST">
            <input type="password" name="newpass" placeholder="New Password" reqiured>
            <input type="password" name="cpass" placeholder="Confirm Password" reqiured>
            <button type="submit" name="submit" class="btn1 "><b>Update Password</b></button>
        </form>
        <p class="main">Have An Account?<a href="/enterprize/login.php" class="login">Log in</a></p>
    </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>

</html>