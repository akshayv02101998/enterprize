<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    * {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    body {
        background-color: aliceblue;
    }

    .container {
        margin-left: 500px;
        margin-top: 200px;
        background-color: white;
        width: 300px;
        height: 200px;
    }

    label {
        margin-left: 20px;

    }

    button {
        width: 259px;
        height: 30px;
        border-radius: 5px;
        color: white;
        border-color: navy;
        background-color: navy;
        margin-top: 5px;
        margin-left: 20px;
    }

    input {
        width: 250px;
        height: 30px;
        border-radius: 5px;
        margin-left: 20px;
    }

    h5 {
        text-align: center;
        margin-top: 20px;
        padding-top: 20px;
    }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <h5>Update Quentity</h5>
            <?php
  include  'connection.php';

  if (isset($_GET['id'])) {
      $quentity = $_GET['id'];
      $select = "SELECT * FROM `product_card` WHERE `product_id`='$quentity'";
      $query1 = mysqli_query($conn, $select);
      $num = mysqli_num_rows($query1);

      if ($num > 0) {
          while ($row = mysqli_fetch_assoc($query1)) {
  ?>
              <form action="update_quentity.php?id=<?php echo $quentity; ?>" method="POST">
                  <label for="">Product Quantity:</label>
                  <input type="number" name="edit_quentity"  min="1" max="10" value="<?php echo $row['product_quentity'] ?>" class="input" placeholder="Change Quantity"><br>
                  <button type="submit" name="Edit" class="Edit">Update</button>
              </form>
</div>
</div>
  <?php
          }
      }

      if (isset($_POST['Edit'])) {
          $id = $quentity;
          $update = $_POST['edit_quentity'];
          $update_quentity = "UPDATE `product_card` SET `product_quentity`='$update' WHERE `product_id`='$id'";
          $query = mysqli_query($conn, $update_quentity);

          if ($query) {
  header('location:card.php');
          } else {
  ?>
              <script>
                  alert('Server Not Exist');
              </script>
  <?php
          }
      }
  }
  ?>
</body>

</html>