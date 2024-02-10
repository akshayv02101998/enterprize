<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Recovery!</title>
    <style>
    * {
        padding: 0%;
        margin: 0%;
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
        height: 200px;
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
    .email{
        color:white;
        background-color:green;
    
    }
    </style>
</head>

<body>
     <?php include 'connection.php' ?>  
    <div class="container1">
        <div class="msg">
            <?php
      SESSION_START();
   
     ?>
        </div>
        <h2>Recover Your Account</h2>
        <p>Please Fill Email Id Properly</p>
        <form action="/enterprize/recovery.php" method="POST">
            <input type="Email" name="email" placeholder="Enter Email" reqiured>
            <button type="submit" name="btn" class="btn1 "><b>Send Mail</b></button>
            <?php
       if(isset($_POST['btn'])){
        $Email=$_POST['email'];
        $select="SELECT * FROM `ragistretion` WHERE `Email`='$Email' ";
        $result=mysqli_query($conn,$select); 
        $Email_count=mysqli_num_rows($result);
        if($Email_count){
        $fetch=mysqli_fetch_assoc($result);
       $name=$fetch['name'];
       $token=$fetch['token'];
        $to_email=$Email;
        $subject="Password Reset";
        $body="hii $name click here Reset Your Password: http://localhost/enterprize/reset.php?token=$token";
        $headers="From: techsoftwareverify@gmail.com";
        if(mail( $to_email,$subject,$body,$headers)){
            $_SESSION['msg']="Check Your Mail reset Your Password $Email";
            header('location:login.php');
        }else{
            echo "please try again";
        }
    
    }else{
        ?>
           <p class="email"> <?php echo "Email not Exist." ?></p>
         <?php  }
       }
       ?>
        </form>
        <p class="main">Have An Account?<a href="/enterprize/login.php" class="login">Log in</a></p>
    </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>

</html>