<?php require('admin/db_connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DhanMitra MicroFinance Services -  New Small Business Loans in India</title>
    <meta name="description" content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc">
    <link href="modules/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="modules/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" >
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
    $page = 'MSME'; // This is the page name to filter by
    $selectQuery = "SELECT * FROM `banners` WHERE `page` = '$page'";
    $run = mysqli_query($conn, $selectQuery);
    if ($run) {
      if (mysqli_num_rows($run) > 0) {
        $row = mysqli_fetch_assoc($run);
    ?>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="600" src="admin/<?php echo $row['banner_img_1']; ?>" class="d-block w-100 img-fluid" style="height: 550px;"/>
    </div>
  </div>

  <?php
      } else
       {
      ?>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="600" src="images/MSME-banner.gif" class="d-block w-100 img-fluid" style="height: 550px;"/>
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


<!-- Gallery Section Start-->
<div class="py-5 container text-center">
  <h2 class="fw-bolder fs-1" style="text-shadow: #FC0 1px 0 10px;"> MSME SERVICES</h2>
 <div class="row align-items-center ">
  <p>We are focused to serve the “Missing Middle” segment of MSME, which is aspiring to increase their contribution in the economic growth of the country. Our commitment is to timely serve this segment through a service differentiated on trust, transparency, and convenience.</p>
  <main class='gallery'>
    <img src='https://fusionmicrofinance.com/wp-content/uploads/2021/08/5-1.jpg' class='hero' >
    <img src='https://fusionmicrofinance.com/wp-content/uploads/2021/08/3-1.jpg'>
    <img src='https://fusionmicrofinance.com/wp-content/uploads/2021/08/1-2.jpg'>
    <img src='https://fusionmicrofinance.com/wp-content/uploads/elementor/thumbs/Picture-11-pvpi4h4ojn7c7n192dv2npxml7iwdobj4udz50lgga.png'>
    <img src='https://fusionmicrofinance.com/wp-content/uploads/2021/08/4-1.jpg'>
  </main>
 </div>
</div>
<!-- Gallery Section End -->

<!-- Product Section Start -->

<div style="background-color: rgb(250, 228, 201);">
  <div class="container py-5">
    <h2  class="fw-bolder" style="text-shadow: rgb(237, 124, 84) 1px 0 10px; font-size: 50px;">Products</h2>
    <div class="row p-5">
      <div class="product-item col-xs-12 col-md-4 " style="width: 400px;" >
        <h3 class="fw-bolder fs-2 mb-4">Unsecured Business Loans</h3>
        <span data-bs-toggle="modal" data-bs-target="#firstModal" role="button">Learn More</span> <i class="fa-solid fa-hand-point-left fa-beat-fade" style=" margin-left: 5px;font-size: 35px;" ></i>
      </div>
      <div class="product-item col-xs-12 col-md-4 " style="width: 400px;" >
        <h3 class="fw-bolder fs-2 mb-4">Secured Business Loans</h3>
        <span data-bs-toggle="modal" data-bs-target="#secondModal" role="button">Learn More</span> <i class="fa-solid fa-hand-point-left fa-beat-fade" style=" margin-left: 5px;font-size: 35px;" ></i>
      </div>
      <div class="product-item col-xs-12 col-md-4 " style="width: 400px;" >
        <h3 class="fw-bolder fs-2 mb-4">Machinery Loans</h3>
       <span data-bs-toggle="modal" data-bs-target="#thirdModal" role="button">Learn More</span> <i class="fa-solid fa-hand-point-left fa-beat-fade" style=" margin-left: 5px;font-size: 35px;" ></i>
      </div>
    </div>
  </div>
</div>

<!-- Product Section End -->

<!-- product Modal Start -->
<div class="modal fade" id="firstModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content p-3" style="background-color: orange;">
      <div class="modal-body">
        <p class="fs-5">At FMPL we have designed short tenure term loans for small businesses and micro entrepreneurs have stable business and regular cash flows.</p>
        <p> - Rate of Interest Type     Fixed</p>
         <p> - Minimum Loan Amount      INR 100,000</p>
         <p> - Maximum Loan Amount     INR 500,000</p>
         <p> - Minimum Loan Tenure      New loans 12 Months Top Up Loan- 6 Month (Existing Clients)</p>
         <p> - Maximum Loan Tenure      36</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background-color: #c85103;color: white;" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="secondModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content p-3" style="background-color: orange;">
      <div class="modal-body">
        <p class="fs-5">Growing small business have requirement of large funds and for longer tenure and considering the opportunity in the segment secured loans are designed.</p>
         <p> - Rate of Interest Type          Fixed</p>
         <p> - Minimum Loan Amount     INR 100,000</p>
         <p> - Maximum Loan Amount    INR 1,000,000</p>
         <p> - Minimum Loan Tenure      12 Months</p>
         <p> - Maximum Loan Tenure     120 Months</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background-color: #c85103;color: white;" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="thirdModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content p-3" style="background-color: orange;">
      <div class="modal-body">
        <p class="fs-5">Growing small business have requirement of large funds and for longer tenure and considering the opportunity in the segment secured loans are designed.</p>
          <p>- Rate of Interest Type          Fixed</p>
         <p> - Minimum Loan Amount     INR 100,000</p>
         <p> - Maximum Loan Amount    INR 1,000,000</p>
          <p>- Minimum Loan Tenure      12 Months</p>
          <p>- Maximum Loan Tenure     120 Months</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" style="background-color: #c85103;color: white;" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- product Modal End -->


<script>
  const hero = document.querySelector('.hero');

function activate(e) {
  if (e.target.matches('.hero') || !e.target.matches('img')) return;
  [hero.src, e.target.src] = [e.target.src, hero.src];
}

window.addEventListener('click',activate,false);
</script>
  
   <!-- Footer Section Start -->
   <?php include 'footer.php' ?>
  <!-- Footer Section  End -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>