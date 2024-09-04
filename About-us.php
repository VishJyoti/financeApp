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
    $page = 'about'; // This is the page name to filter by
    $selectQuery = "SELECT * FROM `banners` WHERE `page` = '$page'";
    $run = mysqli_query($conn, $selectQuery);
    if ($run) {
      if (mysqli_num_rows($run) > 0) {
        $row = mysqli_fetch_assoc($run);
    ?>
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img height="600" src="admin/<?php echo $row['banner_img_1']; ?>" class="d-block w-100 img-fluid" style="height: 550px;" />
          </div>
        </div>

      <?php
      } else {
      ?>
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img height="600" src="images/about-banner.gif" class="d-block w-100 img-fluid" style="height: 550px;" />
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

  <!-- About us Section Start -->
  <div class="container my-5 " id="About-section">
    <div class="row">
      <div class="col-xs-12 col-lg-6 p-2">
        <div>
          <img src="images/about-img.png" class="img-fluid" alt="Image" />
        </div>
      </div>
      <div class="col-xs-12 col-lg-6 p-2">
        <div>
          <h2 class="text-center fs-1 fw-bold my-4">About Our Services</h2>
          <p class="px-2 fs-bold" style="font-size: 18px;">At our microfinance services business, we are dedicated to empowering small businesses to thrive. Through accessible loans and tailored financial solutions, we support entrepreneurs in turning their visions into reality. Whether it's starting a new venture or expanding an existing one, we understand the unique challenges faced by small businesses and offer flexible financing options to meet their needs</p>
          <p class="px-2 fs-bold" style="font-size: 18px;">Our commitment goes beyond just providing capital. We believe in fostering long-term relationships with our clients, offering personalized guidance and support every step of the way. From business planning to financial management, we strive to equip our clients with the tools and resources they need to succeed</p>
          <p class="px-2 fs-bold" style="font-size: 18px;">With a focus on inclusivity and social impact, we prioritize serving underserved communities and marginalized entrepreneurs. By unlocking access to finance, we aim to drive economic growth and create opportunities for individuals and communities to thrive. Join us in building a brighter future through the power of microfinance</p>

        </div>
      </div>
    </div>
  </div>
  <!-- About us Section End -->

  <!-- Management team  Start-->
  <div class="client-section py-5">
    <div class="container text-center">
      <div class="uper-section">
        <h1 class="fw-bold mb-4" style="font-size: 45px;">MANAGEMENT TEAM</h1>
      </div>
      <div class="row">

        <?php
        $fetchDataQuery = "SELECT * FROM employees";
        $runQuery = mysqli_query($conn, $fetchDataQuery);

        if ($runQuery && mysqli_num_rows($runQuery) > 0) {
          while ($row = mysqli_fetch_assoc($runQuery)) {

        ?>

            <div class="col-xxl-3 col-lg-4 col-md-6 col-xs-12">
              <div class="employ-box py-3 px-2 shadow mb-3 rounded" style="height: 400px; position: relative;">
                <img src="admin/<?php echo $row['em_img']; ?>" height="270" class="client-img mb-3 image-fluid">
                <?php
                if ($row['em_position'] != null) {
                ?>
                  <h4><?php echo $row['em_position']; ?></h4>
                <?php
                }
                ?>
                <p style="font-size: 20px; font-weight: 400;"><?php echo $row['em_name']; ?></p>
                <div class="overlay rounded-bottom">
                  <div class="overlay-content " style="cursor: pointer;">
                    <p style="cursor: pointer;"><i class="fa fa-phone"></i> <a href="tel:+1234567890" class="contact-link"><?php echo $row['em_number']; ?></a></p>
                    <p style="cursor: pointer;">
                    <div class="fa-solid fa-envelope"></div> <a href="mailto:anil.singh@example.com" class="contact-link"><?php echo $row['em_email']; ?></a></p>
                  </div>
                </div>
              </div>
            </div>

        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
  <!-- Management team  End-->

  <!-- Footer Section Start -->
  <?php include 'footer.php' ?>
  <!-- Footer Section  End -->


  <scrip height="500" t src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></scrip>
  <scrip height="500" t src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></scrip>
  <scrip height="500" t src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></scrip>
</body>

</html>