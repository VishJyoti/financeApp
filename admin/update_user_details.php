<?php
require('db_connection.php');
session_start();
if(!isset($_SESSION['adminLoginId'])){
 header("Location: admin_login.php");
}

?>

<?php
  if (isset($_POST['updateBtn'])) {
    $name = $_POST['u_Name'];
    $email = $_POST['u_Email'];
    $pass = $_POST['u_Pass'];
    $number = $_POST['u_Number'];
    $prev_img =  $_POST['prev_img'];

    $uploadImg = $_FILES["u_Img"]["name"];
    $uploadTmpImg = $_FILES["u_Img"]["tmp_name"];
    $imgfolder = "admin_user_img/" . $uploadImg;

    if (!empty($uploadImg)) {
      move_uploaded_file($uploadTmpImg, $imgfolder);
      $imgQueryPart = "`admin_img`='$imgfolder',";
    } else {
      $imgfolder = $prev_img;
      $imgQueryPart = "";
    }

    if (isset($_GET['new_id'])) {
      $newId = $_GET['new_id'];

      $updateQuery = "UPDATE `admin` SET $imgQueryPart `name`='$name', `email`='$email', `password`='$pass', `number`='$number' WHERE `S.no`= $newId";

      if (mysqli_query($conn, $updateQuery)) {
        echo '<script>alert("User details updated successfully."); window.location.href="admin_users.php";</script>';
      } else {
        echo "Update failed: " . mysqli_error($conn);
      }
    } else {
      echo "No new ID found.";
    }
  }
  ?>