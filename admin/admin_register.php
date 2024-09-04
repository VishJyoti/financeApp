<?php
require('db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DhanMitra MicroFinance Services - New Small Business Loans in India</title>
  <meta name="description" content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="admin_style.css">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</head>

<body>


  <div class="container d-flex align-items-center justify-content-center my-5">
    <div class="register-form p-5 ">
      <h3 class="fw-bolder mb-4">ADMIN REGISTER</h3>
      <hr style="background-color: brown; height: 2px; margin-bottom: 20px;">
      <form method="POST" enctype="multipart/form-data">
        <div class=" mb-3">
          <label> Upload Image</label>
          <input class="form-control" type="file" name="reg_Img" id="reg_img" accept=".jpg, .jpeg, .png , .jfif">
        </div>
        <div class="mb-3">
          <label>Name</label>
          <input required class="form-control" type="text" name="regName" id="reg_name">
        </div>
        <div class="mb3">
          <label>Email</label>
          <input required class="form-control" type="email" id="reg_email" name="regEmail">
        </div>
        <div id="pass" class="mb-3">
          <label>Password</label>
          <input required class="form-control" type="password" name="regPass" id="reg_pass">
          <i class="fa fa-eye" id="regEyebtn" onclick="toggleRegPassword()"></i>
        </div>
        <div class="mb-3">
          <label>Phone Number </label>
          <input required class="form-control" type="number" name="regNumber" id="reg_Number">
        </div>
        <button name="signup" type="submit" class="btn" style="background-color: #c85105;color: white;">Sign Up</button>
      </form>
    </div>
  </div>
  <?php
  if (isset($_POST['signup'])) {
    $name = $_POST['regName'];
    $email = $_POST['regEmail'];
    $pass = $_POST['regPass'];
    $number = $_POST['regNumber'];
    $uploadImg = $_FILES["reg_Img"]["name"];
    $uploadTmpImg = $_FILES["reg_Img"]["tmp_name"];
    $imgfolder = "admin_user_img/" . $uploadImg;
    move_uploaded_file($uploadTmpImg, $imgfolder);

    $existUser = "SELECT * FROM `admin` WHERE `email`='$email' OR `number` = '$number'";
    $runExitUserQuery = mysqli_query($conn, $existUser);
    if ($runExitUserQuery) {
      if (mysqli_num_rows($runExitUserQuery) > 0) {
        $fetch_user = mysqli_fetch_assoc($runExitUserQuery);
        if ($fetch_user['email'] == $email || $fetch_user['number'] == $number) {
          echo '<script>alert("The phone number or email you entered is already associated with an existing account. Please try logging in or use a different phone number to Create your account! .")</script>';
        }
      } else {
        if (!is_numeric($number) || strlen($number) != 10) {
          echo '<script>alert("Please enter a valid 10-digit phone number.")</script>';
        } else {
          $insert = "INSERT INTO `admin`( `admin_img`,`name`, `email`, `password`, `number`) VALUES (' $imgfolder','$name','$email','$pass','$number')";
          $query_run =  mysqli_query($conn, $insert);
          echo '<script>alert("You have Resgister Successfully !! ")</script>';
          header("Location: admin_login.php");
        }
      }
    }
  }

  ?>




  <script src="admin_main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>