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
        <h2>Upload Banner Image</h2>
        <hr>
        <p class="mb-4" style="font-size: 14px; font-weight:light;"><i class="fa-solid fa-book-open-reader"></i> <span>Upload an image with a ratio of 1583 x 550</span>
        </p>
        <form action="upload-banner.php" method="POST" enctype="multipart/form-data">
          <div class="form-group mb-3">
            <label for="page">Select Page :</label>
            <select name="page" id="page" class="form-control form-select" style="cursor:pointer;" required>
              <option selected disabled>---Select Page---</option>
              <option value="home">Home</option>
              <option value="about">About</option>
              <option value="microfinance">MicroFinance</option>
              <option value="MSME">MSME</option>
              <option value="carrer">Carrer</option>
              <option value="bankPartner">Bank Partner</option>
              <option value="servicePartner">Services Partner</option>
              <option value="annualReports">Annual Reports</option>
              <option value="contact">Contact Us</option>
              <!-- Add more options as needed -->
            </select>
          </div>
          <div class="form-group mb-4">
            <label for="banner_image" id="labelforOne">Select Image 1:</label>
            <input type="file" id="banner_image_one" class="form-control" name="banner_image_one">
          </div>
          <div class="form-group mb-4">
            <label for="banner_image" id="labelfortwo">Select Image 2:</label>
            <input type="file" id="banner_image_two" class="form-control" name="banner_image_two">
          </div>
          <div class="form-group mb-4" id="labelforThree">
            <label for="banner_image">Select Image 3:</label>
            <input type="file" id="banner_image_three" class="form-control" name="banner_image_three">
          </div>
          <div class="container text-center form-group">
            <button type="submit" class="btn btn-outline-light" name="upload_banner">Upload</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- display all banner details  -->
  <div class="col-12 mt-5 text-center container">
    <table class="table caption-top border">
      <caption class="fs-3 fw-bold text-center text-shadow mb-3">List of Banner Images</caption>
      <thead>
        <tr>
          <th scope="col">S.no</th>
          <th scope="col">Image 1</th>
          <th scope="col">Image 2</th>
          <th scope="col">Image 3</th>
          <th scope="col">Page</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $selectQuery = "SELECT * FROM `banners`";
        $run = mysqli_query($conn, $selectQuery);

        if ($run) {
          if (mysqli_num_rows($run) > 0) {
            $no = 0;
            while ($row = mysqli_fetch_assoc($run)) {
              $no += 1;

        ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><img src="<?php echo $row['banner_img_1']; ?>" height="100" alt="first image slider"></td>
                <td><img src="<?php echo $row['banner_img_2']; ?>" height="100" alt="Second image slider"></td>
                <td><img src="<?php echo $row['banner_img_3']; ?>" height="100" alt="third image slider"></td>
                <td><?php echo $row['page']; ?></td>
                <td>
                  <a href="?id=<?php echo $row['S.no']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                  <a href="edit-banner.php?edit_id='<?php echo $row['S.no']; ?>'" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
              </tr>
        <?php
            }
          }
        }
        ?>
      </tbody>
    </table>
  </div>
  

  <?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // First, get the image path to delete the file from the server
    $query = "SELECT * FROM banners WHERE `S.no` = $id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $image_path1 = $row['banner_img_1'];
    $image_path2 = $row['banner_img_2'];
    $image_path3 = $row['banner_img_3'];

    // Delete the record from the database
    $deleteQuery = "DELETE FROM `banners` WHERE `S.no` = $id";
    if ($conn->query($deleteQuery) === TRUE) {
      // Delete the image file from the server
      if (file_exists($image_path1) || file_exists($image_path2) || file_exists($image_path3)) {
        unlink($image_path1);
        unlink($image_path2);
        unlink($image_path3);
      }
      echo "<script>alert('Banner deleted successfully.'); window.location.href='add-banners.php';</script>";
    } else {
      echo "<script>alert('Error deleting record: " . $conn->error . "'); window.location.href='add-banners.php';</script>";
    }
  }

  $conn->close();
  ?>

  <script src="admin_main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  <script>
    document.getElementById('page').addEventListener('change', function() {
      var selectedPage = this.value;
      var two = document.getElementById('banner_image_two');
      var three = document.getElementById('banner_image_three');

      if (selectedPage === 'home') {
        document.getElementById('labelfortwo').style.display = 'block';
        document.getElementById('labelforThree').style.display = 'block';
        two.type = 'file';
        three.type = 'file';
      } else {
        document.getElementById('labelfortwo').style.display = 'none';
        document.getElementById('labelforThree').style.display = 'none';
        two.type = 'hidden';
        three.type = 'hidden';
      }
    });
  </script>

</body>

</html>