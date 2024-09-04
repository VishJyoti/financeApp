<?php 
require('admin/db_connection.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      DhanMitra MicroFinance Services - New Small Business Loans in India
    </title>
    <meta
      name="description"
      content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  </head>
  <body>
    <footer>
      <div class="content">
        <div class="top">
          <div class="logo-details">
            <span class="logo_name"
              ><img src="./images/logo.png" alt=""
            /></span>
          </div>
          <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <hr />
        <div class="link-boxes">
          <ul class="box">
            <li class="link_name">Company</li>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact_us.php">Contact us</a></li>
            <li><a href="About-us.php">About us</a></li>
          </ul>
          <ul class="box">
            <li class="link_name">Services</li>
            <li><a href="MicroFinace.php">MicroFinace</a></li>
            <li><a href="MSME.php">MSE</a></li>
            </ul>
          <ul class="box">
            <li class="link_name">Partners</li>
            <li><a href="bank_partner.php">Bank Partner</a></li>
            <li><a href="service_partner.php">Service Partner</a></li>
          </ul>
          <ul class="box">
            <li class="link_name">Courses</li>
            <li><a href="career.php#current-opening">Current Opening</a></li>
            <li><a href="career.php#earning_development">Learning & Development</a></li>
            <li><a href="career.php#employee-rewards">Employee Rewards</a></li>
            <li><a href="career.php#employee_speak">Employee Speaks</a></li>
            <li><a href="career.php#activities">Activities</a></li>
          </ul>
          <ul class="box input-box">
           <form method="POST" enctype="multipart/form-data">
            <li class="link_name">Subscribe</li>
              <li><input type="text" placeholder="Enter your email" name="subs_email" class="form-control"></li>
              <li><button type="submit" name="subscribe" class="btn form-control" style="background-color: #c85105;color:white;">Subscribe</button></li>
            </form>
          </ul>
        </div>
      </div>
      <div class="bottom-details">
        <div class="bottom_text">
          <span class="copyright_text">
            <a href="#"><i class="fa-solid fa-location-dot fa-beat-fade" style="font-size: 25px;"></i> address</a>
            <a href="#"><i class="fa-solid fa-phone fa-beat-fade" style="font-size: 25px;"></i> 234-554-9876</a>
          </span >
          <span class="policy_terms">
            <a href="privacy_policy.php">Privacy policy</a>
            <a href="#">Terms & condition</a>
          </span>
        </div>
      </div>
    </footer>

<?php 
if(isset($_POST['subscribe'])){
$Subs_email = $_POST['subs_email'];

$insert = "INSERT INTO `subscribers`(`Email`) VALUES ('$Subs_email ')";
$run = mysqli_query($conn, $insert);

if($run){
  echo "<script> alert('You have successfully subscribed!') </script>";
}

$conn->close();

}

?>




    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
