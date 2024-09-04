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
</head>

<body>
  <?php include 'admin_navbar.php'; ?>

  <?php
  if (isset($_GET['u_id'])) {
    $id = $_GET['u_id'];

    $selectQuery = "SELECT * FROM `admin` WHERE `S.no`=$id";
    $run = mysqli_query($conn, $selectQuery);

    if (mysqli_num_rows($run) > 0) {
      $row = mysqli_fetch_assoc($run);
    }
  }
  ?>

      <div class="container mt-3">
        <div class="row offset-md-3">
          <div class="col-md-6" style="background-color:#c85105; padding:30px; color:#fff;">
            <h3>Edit Your Admin User Details</h3>
            <hr class="mb-4">
            <form method="POST" action="update_user_details.php?new_id=<?php echo $row['S.no']; ?>" enctype="multipart/form-data" onsubmit="return validateForm()">
              <div class="mb-3">
                <label>Upload Image</label>
                <input class="form-control" type="file" name="u_Img" id="reg_img" accept=".jpg, .jpeg, .png, .jfif">
                <input type="hidden" name="prev_img" value="<?php echo $row['admin_img']; ?>">
              </div>
              <div class="mb-3">
                <label>Name</label>
                <input class="form-control" type="text" name="u_Name" id="u_name" value="<?php echo $row['name']; ?>">
              </div>
              <div class="mb-3">
                <label>Email</label>
                <input class="form-control" type="email" id="u_Email" name="u_Email" value="<?php echo $row['email']; ?>">
              </div>
              <div id="pass" class="mb-3">
                <label>Password</label>
                <input class="form-control" type="password" name="u_Pass" id="reg_pass" value="<?php echo $row['password']; ?>">
                <i class="fa fa-eye" id="regEyebtn" onclick="toggleRegPassword()" style="cursor:pointer;"></i> Toggle Password
              </div>
              <div class="mb-3">
                <label>Phone Number</label>
                <input class="form-control" type="number" name="u_Number" id="u_Number" value="<?php echo $row['number']; ?>">
              </div>
              <div class="container text-center mt-4">
                <button name="updateBtn" type="submit" class="btn btn-outline-light">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>


  <script src="admin_main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>