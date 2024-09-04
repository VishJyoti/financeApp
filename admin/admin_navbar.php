<?php
require('db_connection.php');
session_start();
if (!isset($_SESSION['adminLoginId'])) {
  header("Location: admin_login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DhanMitra MicroFinance Services - New Small Business Loans in India</title>
  <meta name="description" content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="admin_style.css">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <style>
    .nav {
      width: 80%;
      margin: auto;
      justify-content: space-between;
      align-items: center;
    }

    @media (max-width: 767px) {
      .nav {
        justify-content: center;
      }
    }
  </style>
</head>

<?php
if (isset($_SESSION['adminLoginId'])) {
    $userEmail = $_SESSION['adminLoginId'];
    $fetchAmdinUser = "SELECT * FROM `admin` WHERE `email` = '$userEmail'";
    $run = mysqli_query($conn, $fetchAmdinUser);
    if($run){
      if(mysqli_num_rows($run)){
        $row = mysqli_fetch_assoc($run);
      }
    }
}

?>

<body>

  <nav class="navbar sticky-top" style="background-color: orange;">
    <div class=" nav">
      <a class="navbar-brand mb-1" href="#"><img src="../images/logo-3.png" height="90"></a>
      <div class="row justify-content-xs-center justify-content-md-around me-3">

        <div class="col-md-4 mx-2 d-flex">
              <a href="admin_users.php"><img src="<?php echo $row['admin_img']; ?>" height="40" width="40" style="border-radius: 50%;"></a>
              <a href="logout.php" class="btn ms-3" name="logout" style="background-color:#c85105;color:white;">logout</a>
        </div>

        <div class="col-2 ms-2">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #c85105;">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="background-color: #c85105;">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="adminPanel.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_users.php">Admin Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_loan.php">Loan Application</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_contact_us.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Subscribe.php">Subscribers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_annualReports.php">Annual Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add-banners.php">Manage Banners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_employee.php">Manage Employees</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_clients.php">Add Clients</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>



  <script src="admin_main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>