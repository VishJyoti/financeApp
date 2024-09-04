<?php require('admin/db_connection.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DhanMitra MicroFinance Services - New Small Business Loans in India</title>
  <meta name="description" content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc">
  <link href="modules/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="modules/fontawesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
  <!-- Header Section start -->
  <?php include 'navbar.php'   ?>
  <!-- Header Section end -->

  <!-- banner section start -->
  <div id="carouselExample" class=" carousel slide">

    <?php
    $page = 'contact'; // This is the page name to filter by
    $selectQuery = "SELECT * FROM `banners` WHERE `page` = '$page'";
    $run = mysqli_query($conn, $selectQuery);
    if ($run) {
      if (mysqli_num_rows($run) > 0) {
        $row = mysqli_fetch_assoc($run);
    ?>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="600" src="admin/<?php echo $row['banner_img_1']; ?>" class="d-block w-100 img-fluid" style="height: 550px;" />
          </div>
        </div>

      <?php
      } else {
      ?>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="600" src="images/contact-us-banner.gif" class="d-block w-100 img-fluid" style="height: 550px;" />
          </div>
        </div>

    <?php
      }
    } ?>

  </div>
  <!-- banner section end -->

  <!-- Text Slider Start -->
  <marquee class="p-2">DhanMitra MicrofinanceServices provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc.</marquee>
  <!-- Text Slider End -->

  <!-- Contact section start -->
  <div class=" p-1" style="background-color: rgb(246, 233, 216);">
    <div class="container my-5 " id="Offering">
      <h1 class="fw-bolder fs-1 mt-5 mb-4 text-cenetr" style="text-shadow: rgb(237, 124, 84) 1px 0 10px;">Dhan Mitra MicroFinance Services [Small Business Loan Services]</h1>
      <h3 class="fs-2 fw-bold text-center px-1 py-2">Have Questions? Contact Us</h3>
      <div class="row justify-content-center mt-4">
        <div class="col-xs-12 col-md-5 px-1 py-4 mx-4 mb-3 text-center shadow-lg" style="background-color: rgb(250, 243, 233);">
          <h3>Registered Office</h3>
          <a class="d-block mb-2 text-decoration-none text-dark hand" style="cursor: pointer;"><i class=" fa fa-location"></i> address</a>
          <a class="d-block mb-2 text-decoration-none text-dark hand" style="cursor: pointer;"><i class=" fa fa-phone"></i> 342-657-9876</a>
          <a class="d-block mb-2 text-decoration-none text-dark hand" style="cursor: pointer;"><i class=" fa fa-envelope"></i> xyz@gmail.com</a>
        </div>
        <div class="col-xs-12 col-md-5 px-1 py-4 mx-4 mb-3 text-center shadow-lg" style="background-color: rgb(250, 243, 233);">
          <h3>Corporate Office</h3>
          <a class="d-block mb-2 text-decoration-none text-dark hand" style="cursor: pointer;"><i class=" fa fa-location"></i> address</a>
          <a class="d-block mb-2 text-decoration-none text-dark hand" style="cursor: pointer;"><i class=" fa fa-phone"></i> 342-657-9876</a>
          <a class="d-block mb-2 text-decoration-none text-dark hand" style="cursor: pointer;"><i class=" fa fa-envelope"></i> xyz@gmail.com</a>

        </div>
      </div>
    </div>
  </div>
  <div class="container my-5">
    <h3 class="fs-1 fw-bolder mb-3">Contact With Us</h3>
    <div class="row">
      <div class="col-xs-12 col-lg-6 mb-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113996.47088671745!2d83.32150984527662!3d26.76384460484125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991446a0c332489%3A0x1ff3f97fdcc6bfa2!2sGorakhpur%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1712124406442!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-xs-12 col-lg-6">
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control mb-2 shadow-lg" required>
          <input type="email" name="email" id="email" placeholder="Enter your Email" class="form-control mb-2 shadow-lg" required>
          <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number" class="form-control mb-2 shadow-lg" required>
          <textarea name="Business" id="" cols="30" rows="10" placeholder="Write About Your Business" class="form-control mb-2 shadow-lg" required></textarea>
          <input type="submit" name="submit" value="Send" role="button" class="btn px-5 py-2 mt-2" style="background-color: #c85103; color: white;">
        </form>
      </div>
    </div>
  </div>
  <!-- Contact section End -->


  <?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Business = $_POST['Business'];


    $insert = "INSERT INTO `contactus`(`Name`, `Email`, `Number`, `About_Business`) VALUES ('$name','$email','$phone','$Business')";
    $run = mysqli_query($conn, $insert);

    if ($run) {
      echo "<script>alert('Form Submitted Successfully')</script>";
    }
    $conn->close();
  }


  ?>


  <!-- Footer Section Start -->
  <?php include 'footer.php' ?>
  <!-- Footer Section  End -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>