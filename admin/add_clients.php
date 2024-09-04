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
      <div class="col-md-8 p-5 shadow" style="background-color: white;">
        <h2>Add Employee Details</h2>
        <hr class="mb-4">
        <form action="upload_clients.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
          <div class="mb-3">
            <label class="form-label">Name : </label>
            <input type="text" class="form-control" id="c_name" name="c_name">
          </div>
          <div class="mb-3">
            <label class="form-label">Email : </label>
            <input type="email" class="form-control" id="c_email" name="c_email">
          </div>
          <div class="mb-3">
            <label class="form-label">Number : </label>
            <input type="number" class="form-control" id="c_number" name="c_number">
          </div>
            <label class="form-label">Upload Image : </label>
            <input type="file" class="form-control" id="c_img" name="c_img" required>
            <div id="imageHelp" class="form-text">Upload an image with a ratio of 270 x 270</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Occupation : </label>
            <input type="text" class="form-control" id="c_occu" name="c_occupation">
          </div>
          <div class="mb-3">
            <label class="form-label">Loan Amount : </label>
            <input type="number" class="form-control" id="c_loanAmount" name="c_loanAmount">
          </div>
          <div class="mb-3">
            <label class="form-label">Address : </label>
            <input type="text" class="form-control" id="c_address" name="c_address">
          </div>
          <div class="mb-3">
            <label class="form-label">Date : </label>
            <input type="date" class="form-control" id="c_date" name="c_date">
          </div>
          <div class="container text-center">
            <button type="submit" name="add_client" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- employee details  -->

  <div class="wrapper mt-5">
    <h2 class="mb-3 mt-3">Here All Your Clients Details</h2>
    <table class="c-table border">
      <thead class="c-table__header">
        <tr>
          <th class="c-table__col-label">S.no</th>
          <th class="c-table__col-label">Image</th>
          <th class="c-table__col-label">Name</th>
          <th class="c-table__col-label">Email</th>
          <th class="c-table__col-label">Number</th>
          <th class="c-table__col-label">Occupation</th>
          <th class="c-table__col-label">Loan Amount</th>
          <th class="c-table__col-label">Address</th>
          <th class="c-table__col-label">Date</th>
          <th class="c-table__col-label">Operation</th>
        </tr>
      </thead>
      <tbody class="c-table__body">

        <?php

        $fetchData = "SELECT * FROM `clients`";
        $run = mysqli_query($conn, $fetchData);

        if ($run && mysqli_num_rows($run) > 0) {
          $no = 0;
          while ($row = mysqli_fetch_assoc($run)) {
            $no += 1;
        ?>

            <tr>
              <td class="c-table__cell"><?php echo $no; ?></td>
              <td class="c-table__cell"><img src="<?php echo $row['c_img']; ?>" alt="" style="height: 100px;width:100px; "></td>
              <td class="c-table__cell"><?php echo $row['c_name'] ?></td>
              <td class="c-table__cell"><?php echo $row['c_email']; ?></td>
              <td class="c-table__cell"><?php echo $row['c_number']; ?></td>
              <td class="c-table__cell"><?php echo $row['c_occupation']; ?></td>
              <td class="c-table__cell"><?php echo $row['c_loan_amount']; ?></td>
              <td class="c-table__cell"><?php echo $row['c_address']; ?></td>
              <td class="c-table__cell"><?php echo $row['c_date']; ?></td>
              <td class="c-table__cell">
                <a href="?del_id='<?php echo $row['c_id']; ?>'" class="btn btn-danger">
                  <div class="fa-solid fa-trash-can"></div>
                </a>
                <a href="edit_client_details.php?upd_id='<?php echo $row['c_id']; ?>'" class="btn btn-success">
                  <div class="fa-solid fa-pen-to-square"></div>
                </a>
              </td>
            </tr>

        <?php
          }
        }
        ?>

      </tbody>
    </table>
  </div>



  <?php
  if (isset($_GET['del_id'])) {
    $del_id = $_GET['del_id'];

    // First, get the image path to delete the file from the server
    $query = "SELECT * FROM employees WHERE `em_id` = $del_id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $image_path = $row['em_img'];

    //delete all data 
    $deleteQuery = "DELETE FROM employees WHERE `em_id` = $del_id";
    if ($conn->query($deleteQuery) === TRUE) {
      // Delete the image file from the server
      if (file_exists($image_path)) {
        unlink($image_path);
      }
      echo "<script>alert('Banner deleted successfully.'); window.location.href='add-employee.php';</script>";
    } else {
      echo "<script>alert('Error deleting record: " . $conn->error . "'); window.location.href='add-employee.php';</script>";
    }
  }
  $conn->close();
  ?>




  <script src="admin_main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  <script>
    (function() {
      var tableHeaders = document.getElementsByClassName("c-table__header");
      var tableCells = document.getElementsByClassName("c-table__cell");
      var span = document.createElement("span");

      for (var i = 0; i < tableCells.length; i++) {
        span = document.createElement("span");
        span.classList.add("c-table__label");
        tableCells[i].prepend(span);
      }

      var tableLabels = tableHeaders[0].getElementsByClassName("c-table__col-label");
      var spanMod = document.getElementsByClassName("c-table__label");

      for (var i = 0; i < tableLabels.length; i++) {
        for (var a = 0; a < tableCells.length; a++) {
          spanMod[a].innerHTML = tableLabels[i].innerHTML;
        }
      }

      var b = tableLabels.length;
      for (var a = 0; a < tableCells.length; a++) {
        spanMod[a].innerHTML = tableLabels[a % b].innerHTML;
      }
    })();
  </script>
</body>

</html>