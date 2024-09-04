<?php require('db_connection.php'); ?>
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
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</head>

<body>

  <?php include('admin_navbar.php') ?>

  <?php
  if (isset($_GET['upd_id'])) {

    $updId = $_GET['upd_id'];

    $fetchDataQuery = "SELECT * FROM `employees` WHERE `em_id` = $updId";
    $runQuery = mysqli_query($conn, $fetchDataQuery);

    if ($runQuery && mysqli_num_rows($runQuery) > 0) {
      $row = mysqli_fetch_assoc($runQuery)

  ?>

      <div class="container mt-5">
        <div class="row offset-md-3">
          <div class="col-md-8 p-5 shadow" style="background-color: white;">
            <h2>Edit Employee Details</h2>
            <hr class="mb-5">
            <form action="update_employee.php?upd_em_id='<?php echo $row['em_id']; ?>'" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="">Name : </label>
                <input type="text" class="form-control" id="name" name="upd_em_name" value="<?php echo $row['em_name']; ?>">
              </div>
              <div class="mb-3">
                <label for="">Email : </label>
                <input type="email" class="form-control" id="email" name="upd_em_email" value="<?php echo $row['em_email']; ?>">
              </div>
              <div class="mb-3">
                <label for="">Phone Number : </label>
                <input type="number" class="form-control" id="number" name="upd_em_number" value="<?php echo $row['em_number']; ?>">
              </div>
              <div class="mb-3">
                <label for="">Upload Image :</label>
                <input type="file" class="form-control" id="img" name="upd_em_img">
                <input type="hidden" name="prev_em_img" value="<?php echo $row['em_img']; ?>">
                <div id="imageHelp" class="form-text">Upload an image with a ratio of 270 x 270</div>
              </div>
              <div class="mb-3">
                <label for="">Position : </label>
                <input type="text" class="form-control" id="position" name="upd_em_position" value="<?php echo $row['em_position']; ?>">
              </div>
              <div class="mb-3">
                <label for="">Joining Date : </label>
                <input type="date" class="form-control" id="joiningdate" name="upd_em_joining_date" value="<?php echo $row['em_joining_date']; ?>">
              </div>
              <div class="container text-center">
                <button type="submit" name="update_employee_details" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>

  <?php }
  }
  ?>



  <script src="admin_main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>