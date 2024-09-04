<?php
require('db_connection.php');
session_start();
if (!isset($_SESSION['adminLoginId'])) {
  header("Location: admin_login.php");
  exit();
}
?>

<?php
if (isset($_POST['update_banner'])) {
  if (isset($_GET['upd_id'])) {

    $updateId = $_GET['upd_id'];

    $fetchPageName = "SELECT * FROM `banners` WHERE `S.no`=$updateId";
    $run = mysqli_query($conn, $fetchPageName);
    if ($run && mysqli_num_rows($run) > 0) {
      $row = mysqli_fetch_assoc($run);
      if ($row['page'] === 'home') {

        $prev_img_1 =  $_POST['prev_img_1'];
        $prev_img_2 =  $_POST['prev_img_2'];
        $prev_img_3 =  $_POST['prev_img_3'];

        // Image 1
        $uploadImg_one = $_FILES["banner_img_one"]["name"];
        $uploadTmpImg_one = $_FILES["banner_img_one"]["tmp_name"];
        $imgfolder_one = "banner_imgs/" . $uploadImg_one;

        if (!empty($uploadImg_one)) {
          move_uploaded_file($uploadTmpImg_one, $imgfolder_one);
          $imgQueryPart_one = "`banner_img_1`='$imgfolder_one'";
        } else {
          $imgQueryPart_one = "`banner_img_1`='$prev_img_1'";
        }

        // Image 2
        $uploadImg_two = $_FILES["banner_img_two"]["name"];
        $uploadTmpImg_two = $_FILES["banner_img_two"]["tmp_name"];
        $imgfolder_two = "banner_imgs/" . $uploadImg_two;

        if (!empty($uploadImg_two)) {
          move_uploaded_file($uploadTmpImg_two, $imgfolder_two);
          $imgQueryPart_two = "`banner_img_2`='$imgfolder_two'";
        } else {
          $imgQueryPart_two = "`banner_img_2`='$prev_img_2'";
        }

        // Image 3
        $uploadImg_three = $_FILES["banner_img_three"]["name"];
        $uploadTmpImg_three = $_FILES["banner_img_three"]["tmp_name"];
        $imgfolder_three = "banner_imgs/" . $uploadImg_three;

        if (!empty($uploadImg_three)) {
          move_uploaded_file($uploadTmpImg_three, $imgfolder_three);
          $imgQueryPart_three = "`banner_img_3`='$imgfolder_three'";
        } else {
          $imgQueryPart_three = "`banner_img_3`='$prev_img_3'";
        }

        // Construct the update query by including only the parts that are not empty
        $updateParts = array_filter([$imgQueryPart_one, $imgQueryPart_two, $imgQueryPart_three]);
        $updateQuery = "UPDATE `banners` SET " . implode(', ', $updateParts) . " WHERE `S.no`=$updateId";

        if (mysqli_query($conn, $updateQuery)) {
          echo '<script>alert("Banner updated successfully."); window.location.href="add-banners.php";</script>';
          exit();
        } else {
          echo "Update failed: " . mysqli_error($conn);
        }
      } else {
        $prev_img = $_POST['prev_img'];

        // Image 1
        $uploadImg = $_FILES["banner_img"]["name"];
        $uploadTmpImg = $_FILES["banner_img"]["tmp_name"];
        $imgfolder = "banner_imgs/" . $uploadImg;

        if (!empty($uploadImg)) {
          move_uploaded_file($uploadTmpImg, $imgfolder);
          $imgQueryPart = "`banner_img_1`='$imgfolder'";
        } else {
          $imgQueryPart = "`banner_img_1`='$prev_img'";
        }

        $updateQuery = "UPDATE `banners` SET $imgQueryPart WHERE `S.no`=$updateId";

        if (mysqli_query($conn, $updateQuery)) {
          echo '<script>alert("Banner updated successfully."); window.location.href="add-banners.php";</script>';
          exit();
        } else {
          echo "Update failed: " . mysqli_error($conn);
        }
      }
    } else {
      echo '<script>alert("Something Went Wrong , Try again later..."); window.location.href="edit-banner.php";</script>';
      exit();
    }
  }
}
?>
