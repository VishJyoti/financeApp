<?php
require('db_connection.php');
session_start();
if (!isset($_SESSION['adminLoginId'])) {
  header("Location: admin_login.php");
  exit();
}

if (isset($_POST['add_employee'])) {
  $em_name = $_POST['em_name'];
  $em_email = $_POST['em_email'];
  $em_number = $_POST['em_number'];
  $em_position = $_POST['em_position'];
  $em_joining_date = $_POST['em_joining_date'];

  $em_img = $_FILES['em_img']['name'];
  $em_img_tmp = $_FILES['em_img']['tmp_name'];
  $em_img_folder = "employee_imgs/" . $em_img;

  // Check if phone number is valid
  if (!is_numeric($em_number) || strlen($em_number) != 10) {
    echo '<script>alert("Please enter a valid 10-digit phone number."); window.location.href="add_employee.php";</script>';
    exit();
  }

  // Check if email already exists
  $checkEmailQuery = "SELECT * FROM `employees` WHERE `em_email`='$em_email'";
  $runEmailQuery = mysqli_query($conn, $checkEmailQuery);
  if (mysqli_num_rows($runEmailQuery) > 0) {
    echo '<script>alert("Email already associated with another account."); window.location.href="add_employee.php";</script>';
    exit();
  }
  // Check if email already exists
  $checkNumberQuery = "SELECT * FROM `employees` WHERE `em_number`='$em_number'";
  $runNumberQuery = mysqli_query($conn, $checkNumberQuery);
  if (mysqli_num_rows($runNumberQuery) > 0) {
    echo '<script>alert("Phone number already associated with another account."); window.location.href="add_employee.php";</script>';
    exit();
  }

  // Move the uploaded file and insert the new employee details
  if (move_uploaded_file($em_img_tmp, $em_img_folder)) {
    $insertQuery = "INSERT INTO `employees` (`em_name`, `em_position`, `em_img`, `em_number`, `em_email`, `em_joining_date`) VALUES ('$em_name', '$em_position', '$em_img_folder', '$em_number', '$em_email', '$em_joining_date')";
    $run = mysqli_query($conn, $insertQuery);
    if ($run) {
      echo '<script>alert("Employee Details Added Successfully"); window.location.href="add_employee.php";</script>';
      exit();
    } else {
      echo '<script>alert("Something went wrong, try again later."); window.location.href="add_employee.php";</script>';
      exit();
    }
  } else {
    echo '<script>alert("Failed to upload image, try again later."); window.location.href="add_employee.php";</script>';
    exit();
  }
}
?>
