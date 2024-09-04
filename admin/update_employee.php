<?php require('db_connection.php');

if (isset($_POST['update_employee_details'])) {
  $upd_em_name = $_POST['upd_em_name'];
  $upd_em_email = $_POST['upd_em_email'];
  $upd_em_number = $_POST['upd_em_number'];
  $upd_em_position = $_POST['upd_em_position'];
  $upd_em_joining_date = $_POST['upd_em_joining_date'];
  $prev_em_img = $_POST['prev_em_img'];

  $upd_em_img = $_FILES['upd_em_img']['name'];
  $upd_em_img_tmpName = $_FILES['upd_em_img']['tmp_name'];
  $upd_em_img_folder = "employee_imgs/" . $upd_em_img;


  // Check if phone number is valid
  if (!is_numeric($upd_em_number) || strlen($upd_em_number) != 10) {
    echo '<script>alert("Please enter a valid 10-digit phone number."); window.location.href="add_employee.php";</script>';
    exit();
  }

  if (!empty($upd_em_img)) {
    move_uploaded_file($upd_em_img_tmpName, $upd_em_img_folder);
    $imgQueryPart = "`em_img`='$upd_em_img_folder'";
  } else {
    $upd_em_img_folder = $prev_em_img;
    $imgQueryPart = "";
  }

  if (isset($_GET['upd_em_id'])) {

    $upd_em_id = $_GET['upd_em_id'];

    $updateQuery = "UPDATE `employees` SET `em_name`='$upd_em_name' , `em_position`='$upd_em_position',`em_img`='$upd_em_img_folder',`em_number`='$upd_em_number',`em_email`='$upd_em_email',`em_joining_date`='$upd_em_joining_date' WHERE `em_id`=$upd_em_id";

    $runUpdateQuery = mysqli_query($conn, $updateQuery);

    if ($runUpdateQuery) {
      echo "<script>alert('Employee Details Updated Successfully ! '); window.location.href='add_employee.php';</script>";
      exit();
    } else {
      echo "<script>alert('something went wrong , Try again later... '); window.location.href='add_employee.php';</script>";
      exit();
    }
  }
}
