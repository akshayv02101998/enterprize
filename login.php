<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="link.css"> -->
    <title>LOG IN!</title>
    <style>
    .msg {
        text-align: center;
        width: 300px;
        color: white;
        background-color:rgb(244, 165, 178);
  margin-left:22px;
    }

    .radio1 {
        width: 15px;

    }

    .container1 {
        background-color: #fff;
        width: 350px;
        height: 300px;
        margin-left: 450px;
        margin-top: 150px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
        padding: 10px;
    }

    .forgot {
        color: blue;
    }

    p {
        margin-left: 20px;
        margin-top: 10px;
    }
    * {
    padding: 0%;
    margin: 0%;
}

body {
    background-color: #d9dee5;
}



a {
    text-decoration: none;
    color: white;
}



input {
    width: 250px;
    height: 35px;
    margin: 3px;
    margin-top: 10px;
    border-radius: 5px;
    border-color: black;
    margin-left: 35px;
}

h2 {
    text-align: center;
}

.btn1 {
    color: white;
    background-color: rgb(244, 165, 178);
    width: 250px;
    border-radius: 5px;
    border-color:rgb(244, 165, 178);
    height: 30px;
    margin-left: 35px;
    margin-top: 5px;
}
label{
    margin-left: 35px;
    padding-top: 5px;
}
p {
    margin-left: 35px;
    margin-top: 10px;
}

.signup {
    color: blue;
}
    </style>
</head>

<body>
    <?php include 'connection.php' ?>
    <div class="container1">
       
        <div class="msg">
            <?php
      SESSION_START();
      if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      }else{
        $_SESSION['msg']=" ";
      }
     ?>
        </div>
        <form action="/enterprize/login.php" method="POST">
            <label >Email:</label>
            <input type="text" name="email" placeholder="Enter email OR USERNAME" required>
            <br>
            <label >Password:</label>
            <input type="password" name="pass" placeholder="Enter Password" required>
            <br>
            <!-- <input type="checkbox" name="remember" class="radio1">Save -->
            <button type="submit" name="btn" class="btn1 "><b>LOGIN</b></button>
     
            <?php include 'connection.php';
  if(isset($_POST['btn'])){
    $email=$_POST['email'];
    $password=$_POST['pass'];

    // Email Exist-
 $email_exist=" SELECT * FROM `ragistretion` WHERE `email`='$email' AND `status`='active'";
 $result=mysqli_query($conn,$email_exist);
 $email_count=mysqli_num_rows($result);
 if($email_count){
       $Email_decode=mysqli_fetch_assoc($result);
       $Email_pass=$Email_decode['password'];
       $pass_decode=password_verify($password,$Email_pass);
       if($pass_decode){
        ?>

      <?php 
      
          SESSION_START();  
          $_SESSION['Name']=$Email_decode['name'];
              header('location:shop.php');
        }else{
        ?>
        <script>
          alert ('Password Incorrect.');
        </script>
      <?php 
      }
      }else{
        ?>
        <script>
          alert("Email Not Exist!");
        </script>
      <?php
      }
    }
      ?>
        </form>
        <p class="main">Your Forget Password? <a href="/enterprize/recovery.php" class="forgot">click here</a>
        </p>
        <p class="main">Don't Have An Account?<a href="/enterprize/sign.php" class="signup">Sign Up Here</a></p>
    </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>

</html>