<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="link.css">
    <title>Document</title>
</head>
<body>
    <?php
    include 'conadmin.php';
    if(isset($_POST['btn'])){
        $name= $_POST ['name'];
        $file = $_FILES['pic'];

        $filename=$file['name'];
        $filepath=$file['tmp_name'];
        $fileerror=$file['error'];

        if($fileerror==0){
            $destfile= $filename ;

move_uploaded_file($filepath , $destfile);
          $q= "Insert into `img` (`name`,`pic`) values ('$name','$destfile')";
          $query=mysqli_query($conn,$q);


        }
    }
    ?>
<form action="admin.php" method="POST" enctype="multipart/form-data">
        <label>Your Name*</label><br>
      <input type="text" name="name" class=""><br>
      <label >Image*</label><br>
      <input type="file" name="pic"><br>
      <!-- <label>Procedure of Interest*</label><br> -->
      <!-- <select name="select" id="">
        <option value="">Choice</option> -->
      <!-- </select><br> -->
      <!-- <label >Tell us more*</label><br> -->
      <!-- <textarea name="" id="" cols="30" rows="5"></textarea><br> -->
      <button class="btn" name="btn"><b>Send</b></button>
    </form>
</body>
</html>