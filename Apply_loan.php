<?php

require('admin/db_connection.php');
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
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="600" src="images/loan-banner.gif" class="d-block w-100 img-fluid"/>
    </div>
  </div>
</div>
  <!-- banner section end -->

  <!-- Text Slider Start -->
  <marquee class="p-2">DhanMitra MicrofinanceServices provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc.</marquee>
   <!-- Text Slider End -->

   
<div class="loan-form px-1">
    <div class="container my-5 shadow-lg py-5" style="background-color:  rgb(253, 250, 246);">
        <div class="row">
            <form action="" method="POST" enctype="multipart/form-data"  style="width: 80%; margin: auto;">
             <h1 class="fw-bolder fs-1 my-4">Apply Loan</h1>
         <label class="form-label">Enter Your Name <span class="text-danger"> *</span></label>
         <input type="text" name="name" id="name"  class="form-control shadow-md mb-2"  required>

        <label class="form-label">Enter Your Email <span class="text-danger"> *</span></label>
       <input type="email" name="email" id="email" class="form-control shadow-md  mb-2" required>

       <label class="form-label">Enter Your Phone Number <span class="text-danger"> *</span></label>
         <input type="number" name="phone" id="phone" class="form-control shadow-md  mb-2" required>

         <label class="form-label">Enter Your Occupation <span class="text-danger"> *</span></label>
         <input type="text" name="occupation" id="occupation" class="form-control shadow-md  mb-2" required>

         <label class="form-label">Loan Amount (In INR) <span class="text-danger"> *</span></label>
         <input type="number" name="loanAmount" id="occupation" class="form-control shadow-md  mb-2" required>

         <label class="form-label">Reason for Loan <span class="text-danger"> *</span></label>
         <textarea name="loanReason"  id="occupation" class="form-control shadow-md  mb-2"></textarea>
         <input type="text" name="loanReason" id="occupation" class="form-control shadow-md  mb-2" required>

         <label class="form-label">Enter Your Address <span class="text-danger"> *</span></label>
         <input type="text" name="address" id="occupation" class="form-control shadow-md  mb-2" required>

         <button type="submit" class="btn py-2 px-4 mt-4" style="background-color: #c85103; color: white;" name="submitLoanDetails">Submit</button>
         </form>
     </div>
    </div>
</div>

<?php

if(isset($_POST['submitLoanDetails'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $occupation = $_POST['occupation'];
  $loanAmount = $_POST['loanAmount'];
  $loanReason = $_POST['loanReason'];
  $address = $_POST['address'];

  $insert = "INSERT INTO `loan`(`Name`, `Email`, `Number`, `Occupation`, `loan_amount`, `loan_reason`, `Address`) VALUES ('$name','$email','$phone','$occupation','$loanAmount','$loanReason','$address')";
  $sql = mysqli_query($conn, $insert);
  if($sql){
    echo "<script>alert('Your Form Submitted Successfully ! ')</script>";
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