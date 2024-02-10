<?php
include 'connection.php';
SESSION_START();
if(isset($_GET['token'])){
    $token=$_GET['token'];

    $update="UPDATE  `ragistretion` SET `status`='active' WHERE `token`='$token'";
    $update_query=mysqli_query($conn,$update);
    if($update_query){
        if(isset($_SESSION['msg'])){
$_SESSION['msg']="Your Account is Activate ,Please Log in";
header('location:login.php');   
    }else{
        $_SESSION['msg']="You are logout";
        header('location: logout.php');
    }
}else{
    $_SESSION['msg']="Your Account is not  Activate ,Please try again";
    header('location: sign.php');
}
}
?>