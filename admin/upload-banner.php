<?php
require('db_connection.php');

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check database connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['upload_banner'])) {
  $page = $_POST['page'];

  // File upload directory
  $targetDir = "banner_imgs/";

  // Initialize file paths
  $bannerImg1 = $bannerImg2 = $bannerImg3 ='';

  // Check if page is 'home'
  if ($page === 'home') {
    // For home page, handle three images
    if (!empty($_FILES['banner_image_one']['name'])) {
      $bannerImg1 = $targetDir . basename($_FILES['banner_image_one']['name']);
      if (!move_uploaded_file($_FILES['banner_image_one']['tmp_name'], $bannerImg1)) {
        error_log("Failed to move uploaded file: " . $_FILES['banner_image_one']['name']);
        die("Error uploading file 1.");
      }
    }
    if (!empty($_FILES['banner_image_two']['name'])) {
      $bannerImg2 = $targetDir . basename($_FILES['banner_image_two']['name']);
      if (!move_uploaded_file($_FILES['banner_image_two']['tmp_name'], $bannerImg2)) {
        error_log("Failed to move uploaded file: " . $_FILES['banner_image_two']['name']);
        die("Error uploading file 2.");
      }
    }
    if (!empty($_FILES['banner_image_three']['name'])) {
      $bannerImg3 = $targetDir . basename($_FILES['banner_image_three']['name']);
      if (!move_uploaded_file($_FILES['banner_image_three']['tmp_name'], $bannerImg3)) {
        error_log("Failed to move uploaded file: " . $_FILES['banner_image_three']['name']);
        die("Error uploading file 3.");
      }
    }

    // Insert into database
    $sql = "INSERT INTO banners (banner_img_1, banner_img_2, banner_img_3, page) VALUES ('$bannerImg1', '$bannerImg2', '$bannerImg3', '$page')";
  } else {
    // For other pages, handle one image
    if (!empty($_FILES['banner_image_one']['name'])) {
      $bannerImg1 = $targetDir . basename($_FILES['banner_image_one']['name']);
      if (!move_uploaded_file($_FILES['banner_image_one']['tmp_name'], $bannerImg1)) {
        error_log("Failed to move uploaded file: " . $_FILES['banner_image_one']['name']);
        die("Error uploading file 1.");
      }
    }

    // Insert into database
    $sql = "INSERT INTO banners (banner_img_1, page) VALUES ('$bannerImg1', '$page')";
  }

  // Execute the query
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Banner uploaded successfully'); window.location.href='add-banners.php';</script>";
  } else {
    error_log("Error: " . mysqli_error($conn));
    echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='add-banners.php';</script>";
  }
}

// Close the database connection
mysqli_close($conn);
?>

