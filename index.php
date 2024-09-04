<?php require('admin/db_connection.php') ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DhanMitra MicroFinance Services - New Small Business Loans in India</title>
  <meta name="description" content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>


  <!-- Header Section start -->
  <?php include 'navbar.php'   ?>
  <!-- Header Section end -->

  <!-- slider Section start -->
  <div class="container slider text-center">
    <div class="box">
      <i class="fa-beat fa-solid fa-users"></i>
      <h5 style="margin-bottom: 0;margin-top: 5px;">1 Million</h5>
      <span>Active Customers</span>
    </div>
    <div class="box">
      <i class="fa-beat fa-solid fa-building"></i>
      <h5 style="margin-bottom:0;margin-top:5px;">500</h5>
      <span>Branches</span>
    </div>
    <div class="box">
      <i class="fa-beat fa-solid fa-city"></i>
      <h5 style="margin-bottom:0;margin-top:5px;">200</h5>
      <span>Districts</span>
    </div>
    <div class="box">
      <i class="fa-beat fa-solid fa-location"></i>
      <h5 style="margin-bottom:0;margin-top:5px;">15</h5>
      <span>States</span>
    </div>
    <div class="box">
      <i class="fa-beat fa-solid fa-rupee"></i>
      <h5 style="margin-bottom:0;margin-top:5px;">1.2 Million</h5>
      <span>Total AUM</span>
    </div>
  </div>
  <!-- slider Section end---->

  <!-- Text Slider Start -->
  <div class="track">
    <marquee class="p-2 mb-0">DhanMitra MicrofinanceServices provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc.</marquee>
  </div>
  <!-- Text Slider End -->

  <!-- banner section start -->
  <div id="carouselExample" class=" carousel slide">

    <?php
    $page = 'home'; // This is the page name to filter by
    $selectQuery = "SELECT * FROM `banners` WHERE `page` = '$page'";
    $run = mysqli_query($conn, $selectQuery);

    if ($run) {
      if (mysqli_num_rows($run) > 0) {
        $row = mysqli_fetch_assoc($run);
        //  print_r($row);
    ?>

        <div class="carousel-inner">
          <div class="carousel-item ">
            <img src="admin/<?php echo $row['banner_img_1']; ?>" class="d-block w-100 img-fluid" style=" height:550px;" />
          </div>
          <div class="carousel-item active">
            <img src="admin/<?php echo $row['banner_img_2']; ?>" class="d-block w-100 img-fluid" style=" height:550px;" />
          </div>
          <div class="carousel-item ">
            <img src="admin/<?php echo $row['banner_img_3']; ?>" class="d-block w-100 img-fluid" style=" height:550px;" />
          </div>
        </div>

      <?php
      } else {

      ?>

        <div class="carousel-inner">
          <div class="carousel-item ">
            <img src="images/index-img-1.png" class="d-block w-100 img-fluid" style=" height:550px;" />
          </div>
          <div class="carousel-item active">
            <img src="images/index-img-2.gif" class="d-block w-100 img-fluid" style=" height:550px;" />
          </div>
          <div class="carousel-item ">
            <img src="images/index-img-3.png" class="d-block w-100 img-fluid" style=" height:550px;" />
          </div>
        </div>


    <?php
      }
    }else{
      echo "Something went Wrong ...";
    }
    ?>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 35px; width:35px; background-color:black; border-radius:50%;"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" style="height: 35px; width:35px; background-color:black; border-radius:50%;"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- banner section end -->


  <!-- Text Slider Start -->
  <div class="track">
    <marquee class="p-2">DhanMitra MicrofinanceServices provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc.</marquee>
  </div>
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
          <h2 class="text-center fs-1 fw-bolder my-4">About Our Services</h2>
          <p class="px-2 fs-bold" style="font-size: 18px;">At our microfinance services business, we are dedicated to empowering small businesses to thrive. Through accessible loans and tailored financial solutions, we support entrepreneurs in turning their visions into reality. Whether it's starting a new venture or expanding an existing one, we understand the unique challenges faced by small businesses and offer flexible financing options to meet their needs</p>
          <p class="px-2 fs-bold" style="font-size: 18px;">Our commitment goes beyond just providing capital. We believe in fostering long-term relationships with our clients, offering personalized guidance and support every step of the way. From business planning to financial management, we strive to equip our clients with the tools and resources they need to succeed</p>
          <p class="px-2 fs-bold" style="font-size: 18px;">With a focus on inclusivity and social impact, we prioritize serving underserved communities and marginalized entrepreneurs. By unlocking access to finance, we aim to drive economic growth and create opportunities for individuals and communities to thrive. Join us in building a brighter future through the power of microfinance</p>
        </div>
      </div>
    </div>
  </div>
  <!-- About us Section End -->

  <!-- Client Section Start -->
  <div class="client-section py-5">
    <div class="container text-center">
      <div class="uper-section">
        <h1 class="fw-bolder" style="font-size: 45px;">Our Clients</h1>
        <p class="mb-5"> We serve individuals and small businesses with dedication and integrity, offering tailored financial solutions to fuel their aspirations. With personalized service and flexible terms, we empower our clients to thrive and create lasting positive impact in their communities. Your success is our priority</p>
      </div>
      <div class="row">
        <div class="col-xxl-3 col-lg-4 col-md-6 col-xs-12">
          <div class="client-box py-3 px-2 shadow-lg mb-3">
            <img src="images/client-img-1.webp" class="client-img img-fluid " style="height: 250px;">
            <!-- <p>Description of client 1</p> -->
          </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-md-6 col-xs-12">
          <div class="client-box py-3 px-2 shadow-lg mb-3">
            <img src="images/client-img-2.webp" class="client-img img-fluid" style="height: 250px;">
            <!-- <p>Description of client 1</p> -->
          </div>
        </div>

        <div class="col-xxl-3 col-lg-4 col-md-6 col-xs-12">
          <div class="client-box py-3 px-2 shadow-lg mb-3">
            <img src="images/client-img-3.webp" class="client-img img-fluid" style="height: 250px;">
            <!-- <p>Description of client 1</p> -->
          </div>
        </div>

        <div class="col-xxl-3 col-lg-4 col-md-6 col-xs-12">
          <div class="client-box py-3 px-2 shadow-lg mb-3">
            <img src="images/client-img-4.webp" class="client-img img-fluid" style="height: 250px;">
            <!-- <p>Description of client 1</p> -->
          </div>
        </div>

        <div class="col-xxl-3 col-lg-4 col-md-6 col-xs-12">
          <div class="client-box py-3 px-2 shadow-lg mb-3">
            <img src="images/client-img-5.webp" class="client-img img-fluid" style="height: 250px;">
            <!-- <p>Description of client 1</p> -->
          </div>
        </div>

        <div class="col-xxl-3 col-lg-4 col-md-6 col-xs-12">
          <div class="client-box py-3 px-2 shadow-lg mb-3">
            <img src="images/client-img-6.webp" class="client-img img-fluid" style="height: 250px;">
            <!-- <p>Description of client 1</p> -->
          </div>
        </div>

        <div class="col-xxl-3 col-lg-4 col-md-6 col-xs-12">
          <div class="client-box py-3 px-2 shadow-lg mb-3">
            <img src="images/client-img-7.avif" class="client-img img-fluid" style="height: 250px;">
            <!-- <p>Description of client 1</p> -->
          </div>
        </div>

        <div class="col-xxl-3 col-lg-4 col-md-6 col-xs-12">
          <div class="client-box py-3 px-2 shadow-lg mb-3">
            <img src="images/client-img-8.jpg" class="client-img img-fluid" style="height: 250px;">
            <!-- <p>Description of client 1</p> -->
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Client Section End -->

  <!-- Offering section Start  -->
  <div class="container my-5" id="Offering">
    <div class="row p-3">
      <div class="offer-box col-xs-12 col-md-6 text-center">
        <i class="fa-bounce fa-solid fa-coins"></i>
        <h3>MicroFinance</h3>
        <p>Microfinance, is the provision of small credit to low-income individuals or groups who otherwise would have no other access to financial services. </p>
        <a href="./MicroFinace.php">Read More...</a>
      </div>
      <div class="offer-box col-xs-12 col-md-6 text-center ">
        <i class="fa-bounce fa-solid fa-indian-rupee-sign"></i>
        <h3>MSME</h3>
        <p>We are focused to serve the “Missing Middle” segment of MSME, which is aspiring to increase their contribution in the economic growth of the country</p>
        <a href="./MSME.php">Read More...</a>
      </div>
    </div>
  </div>
  <!-- Offering section End ---->

  <!-- Footer Section Start -->
  <?php include 'footer.php' ?>
  <!-- Footer Section  End -->


  <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>