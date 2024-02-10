<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Nitin Enterprises</title>
</head>
<body>
    <?php include 'connection.php';?>
<header>
    <div class="menu_block">
        
    <div class="logo">
       <img src="img/logo.jpg" alt="Nitin Enterprises logo"  height="30px"> 
       NITIN ENTERPRISES  </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="sign.php">sign up</a></li>
            </ul>
        </div>
    </div>
    <h3><a href="https://www.instagram.com/nitincosmetics?igsh=MXNndTQ3bHRoZjVsMA==" data-toggle="tooltip"  data-placementtop="top" title="Instragram!"> <img src="img/instagram (1).png" alt="Instragram" width="50px"></a>  <a href="https://youtube.com/@NitinBundela123?si=QF-gzfABIMDUelD=" data-toggle="tooltip"  data-placement="top" title="Youtube Channel!"><img src="img/youtube.png" alt="youtube" width="50px"></a> <a href="https://www.facebook.com/NitinCosmetics" data-toggle="tooltip" data-placement="top" title="Facebook!"><img src="img/facebook.png" alt="Facebook" width="50px"></a> </h3>
   <h1> Welcome to Nitin Enterprises</h1>
   <a href="contact.php" ><button class="learn" >Learn More</button></a>
   <a href="/enterprize/sign.php" class="sign"><button>Sign up</button></a>
   <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</header>
</body>
</html>