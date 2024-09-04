<?php
require('db_connection.php');
session_start();
if (!isset($_SESSION['adminLoginId'])) {
  header("Location: admin_login.php");
  exit();
}

if (isset($_POST['add_client'])) {
  $c_name = $_POST['c_name'];
  $c_email = $_POST['c_email'];
  $c_number = $_POST['c_number'];
  $c_occupation = $_POST['c_occupation'];
  $c_loanAmount = $_POST['c_loanAmount'];
  $c_address = $_POST['c_address'];
  $c_date = $_POST['c_date'];

  $c_img = $_FILES['c_img']['name'];
  $c_img_tmp = $_FILES['c_img']['tmp_name'];
  $c_img_folder = "client_imgs/" . $c_img;

  // Check if phone number is valid
  if (!is_numeric($c_number) || strlen($c_number) != 10) {
    echo '<script>alert("Please enter a valid 10-digit phone number."); window.location.href="add_clients.php";</script>';
    exit();
  }

  // Check if email already exists
  $checkEmailQuery = "SELECT * FROM `clients` WHERE `c_email`='$c_email'";
  $runEmailQuery = mysqli_query($conn, $checkEmailQuery);
  if (mysqli_num_rows($runEmailQuery) > 0) {
    echo '<script>alert("Email already associated with another account."); window.location.href="add_clients.php";</script>';
    exit();
  }

  // Check if phone number already exists
  $checkNumberQuery = "SELECT * FROM `clients` WHERE `c_number`='$c_number'";
  $runNumberQuery = mysqli_query($conn, $checkNumberQuery);
  if (mysqli_num_rows($runNumberQuery) > 0) {
    echo '<script>alert("Phone number already associated with another account."); window.location.href="add_clients.php";</script>';
    exit();
  }

  // Move the uploaded file and insert the new client details
  if (move_uploaded_file($c_img_tmp, $c_img_folder)) {
    $insertQuery = "INSERT INTO `clients` (`c_name`, `c_email`, `c_number`, `c_img`, `c_occupation`, `c_loan_amount`, `c_address`, `c_date`) VALUES ('$c_name', '$c_email', '$c_number', '$c_img_folder', '$c_occupation', '$c_loanAmount', '$c_address', '$c_date')";
    $run = mysqli_query($conn, $insertQuery);
    if ($run) {
      echo '<script>alert("Client Details Added Successfully"); window.location.href="add_clients.php";</script>';
      exit();
    } else {
      // Log the SQL error
      error_log("SQL Error: " . mysqli_error($conn), 0);
      echo '<script>alert("Something went wrong, try again later."); window.location.href="add_clients.php";</script>';
      exit();
    }
  } else {
    echo '<script>alert("Failed to upload image, try again later."); window.location.href="add_clients.php";</script>';
    exit();
  }
}
?>
