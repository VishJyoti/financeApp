<?php 

require('admin/db_connection.php')

?>

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
        $page = 'annualReports'; // This is the page name to filter by
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
                        <img height="600" src="images/annual-reports.gif" class="d-block w-100 img-fluid" style="height: 550px;" />
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

   <div class="container my-5 text-center">
    <h2 class="text-center fw-bolder"  style="text-shadow: rgb(237, 124, 84) 1px 0 10px; font-size: 50px;">ANNUAL REPORTS</h2>
    <p>Click on the arrow To download the Annual Report</p>
    <div class="row justify-content-center my-5 ">
     
<?php 
$query = "SELECT * FROM `annual_reports`";
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
    while ($result = mysqli_fetch_assoc($query_run)) {
?>
    
   <div class="col-12 col-md-4 col-lg-3 mb-4 shadow-lg mx-5" style="cursor: pointer; width: 180px; background-color: rgb(250, 243, 233);">
    <div class="report-box p-4">
    <a class="d-block" href="admin/<?php echo $result['PDF']; ?>" download><i class="fa-regular fa-circle-down fa-2x fa-bounce" style="color: #c85103;transition: 1s ease;"></i></a>
    <span class="d-block fs-5"><?php echo $result['Month'] ?> </span>
    <span><?php echo $result['Date'] ?></span>
    </div>
   </div>
   <?php
 }
} else {
  echo "No Data found.";
}
?>
   </div>
   </div>
  
   <!-- Footer Section Start -->
   <?php include 'footer.php' ?>
  <!-- Footer Section  End -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>