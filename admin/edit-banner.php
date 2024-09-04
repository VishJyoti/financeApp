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

  <div class="container mt-5">
    <div class="row offset-md-3">
      <div class="col-md-8 text-white p-5" style="background-color: #c85103;">
        <h2>Edit Banner</h2>
        <hr>
        <?php
        if (isset($_GET['edit_id'])) {
          $id = $_GET['edit_id'];
        }
        ?>
        <form action="update_banner.php?upd_id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">

          <?php
          if (isset($_GET['edit_id'])) {
            $id = $_GET['edit_id'];

            $fetchPageName = "SELECT * FROM `banners` WHERE `S.no`=$id";
            $run = mysqli_query($conn, $fetchPageName);

            if ($run && mysqli_num_rows($run) > 0) {
              $row = mysqli_fetch_assoc($run);
              if ($row['page'] === 'home') {
          ?>
                <div class="form-group mb-4">
                  <label for="img_1">Choose Image 1 :</label>
                  <input type="file" id="banner_image_one" class="form-control" name="banner_img_one">
                  <input type="hidden" name="prev_img_1" value="<?php echo $row['banner_img_1']; ?>">
                </div>
                <div class="form-group mb-4">
                  <label for="img_2">Choose Image 2 :</label>
                  <input type="file" id="banner_image_two" class="form-control" name="banner_img_two">
                  <input type="hidden" name="prev_img_2" value="<?php echo $row['banner_img_2']; ?>">
                </div>
                <div class="form-group mb-4" id="labelforThree">
                  <label for="img_3">Choose Image 3 :</label>
                  <input type="file" id="banner_image_three" class="form-control" name="banner_img_three">
                  <input type="hidden" name="prev_img_3" value="<?php echo $row['banner_img_3']; ?>">
                </div>

              <?php
              } else {
              ?>
                <div class="form-group mb-4">
                  <label for="img">Choose Image :</label>
                  <input type="file" id="banner_image" class="form-control" name="banner_img">
                  <input type="hidden" name="prev_img" value="<?php echo $row['banner_img_1']; ?>">
                </div>
          <?php
              }
            }
          }
          ?>

          <div class="container text-center form-group">
            <button type="submit" class="btn btn-outline-light" name="update_banner">Update</button>
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