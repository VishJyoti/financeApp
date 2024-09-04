<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DhanMitra MicroFinance Services - New Small Business Loans in India</title>
  <meta name="description" content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="admin_style.css">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
</head>

<body>
  <?php include 'admin_navbar.php' ?>

  <!-- Admin panel Home Start -->

  <h1 class="text-center my-5 fw-bolder fs-1 " style="text-shadow: rgb(237, 124, 84) 1px 0 10px; font-size: 50px;">Admin Panel</h1>

  <div class="container">
    <div class="row justify-content-center">

     <!-- admin users section Start     -->
      <div class="col-xs-12 col-md-4 col-lg-3 mb-3 text-center pt-4 pb-2 mx-3" style="width:250px; background-color: #c85105; color: aliceblue;">
        <h4>Admin Users</h4>

        <?php
        // Query to count the number of rows in the table
        $query = "SELECT COUNT(*) as total_users FROM `admin`";
        $result = mysqli_query($conn, $query);
        if ($result) {
          $row = mysqli_fetch_assoc($result);
          $total_users = $row['total_users'];
        ?>

          <p class="fw-bolder fs-1"><?php echo  $total_users;  ?></p>

        <?php
        } else {
          echo "Error: " . mysqli_error($conn);
        }
        ?>

      </div>
     <!-- admin users section End -->

        <!-- Annual Reports section start -->
      <div class="col-xs-12 col-md-4 col-lg-3 mb-3 text-center pt-4 pb-2 mx-3" style="width:250px; background-color: #c85105; color: aliceblue;">
        <h4>Annual Reports</h4>
        <?php
        // Query to count the number of rows in the table
        $query = "SELECT COUNT(*) as total_annual_reports FROM `annual_reports`";
        $result = mysqli_query($conn, $query);
        if ($result) {
          $row = mysqli_fetch_assoc($result);
          $total_annual_reports = $row['total_annual_reports'];
        ?>

          <p class="fw-bolder fs-1"><?php echo  $total_annual_reports;  ?></p>

        <?php
        } else {
          echo "Error: " . mysqli_error($conn);
        }
        ?>

      </div>
        <!-- Annual Reports section End -->

      <!-- Loan Applications section Start -->
      <div class="col-xs-12 col-md-4 col-lg-3 mb-3 text-center pt-4 pb-2 mx-3" style="width:250px; background-color: #c85105; color: aliceblue;">
        <h4>Loan Applications</h4>
        <?php
        // Query to count the number of rows in the table
        $query = "SELECT COUNT(*) as total_loan_applications FROM `loan`";
        $result = mysqli_query($conn, $query);
        if ($result) {
          $row = mysqli_fetch_assoc($result);
          $total_loan_applications = $row['total_loan_applications'];
        ?>

          <p class="fw-bolder fs-1"><?php echo  $total_loan_applications;  ?></p>

        <?php
        } else {
          echo "Error: " . mysqli_error($conn);
        }
        ?>

      </div>
       <!-- Loan Applications section End -->

      <!-- Contact Us section Start -->
      <div class="col-xs-12 col-md-4 col-lg-3 mb-3 text-center pt-4 pb-2 mx-3" style="width:250px; background-color: #c85105; color: aliceblue;">
        <h4>Contact Us</h4>
        <?php
        // Query to count the number of rows in the table
        $query = "SELECT COUNT(*) as total_contact_us_form FROM `contactus`";
        $result = mysqli_query($conn, $query);
        if ($result) {
          $row = mysqli_fetch_assoc($result);
          $total_contact_us_form = $row['total_contact_us_form'];
        ?>

          <p class="fw-bolder fs-1"><?php echo  $total_contact_us_form;  ?></p>

        <?php
        } else {
          echo "Error: " . mysqli_error($conn);
        }
        ?>

      </div>
       <!-- Contact Us section End -->

      <!-- subscribe section Start -->
      <div class="col-xs-12 col-md-4 col-lg-3 mb-3 text-center pt-4 pb-2 mx-3" style="width:250px; background-color: #c85105; color: aliceblue;">
        <h4>Subscribers</h4>
        <?php
        // Query to count the number of rows in the table
        $query = "SELECT COUNT(*) as total_subscribe FROM `subscribers`";
        $result = mysqli_query($conn, $query);
        if ($result) {
          $row = mysqli_fetch_assoc($result);
          $total_subscribe = $row['total_subscribe'];
        ?>

          <p class="fw-bolder fs-1"><?php echo  $total_subscribe;  ?></p>

        <?php
        } else {
          echo "Error: " . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>

      </div>
       <!-- subscribe section End -->



    </div>
  </div>

  <!-- Admin panel Home End -->


  <script src="admin_main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>