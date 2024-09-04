<?php 
require('db_connection.php')
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DhanMitra MicroFinance Services -  New Small Business Loans in India</title>
    <meta name="description" content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="admin_style.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  </head>
<body class="login-form-body">

<div class="login-form p-5" >
    <h3 class="fw-bolder mb-4">ADMIN LOGIN</h3>
    <hr style="background-color: brown; height: 2px; margin-bottom: 20px;" >
    <form method="POST">
  <div class="mb-3">
    <i class="fa fa-envelope admin_logo"></i>
    <input type="email" id="admin_email" name="adminEmail" placeholder="Email">
  </div>
  <div class="mb-3">
    <i class="fa fa-lock admin_logo"></i>
   <input type="password" name="adminPass" id="admin_pass" placeholder="Password"><i class="fa fa-eye" id="logineyebtn" onclick="togglePassword()"></i>
  </div>
  <button  name="login" type="submit" class="btn w-100" style="background-color: #c85105;color: white;">Login</button>
  <p class="text-center mt-3 fw-bold">New Member ? <a href="admin_register.php" class="text-decoration-none">SignUp Here</a></p>
</form>
</div>
  
<?php

if(isset($_POST['login']))
{
$query = "SELECT * FROM `admin` WHERE `email`='$_POST[adminEmail]' AND `password`= '$_POST[adminPass]'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) == 1){
  // for fetching the image this user
  $row = mysqli_fetch_assoc($result);

session_start();
$_SESSION['adminLoginId']= $_POST['adminEmail'];
$_SESSION['admin_data'] = $row;
header("Location: adminPanel.php");

}else{
  echo "<script>alert('Incorrect email or password')</script>";
}

}

?>
  <script src="admin_main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>